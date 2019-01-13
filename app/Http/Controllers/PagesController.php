<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Work;


class PagesController extends Controller
{
    public function home(){
        $meta = array(
            'title' => 'ComfyStudio Website Development Belfast',
            'description' => 'ComfyStudio Website Development, Website Design, Belfast',
            'section' => 'Home',
            'subSection' => 'Home'
        );
        $home = true;
        $works = WORK::where('is_active', 1)->limit(4)->orderBy('created_at', 'ASC')->get();

        return view('pages/home', compact('meta', 'home', 'works'));
    }

    public function about(){
        $meta = array(
            'title' => 'ComfyStudio Website Development Belfast',
            'description' => 'ComfyStudio Website Development, Website Design, Belfast',
            'section' => 'About',
            'subSection' => 'About'
        );

        $news = NEWS::where('is_active', 1)->where('publish_date', '<', 'CURDATE()')->limit(3)->orderBy('publish_date', 'ASC')->get();
        $works = WORK::where('is_active', 1)->limit(6)->orderBy('created_at', 'ASC')->get();
        return view('pages/about', compact('meta', 'news',  'works'));
    }

    public function contact(){
        $meta = array(
            'title' => 'ComfyStudio Website Development Belfast',
            'description' => 'ComfyStudio Website Development, Website Design, Belfast',
            'section' => 'Contact',
            'subSection' => 'Contact'
        );

        return view('pages/contact', compact('meta'));
    }
}
