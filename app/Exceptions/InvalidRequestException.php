<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;


class InvalidRequestException extends Exception
{
    //
    public function __construct($message = "", $code = 400)
    {
        parent::__construct($message, $code);
    }
    //在异常类中定义 render() 方法，该异常被触发时系统会调用 render() 方法来输出
    //我们在 render() 里判断
    //如果是 AJAX 请求则返回 JSON 格式的数据
    //否则就返回一个错误页面。
    public function render(Request $request)
    {
        if ($request->expectsJson()){
            return response()->json(['msg' => $this->message, $this->code]);
        }

        return view('pages.error', ['msg' => $this->message]);
    }
}
