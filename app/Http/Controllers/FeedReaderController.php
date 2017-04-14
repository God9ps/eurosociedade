<?php

namespace euromilhoes\Http\Controllers;

use Illuminate\Contracts\View\View;
use willvincent\Feeds\FeedsFactory;

class FeedReaderController extends Controller
{
    public function feedreader() {
        $feed = Feeds::make('https://www.jogossantacasa.pt/web/SCRss/rssFeedCartRes');
        $data = array(
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items'     => $feed->get_items(),
        );

        return View::make('feed', $data);
    }
}
