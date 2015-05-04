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

        if ($t['children'] !== '')
        {
            if(Yii::$app->request->absoluteUrl==$t['url'])
            {

                $html .= "<li class='hover'><a href='{$t['url']}'>" . $cl->lang($t['cname'])[$lang] . "</a>";
                $html .= '<div class="menu">' . procHtml($t['children'], $lang) . '</div>';
                $html .= "</li>";
            }else
            {
                $html .= "<li><a href='{$t['url']}'>" . $cl->lang($t['cname'])[$lang] . "</a>";
                $html .= '<div class="menu">' . procHtml($t['children'], $lang) . '</div>';
                $html .= "</li>";
            }

        } else
        {
            //如果没有子菜单
            if ($t['link'] == Yii::$app->params['siteUrl'])
            {
                if(Yii::$app->request->get('menu')=='')
                {
                    $html .= "<li class='hover'><a href='{$t['url']}/?lang=" . Yii::$app->language . "'>{$cl->lang($t['cname'])[$lang]}</a></li>";
                }else
                {

                    $html .= "<li><a href='{$t['url']}/?lang=" . Yii::$app->language . "'>{$cl->lang($t['cname'])[$lang]}</a></li>";
                }
            }
            else
            {
                //如果不是首页
                $html .= "<p><a href='{$t['url']}'>{$cl->lang($t['cname'])[$lang]}</a></p>";
            }
        }
    }

    return $html;
}



function procHtml2($tree,$lang)
{
    $cl = new menu();
    $cache = Yii::$app->cache;
    $html = '';
    foreach($tree as $t)
    {
        if(Yii::$app->request->get('menu'))
        {
            //如果有get['menu']
            if($t['children']!== '')
            {
                //如果有子菜单
                if(in_array($t['id'],$cache['menu_'.Yii::$app->request->get('menu').'_parents']))
                {
                    //如果是当前菜单或其父类
                    $html .= "<li class='hover'><a href='{$t['url']}'>".$cl->lang($t['cname'])[$lang]."</a>";
                    $html.= '<div class="menu">'.procHtml($t['children'],$lang).'</div>';
                    $html.="</li>";
                }else
                {
                    //不是当前菜单或其父类
                    $html .= "<li><a href='{$t['url']}'>".$cl->lang($t['cname'])[$lang]."</a>";
                    $html.= '<div class="menu">'.procHtml($t['children'],$lang).'</div>';
                    $html.="</li>";
                }
            }
            else
            {
                //如果没有子菜单
                if($t['link']==Yii::$app->params['siteUrl'])
                {
                    //如果是首页
                    $html.= "<li><a href='{$t['url']}/?lang=".Yii::$app->language."'>{$cl->lang($t['cname'])[$lang]}</a></li>";
                }
                else
                {
                    //如果不是首页
                    $html.= "<p><a href='{$t['url']}'>{$cl->lang($t['cname'])[$lang]}</a></p>";
                }
            }
        }else
        {
            //如果当前页是首页
            if($t['link']==Yii::$app->params['siteUrl'] )
            {
                //如果外连接跟设定网站url一致
                $html.= "<li class='hover'><a href='{$t['url']}/?lang=".Yii::$app->language."'>{$cl->lang($t['cname'])[$lang]}</a></li>";
            }
            else
            {

                $html.= "<li><a href='{$t['url']}'>{$cl->lang($t['cname'])[$lang]}</a></li>";
            }

        }

    }
    return $html;
}

$tree = getTree($menu, 0);

echo procHtml($tree,$lang);
?>
