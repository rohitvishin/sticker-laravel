<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Socialite;

class FrontendController extends Controller
{
    public function index()
    {
        $data['seo'] = $this->getSeoData('Home');
        $data['navBar'] = $this->getNavBar();
        $data['website_settings'] = [
            'page' => 'Home Page',
            'logo' => '',
        ];

        return view('frontend.home', $data);
    }

    public function login()
    {
        $data['seo'] = $this->getSeoData('Home');
        $data['website_settings'] = [
            'page' => 'Home Page',
            'logo' => '',
        ];

        return view('frontend.login', $data);
    }

    public function validateLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return response([
                'message' => 'success',
                'status' => 1,
            ]);
        }
        return response([
            'message' => 'fail',
            'status' => 0,
        ]);
    }

    public function register()
    {
        $data['seo'] = $this->getSeoData('Home');
        $data['website_settings'] = [
            'page' => 'Home Page',
            'logo' => '',
        ];

        return view('frontend.register', $data);
    }
    
    public function submitRegister(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|unique:users,mobile',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        $register = new User($data);
        if ($register->save()) {
            return response([
                'message' => 'success',
                'status' => 1,
            ]);
        }
        return response([
            'message' => 'fail',
            'status' => 0,
        ]);
    }

    public function shop($subCategory = NULL)
    {
        $data['seo'] = $this->getSeoData('Home');
        $data['website_settings'] = [
            'page' => 'Home Page',
            'logo' => '',
        ];
        $limit = 10;
        $offset = 0;

        if($subCategory != NULL){
            $categoryIds = Category::select('id')->where('slug', $subCategory)->first();
        }
        
        if ($subCategory != NULL) {
            $data['products'] = Product::where(['category_id' => $categoryIds['id'], 'status' => 1])->orderBy('id', 'desc')->with(['ProductImage','category'])->paginate($limit);
        } else {
            $data['products'] = Product::where('status', 1)->orderBy('id', 'desc')->with('ProductImage')->paginate($limit);
        }


        dd($data);

        return view('frontend.shop', $data);
    }

    public function categories()
    {
        $data['seo'] = $this->getSeoData('Home');
        $data['website_settings'] = [
            'page' => 'Home Page',
            'logo' => '',
        ];

        return view('frontend.categories', $data);
    }

    public function profile()
    {
        $data['seo'] = $this->getSeoData('Home');
        $data['website_settings'] = [
            'page' => 'Home Page',
            'logo' => '',
        ];

        return view('frontend.profile', $data);
    }

    public function getSeoData($page)
    {
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

    public function getNavBar()
    {
        $data = [];

        $data['mainCategory'] = optional(Category::where(['parent_id' => 0, 'status' => 1])->get())->toArray();
        $data['subCategory'] = optional(Category::where('parent_id', '!=', 0)->where('status', 1)->get())->toArray();

        $mainWithSubCategory = [];
        if (count($data['subCategory']) > 0) {
            $subCategory = $data['subCategory'];
            foreach ($subCategory as $singleSubCategory) {
                $parent_index = array_search($singleSubCategory['parent_id'], array_column($data['mainCategory'], 'id'));
                if ($parent_index !== FALSE) {
                    if (isset($data['mainCategory'][$parent_index]['subCategories']))
                        array_push($data['mainCategory'][$parent_index]['subCategories'], $singleSubCategory);
                    else {
                        $data['mainCategory'][$parent_index]['subCategories'] = [];
                        array_push($data['mainCategory'][$parent_index]['subCategories'], $singleSubCategory);
                    }
                }
            }
        }

        return $data;
    }

    
}