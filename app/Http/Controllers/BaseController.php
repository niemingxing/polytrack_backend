<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    function init()
    {
       
    }

    public function renderNotice($message)
    {
        return view('tpl.notice', ['message' => $message]);
    }
}