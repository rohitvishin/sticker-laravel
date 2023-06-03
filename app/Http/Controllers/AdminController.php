<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Throwable;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        if (!Auth::guard('admin')->attempt($credentials))
            return response()->json([
                'message' => 'Invalid Username or password',
                'type' => 'error'
            ], 401);
        return response()->json([
            'message' => 'Welcome',
            'type' => 'success'
        ]);
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function category()
    {
        $data = Category::where('status', 1)->get();
        return view('admin.category', ['category' => $data]);
    }
    public function product()
    {
        return view('admin.product');
    }
    public function user()
    {
        return view('admin.user');
    }
    public function password()
    {
        return view('admin.password');
    }
    public function AddCategory(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'icon' => 'required',
            'parent_id' => 'required',
        ]);

        $image = $request->file('icon');
        $path = $image->store('icon', 'public');
        $data['icon'] = $path;
        $save = new Category($data);
        if ($save->save())
            return response()->json([
                'message' => 'Category Added',
                'type' => 'success'
            ]);
        else
            return response()->json([
                'message' => 'Operation failed',
                'type' => 'fail'
            ]);
    }
}
