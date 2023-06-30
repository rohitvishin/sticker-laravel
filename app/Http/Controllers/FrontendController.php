<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $data['seo'] = $this->getSeoData('Home');
        $data['website_settings'] = [
            'page' => 'Home Page',
            'logo' => '',
        ];
        
        return view('frontend.home',$data);
    }

    public function getSeoData($page){
        return [
            'logoAlt' => 'Sticker Majesty | Best quality in Budget Price',
            'title' => 'Sticker Majesty Home Page',
            'keywords' => 'Sticker Majesty Home Page',
            'description' => 'Sticker Majesty Home Page',
            'metatitle' => 'Sticker Majesty Home Page',
            'metakeywords' => 'Sticker Majesty Home Page',
            'metadescription' => 'Sticker Majesty Home Page',
            'index' => '1'
        ];
    }
}