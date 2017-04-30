<?php

namespace euromilhoes\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use willvincent\Feeds\Feeds;

class LotteryController extends Controller
{
    public function getLotteries(){

        $feed = Feeds::make('https://www.jogossantacasa.pt/web/SCRss/rssFeedCartRes');
        $data = array(
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items'     => $feed->get_items(),
        );

        return View::make('feed', $data);
    }
}
