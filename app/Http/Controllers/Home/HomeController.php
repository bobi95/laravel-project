<?php

namespace App\Http\Controllers\Home;

use \App\Http\Controllers\Controller;
use \App\Common\Util\PageRequest;
use \App\Common\Util\Page;
use \Illuminate\Http\Request;

/**
* HomeController
*/
class HomeController extends Controller
{

    private function getPage(Request $request) {
        // 10 items (0 to 9), 60 total items, page 0, 10 items per page
        $pageReq = PageRequest::fromRequest($request);
        $skip = $pageReq->getSkip();
        if ($skip + $pageReq->getLimit() > 120) {
            $skip = 120 - $pageReq->getLimit();
        }
        $data = range($skip, $skip + $pageReq->getLimit() - 1);
        return Page::fromPageable($data, 120, $pageReq);
    }

    public function index(Request $request) {
        return view('home.index')->withPage($this->getPage($request));
    }

    public function about() {
        return view('home.index')->withPage($this->getPage());
    }

    public function contact() {
        return view('home.index')->withPage($this->getPage());
    }
}