<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function nvklogin(){
        return view('Login');
    }

    public function nvkloginSubmit(Request $request)
    {
        //validation
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        // //check login -> store session -> redirect home
        // $nvkEmail = $request->input('email');
        // $nvkpass = $request->input('password');

        // $nvkLoginSession = [
        //     'email'=>$nvkEmail,
        //     'password'=>$nvkpass
        // ];
        // $tvc_json = json_encode($nvkLoginSession);


        // if($nvkEmail == "nguyenvukien02@gmail.com " && $nvkpass=="02102005@"){
        //     //lưa session
        //     $request->session()->put('K23CNT1-NguyenVuKien',$nvkEmail);
        //     return redirect('/');
        // }

        //  return redirect()->back()->with('nvk-error','lỗi đăng nhập');
         // Lấy và làm sạch dữ liệu từ form
    $nvkEmail = trim($request->input('email')); // Loại bỏ khoảng trắng
    $nvkpass = $request->input('password');

    // Kiểm tra thông tin đăng nhập
    if ($nvkEmail === "nguyenvukien02@gmail.com" && $nvkpass === "02102005@") {
        // Lưu thông tin vào session
        $request->session()->put('K23CNT1-NguyenVuKien', $nvkEmail);
        return redirect('/'); // Chuyển hướng về trang chủ
    }

    // Nếu đăng nhập thất bại, quay lại với thông báo lỗi
    return redirect()->back()->with('nvk-error', 'Thông tin đăng nhập không đúng.');
    }

        public function nvklogout(Request $request)
        {
            $request->session()->forget('K23CNT1-NguyenVuKien');
            return redirect()->back();
        }
}
