<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')){
           
            $data = $request->all();
            // $rules = [
            //     'email' => 'required|max:255|exists',
            //     'password' => 'required',
            // ];

            // $custommesg = [
            //     'email.required' => 'Email is required',
            //     'email.exists' => 'Email id is not exist please contact to your serveice provider',
            //     'password.required' => 'Password is required',

            // ];
            // $this->validate($request, $rules, $custommesg);

            $validated = $request->validate([
                'email' => 'required|exists:admins|max:255',
                'password' => 'required',
            ]);

            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']]))
            {
                

                return redirect('admin/dashboard')->with('message', 'You are successfully Login!');
            }else{
                
                return redirect()->back()->with('error_message','Invalid Email or Password');
            }

            }
       return view('admin.adminlogin');

    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin')->with('message', 'You are successfully Logout!');
    }
}
