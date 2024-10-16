<?php

namespace App\Http\Controllers;

use App\Lib\Api\CloudflareApi;
use App\Lib\Api\RapidApi;
use App\Models\AudioModel;
use App\Services\UrlResolverService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends BaseController
{
    
    public function update()
    {
        $this->init();
        //获取最新的8个转换记录
        $audioList = [];
        $tdk = [
            'title' => __('messages.website_title'),
            'description' => __('messages.website_description'),
            'keywords' => __('messages.website_keywords')
        ];
        $canonicalUrl = localized_url('');
        $data = [
            'tdk' => $tdk,
            'cur_nav' => 'home',
            'audio_list' => $audioList,
            'canonical_url' => $canonicalUrl
        ];

        // 获取 HTML 内容
        $htmlContent = view('tpl.t1', $data)->render();

        // 保存到 public 目录下
        file_put_contents(public_path('index.html'), $htmlContent);

        return response()->json(['message' => 'HTML 文件已保存到 public 目录下.']);
    }
}