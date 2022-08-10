<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('client.auth.login');
    }
    public function postLogin(LoginRequest $request)
    {

        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt([
            'email' => $email,
            'password' => $password
        ])) {
            if (Auth::user()->role == 1) {
                return redirect()->route('admin.admin')->with('success', 'Đăng nhập thành công');
            } else {
                return redirect('')->with('success', 'Đăng nhập thành công');
            }
        } else {
            return redirect()->route('auth.getLogin')->with('error', 'Tài khoản hoặc mật khẩu không chính xác');
        }
    }

    public function getRegister()
    {
        return view('client.auth.register');
    }
    public function postRegister(RegisterRequest $request)
    {
        $data = $request->all();
        $data['role'] = config('roles.USER');
        $data['status'] = config('statuses.ACTIVE');
        $data['avatar'] = 'images/users/user.png';
        $data['password'] = Hash::make($request['password']);
        User::create($data);
        return redirect()->route('auth.getLogin')->with('success', 'Đăng ký thành công');
    }




    public function logout(Request $request)
    {
        // xóa session user đã đăng nhập
        Auth::logout();
        // Hủy toàn bộ session đi
        $request->session()->invalidate();
        // Tạo token mới
        $request->session()->regenerateToken();
        // quay về mh chịn
        return redirect()->route('auth.getLogin');
    }
}
