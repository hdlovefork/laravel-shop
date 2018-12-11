<?php
/**
 * Created by PhpStorm.
 * User: Dean
 * Email: 1602264241@qq.com
 * Date: 2018/11/27
 * Time: 上午11:02
 */
if (!function_exists('test_helper')) {

    function test_helper()
    {
        return 'OK';
    }
}

if (!function_exists('route_class')) {

    function route_class()
    {
        return str_replace('.', '-', Route::currentRouteName());
    }
}

if (!function_exists('ngrok_url')) {

    function ngrok_url($routeName, $parameters = [])
    {
        // 开发环境，并且配置了 NGROK_URL
        if (app()->environment('local') && $url = config('app.ngrok_url')) {
            // route() 函数第三个参数代表是否绝对路径
            return $url . route($routeName, $parameters, false);
        }

        return route($routeName, $parameters);
    }
}

if(!function_exists('big_number')){
    // 默认的精度为小数点后两位
    function big_number($number, $scale = 2)
    {
        return new \Moontoast\Math\BigNumber($number, $scale);
    }
}