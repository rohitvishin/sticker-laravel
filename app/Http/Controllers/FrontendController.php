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
    public function shop($category = NULL, $subCategory = NULL)
    {
        $data['seo'] = $this->getSeoData('Home');
        $data['website_settings'] = [
            'page' => 'Home Page',
            'logo' => '',
        ];
        $limit = 10;
        $offset = 0;
        if ($category != NULL && $subCategory != NULL) {
            $data['products'] = Product::where('status', 1)->orderBy('id', 'desc')->with('productImage')->paginate($limit);
        } else {
            $data['products'] = Product::where('status', 1)->orderBy('id', 'desc')->with('productImage')->paginate($limit);
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

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            // Here, you can create a new user or authenticate the existing user based on the $user data.
            // For example:
            $existingUser = User::where('email', $user->email)->first();
            if ($existingUser) {
                Auth::login($existingUser);
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    // You may store other relevant data from the $user object.
                ]);
                Auth::login($newUser);
            }
            // After creating/authenticating the user, you can redirect to the desired page.
            return redirect()->route('home');
        } catch (\Exception $e) {
            // Handle any errors that occur during the login process.
            return redirect()->route('login')->with('error', 'Google login failed.');
        }
    }

    // public function authUser(){

    // }

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