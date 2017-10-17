<?php
/**
 * Created by PhpStorm.
 * User: Daria
 * Date: 16.10.2017
 * Time: 19:46
 */

class Menu
{
    public static $items = array(
        1 => "Start",
        2 => "About",
        3 => "Top List");

    public static function getMenu($item_number) {
        $result = '<div class="header__menu"><ul class="header__list">';
        foreach (self::$items as $i => $value) {
            $item_name = $value;
            if ($i == $item_number) {
                $result .= '<li class="header__item header__item-active">'.$item_name.'</li>';
            }
            else {
                $result .= '<a href="index.php?page='.$i.'"><li class="header__item">'.$item_name.'</li></a>';
            }
        }
        $result .= '</ul></div>';
        return $result;
    }

}