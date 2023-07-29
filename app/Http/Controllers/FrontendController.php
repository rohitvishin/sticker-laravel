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

    public function login(){
        $data['seo'] = $this->getSeoData('Home');
        $data['website_settings'] = [
            'page' => 'Home Page',
            'logo' => '',
        ];
        
        return view('frontend.login',$data);
    }

    public function register(){
        $data['seo'] = $this->getSeoData('Home');
        $data['website_settings'] = [
            'page' => 'Home Page',
            'logo' => '',
        ];
        
        return view('frontend.register',$data);
    }

    public function shop(){
        $data['seo'] = $this->getSeoData('Home');
        $data['website_settings'] = [
            'page' => 'Home Page',
            'logo' => '',
        ];
        
        return view('frontend.shop',$data);
    }

    public function categories(){
        $data['seo'] = $this->getSeoData('Home');
        $data['website_settings'] = [
            'page' => 'Home Page',
            'logo' => '',
        ];
        
        return view('frontend.categories',$data);
    }

    public function profile(){
        $data['seo'] = $this->getSeoData('Home');
        $data['website_settings'] = [
            'page' => 'Home Page',
            'logo' => '',
        ];
        
        return view('frontend.profile',$data);
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