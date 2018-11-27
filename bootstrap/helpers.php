<?php
/**
 * Created by PhpStorm.
 * User: Dean
 * Email: 1602264241@qq.com
 * Date: 2018/11/27
 * Time: 上午11:02
 */
if(!function_exists('test_helper')){
    function test_helper(){
        return 'OK';
    }
}

if(!function_exists('route_class')){

    function route_class()
    {
        return str_replace('.', '-', Route::currentRouteName());
    }
}

