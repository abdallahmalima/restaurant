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
            'ssections'=>Ssection::all(),
            'footer_desc'=>FooterDesc::First(),
            'footer_sub'=>FooterSub::First(),
            'footer_contact'=>FooterContact::First(),
            'ssection_items'=>SsectionItem::all(),
            'page_menu'=>PageTitleHeader::where('page_title_id',PageTitle::where('name','page_menu')->first()->id)->first(),
            'page_gallery'=>PageTitleHeader::where('page_title_id',PageTitle::where('name','page_gallery')->first()->id)->first(),
            'page_testimony'=>PageTitleHeader::where('page_title_id',PageTitle::where('name','page_testimony')->first()->id)->first(),
            'page_team'=>PageTitleHeader::where('page_title_id',PageTitle::where('name','page_team')->first()->id)->first(),
            'page_price'=>PageTitleHeader::where('page_title_id',PageTitle::where('name','page_price')->first()->id)->first(),
            'page_blog'=>PageTitleHeader::where('page_title_id',PageTitle::where('name','page_blog')->first()->id)->first(),
            'page_contact'=>PageTitleHeader::where('page_title_id',PageTitle::where('name','page_contact')->first()->id)->first(),
           
        ]);
    }
}
