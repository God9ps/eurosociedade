<?php

namespace euromilhoes\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Feeds;

class LotteryController extends Controller
{
    public function getLotteries(){

        $feed = Feeds::make('https://www.jogossantacasa.pt/web/SCRss/rssFeedCartRes');

        $count = count($feed->get_items());

//        dd(substr($feed->get_items()[1]->data['child']['']['description'][0]['data'], 18,7));

        $teste = explode("\n", $feed->get_items()[7]->data['child']['']['description'][0]['data']);

        //dd($teste);

        /*dd($feed->get_items()[1]->data['child']['']['description'][0]['data']);*/

        //dd($feed->get_items()[1]->data['child']['']['description'][0]['data']);

        for ($i=0; $i<$count;$i++){
            $lottery[$i]['title'] = $feed->get_items()[$i]->data['child']['']['title'][0]['data'];
            $str = $feed->get_items()[$i]->data['child']['']['description'][0]['data'];
            $lottery[$i]['lottery'] = $this->getLotteryKey($i, $str);
        }

        /*dd($feed->get_items()[2]->data['child']['']['title'][0]['data']);*/
//        dd($feed->get_items()[8]->data['child'][""]["description"][0]['data']);

        return view('panels', compact('lottery'));
    }

    public function getLotteryKey($lotteryId, $key)
    {
        if($lotteryId == 0){
            $result['number'] = substr($key, 18,7);
            $items = explode("\n", $key);
            $x = count($items);
            $result['key'][0] = $items[0];
            for($i=1;$i<$x;$i++){
                $result['key'][$i] = substr($items[$i],-5,5);
            }
            array_shift($result['key']);
            return $result;

        }elseif ($lotteryId == 1){
            $result['number'] = substr($key, 18,7);
            $items = explode("\n", $key);
            $x = count($items);
            $result['key'][0] = $items[0];
            for($i=1;$i<$x;$i++){
                $result['key'][$i] = substr($items[$i],-5,5);
            }
            array_shift($result['key']);
            return $result;

        }elseif ($lotteryId == 2){
            $result['number'] = substr($key, 16,7);
            $items = explode(":", $key);
            $luckyKey = explode(" ",substr($items[1],1));
            $result['key']['games'] = $luckyKey[0];
            $result['key']['super14'] = $luckyKey[1];
            return $result;
        }elseif ($lotteryId == 3){
            $result['number'] = substr($key, 16,7);
            $items = explode(":", $key);
            $luckyKey = explode(" ",substr($items[1],1));
            $result['key']['games'] = $luckyKey[0];
            $result['key']['super14'] = $luckyKey[1];
            return $result;
        }elseif ($lotteryId == 4){
            $result['number'] = substr($key, 15,7);
            $items = explode(":", $key);
            $result['key'][0] = substr($items[1],1);
            return $result;
        }elseif ($lotteryId == 5){
            $result['number'] = substr($key, 15,8);
            $items = explode(":", $key);
            $luckyKey = explode(" + ",substr($items[1],1));
            $result['key']['numbers'] = substr($luckyKey[0],1);
            $result['key']['suplementar'] = $luckyKey[1];
            return $result;
        }elseif ($lotteryId == 6){
            $result['number'] = substr($key, 16,7);
            $items = explode(":", $key);
            $result['key'][0] = substr($items[1],1);
            return $result;
        }elseif ($lotteryId == 7){
            $result['number'] = substr($key, 16,7);
            $items = explode(":", $key);

            $result['key'] = explode(",", $items[1]);
            $x = count($result['key']);
            for($i=0;$i<$x;$i++){

                $result['key'][$i] = substr($result['key'][$i],1);
            }
            array_shift($result['key']);
            return $result;
        }elseif ($lotteryId == 8){
            $result['number'] = substr($key, 15,8);
            $items = explode(":", $key);
            $luckyKey = explode(" + ",substr($items[1],1));
            $result['key']['numbers'] = substr($luckyKey[0],1);
            $result['key']['stars'] = $luckyKey[1];
            return $result;
        }
    }
}
