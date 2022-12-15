<?php

namespace App\Http\Controllers\FrontEndHtml;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PortfolioHomeController extends Controller
{
    public function index() 
    {
      //  $page_data = Page::where('id',1)->first();
        return view('frontendhtml.portfoliohome'
        //, compact('page_data')
    );
    }
}
