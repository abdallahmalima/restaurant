<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\FooterContact;
use App\Models\FooterDesc;
use App\Models\FooterLink;
use App\Models\FooterSub;
use App\Models\Fsection;
use App\Models\Gallery;
use App\Models\Header;
use App\Models\MenuItem;
use App\Models\PageTitle;
use App\Models\PageTitleHeader;
use App\Models\Price;
use App\Models\Ssection;
use App\Models\SsectionItem;
use App\Models\Team;
use App\Models\Testimony;
use Illuminate\Http\Request;

class FontPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        

        return view('index',[
            'headers'=>Header::all(),
            'menu_items'=>MenuItem::all(),
            'teams'=>Team::all(),
            'testimonies'=>Testimony::all(),
            'categories'=>Category::all(),
            'galleries'=>Gallery::all(),
            'blogs'=>Blog::all(),
            'prices'=>Price::take(3)->get(),
            'fsections'=>Fsection::all(),
            'footer_links'=>FooterLink::all(),
            'ssections'=>Ssection::take(4)->get(),
            'footer_desc'=>FooterDesc::First(),
            'footer_sub'=>FooterSub::First(),
            'footer_contact'=>FooterContact::First(),
            'ssection_items'=>SsectionItem::all(),
            'page_menu'=>$this->getPageTittle('page_menu')->first(),
            'page_gallery'=>$this->getPageTittle('page_gallery')->first(),
            'page_testimony'=>$this->getPageTittle('page_testimony')->first(),
            'page_team'=>$this->getPageTittle('page_team')->first(),
            'page_price'=>$this->getPageTittle('page_price')->first(),
            'page_blog'=>$this->getPageTittle('page_blog')->first(),
            'page_contact'=>$this->getPageTittle('page_contact')->first(),
           
        ]);
    }

    private function getPageTittle($page_name){
        return PageTitleHeader::where('page_title_id',PageTitle::where('name',$page_name)->first()->id);
    }
}
