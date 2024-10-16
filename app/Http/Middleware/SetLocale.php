<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // 获取 URL 的第一个片段
        $locale = $request->segment(1);

        // 定义可用的语言
        $availableLocales = config('app.locales');
        if (in_array($locale, $availableLocales)) {
            // 如果第一个片段是有效语言，则设置它并从 URL 中移除
            App::setLocale($locale);
            //Session::put('locale', $locale);
        } else {
            // 如果没有找到有效语言，设置默认语言
            $locale = config('app.locale');
            App::setLocale($locale);
        }

        return $next($request);
    }
}
