<?php
/**
 * Created by PhpStorm.
 * User: wm
 * Date: 2015/4/10
 * Time: 9:54
 */

$parentsArray = $cache['column_'.$id.'_parents'];
foreach($parentsArray as $row)
{
    echo $cache['column_'.$row['id']]['cname'].'>';
}
?>