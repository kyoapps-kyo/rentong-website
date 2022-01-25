<?php
//路由名称
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
//路由前缀
function route_prefix()
{
    return str_replace('/', '', URL::getRequest()->route()->getPrefix());
}
//客户端使用语言
function header_language()
{
    return str_replace('/', '', URL::getRequest()->header('accept-language'));
}
