<?php
/**
 * Created by PhpStorm.
 * User: Daria
 * Date: 16.10.2017
 * Time: 22:40
 */

class Content
{
    public static $pages=array(
        1=>'start.html',
        2=>'about.html',
        3=>'top.html'
    );

    public static function getPage($page_number) {
        return (include('assets/' . self::$pages[$page_number]));
    }
}