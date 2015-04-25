<?php
/**
 * Created by PhpStorm.
 * User: wm
 * Date: 2015/3/23
 * Time: 14:29
 */
use common\helps\menu;

function getTree($data, $pId)
{
    $tree = '';
    foreach($data as $k => $v)
    {
        if($v['parentid'] == $pId)
        {
            $v['children'] = getTree($data, $v['id']);
            $tree[] = $v;
        }
    }
    return $tree;
}

function procHtml($tree,$lang)
{
    $cl = new menu();
    $cache = Yii::$app->cache;
    $html = '';
    foreach($tree as $t)
    {
        if($t['children'] == '' and $t['parentid']==0)
        {

            $html .= "<li><a href='/menu/{$t['id']}'>".$cl->lang($t['cname'])[$lang]."</a></li>";


        }
        elseif($t['children'] == '' and $t['parentid'] !==0)
        {
            $html.= "<p><a href='/menu/{$t['id']}'>{$cl->lang($t['cname'])[$lang]}</a></p>";
        }else
        {
            if(Yii::$app->request->get('menu'))
            {

                if(in_array($t['id'],$cache['menu_'.Yii::$app->request->get('menu').'_parents']))
                {

                    $html .= "<li class='style hover'><a href='/menu/{$t['id']}'>".$cl->lang($t['cname'])[$lang]."</a>";
                    $html.= '<div class="menu">'.procHtml($t['children'],$lang).'</div>';
                    $html.="</li>";
                }else
                {
                    $html .= "<li><a href='/menu/{$t['id']}'>".$cl->lang($t['cname'])[$lang]."</a>";
                    $html.= '<div class="menu">'.procHtml($t['children'],$lang).'</div>';
                    $html.="</li>";
                }
            }else
            {
                $html .= "<li><a href='/menu/{$t['id']}'>".$cl->lang($t['cname'])[$lang]."</a>";
                $html.= '<div class="menu">'.procHtml($t['children'],$lang).'</div>';
                $html.="</li>";
            }

        }
    }
    return $html;
}

$tree = getTree($menu, 0);

echo procHtml($tree,$lang);
?>
