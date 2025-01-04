<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckCookie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->hasCookie('ctTaiKhoan')) {
            // Nếu không có cookie, chuyển hướng đến trang đăng nhập
            return redirect('/ctAdmin/ct-login'); // Thay đổi '/login' thành đường dẫn đến trang đăng nhập của bạn
        }

        return $next($request);
    }
}
