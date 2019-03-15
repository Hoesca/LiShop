<?php
/**
 * Created by PhpStorm.
 * User: h9471
 * Date: 2019/3/14
 * Time: 16:37
 */


function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
