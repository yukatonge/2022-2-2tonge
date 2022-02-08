<?php

namespace App\Http\COntrollers;

use Illuminate\Http\Request;

class TestController extends Controllers
{
    public function index()
    {
        $item = [
            'content' => '自由に入力してください',
        ];
        return view('index', $item);
    }
    public function post(Request $request)
    {
        $content = $request->content;
        $item = [
            'content' => $content . 'と入力しましたね'
        ];
        return view('index', $item);
    }
}