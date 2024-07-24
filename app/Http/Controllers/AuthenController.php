<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthenController extends Controller
{
    public function login()
    {
        return view('user.login.login');
    }

    public function postLogin(Request $req)
    {
        $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ], [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Password không được để trống'
        ]);


        if (Auth::attempt([
            'email' => $req->email,
            'password' => $req->password,
        ]) && Auth::user()->role == '1') {
            return redirect()->route('admin.users.listUser');
        } elseif (Auth::attempt([
            'email' => $req->email,
            'password' => $req->password,
        ], $req->remember) && Auth::user()->role == '2') {
            return view('user.home.home');
        } else {
            return redirect()->back()->with([
                'messageErr' => 'Email hoăc mật khẩu không đúng'
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with([
            'messageErr' => 'Đăng xuất thành công'
        ]);
    }

    public function register()
    {
        return view('user.login.register');
    }

    public function postRegister(Request $req)
    {
        $req->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ], [
            'name.required' => 'Tên không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email phải đúng định dạng',
            'password.required' => 'Password không được để trống',
        ]);

        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'role' => 2
        ];
        // dd($data);
        if (User::create($data)) {;
            return redirect()->route('register')->with([
                'Err' => 'Tạo tài khoản thành công'
            ]);
        }
    }

    public function forgotPass()
    {
        return view('user.login.forgot');
    }

    public function forgotPassPost(Request $req)
    {
        $req->validate([
            'email' => ['required', 'email', 'exists:users']
        ]);

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $req->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('user.email.forget-pass', ['token' => $token], function ($mes) use ($req) {
            $mes->to($req->email);
            $mes->subject("Reset Password");
        });

        return redirect()->route('forgotPass')->with([
            'messageErr' => 'Vui lòng kiếm tra email của bạn'
        ]);
    }

    public function resetPass($token)
    {
        return view('user.login.newpass', compact('token'));
    }

    public function resetPostPass(Request $req)
    {
        $req->validate([
            'email' => "required|email|exists:users",
            'password' => "required",
            'passCf' => "required|same:password",
        ]);

        $updatePass = DB::table('password_reset_tokens')->where([
            'email' => $req->email,
            'token' => $req->token
        ])->first();

        // if (!$updatePass) {
        //     return redirect()->route('resetPass', ['token' => $req->token])->with([
        //         'messageErr' => 'Lỗi'
        //     ]);
        // }

        User::where('email', $req->email)->update(['password' => Hash::make($req->password)]);
        DB::table('password_reset_tokens')->where(['email' => $req->email])->delete();
        return redirect()->route('login')->with([
            'messageErr' => 'Reset password thành công'
        ]);
    }
}
