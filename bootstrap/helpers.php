<?php
//
function route_class()
{
	return str_replace('.', '-', Route::currentRouteName());
}

/**
 * make_excerpt 截取200个字符的数据
 * @param unknown $value
 * @param number $length
 * @return Ambigous <string, string>
 */
function make_excerpt($value, $length = 200)
{
	$excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
	return str_limit($excerpt, $length);
}