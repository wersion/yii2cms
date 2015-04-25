<?php
/**
 * Created by PhpStorm.
 * User: wm
 * Date: 2015/4/9
 * Time: 16:47
 */

namespace common\helps;


class menu {

    function lang($str)
    {
        $arr = explode('//',$str);
        return $arr;
    }

} 