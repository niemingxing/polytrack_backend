<?php

/**
 * 判断释放微信小程序
 * @return bool
 */
function isWeixinMiniProgram()
{
    $ua = request()->header('User-Agent');
    $referer = request()->header('Referer');
    if (strpos($ua, 'MicroMessenger') !== false && strpos($ua, 'miniProgram') !== false && strpos($referer, 'servicewechat.com') !== false) {
        return true;
    }
    return false;
}

if (!function_exists('localized_url')) {
    function localized_url($path)
    {
        $locale = app()->getLocale();
        $defaultLocale = config('app.fallback_locale');
        // 如果当前语言是默认语言，不添加语言前缀
        if ($locale === $defaultLocale) {
            return url($path);
        }
        return url($locale . '/' . $path);
    }
}

//定一个在当前地址前面增加语言前缀的函数，当前地址动态获取
if (!function_exists('lang_url')) {
    function lang_url($locale)
    {
        $path = request()->path();
        $segments = explode('/', $path);
        $firstSegment = $segments[0];
        if (in_array($firstSegment, config('app.locales'))) {
            array_shift($segments);
        }
        $path = implode('/', $segments);
        $query = request()->query();

        return url($locale . '/' . $path) . (empty($query) ? '' : '?' . http_build_query($query));
    }
}

