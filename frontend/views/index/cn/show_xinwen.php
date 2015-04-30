<?php
use frontend\widgets\Articlepager;
$page = Yii::$app->request->getQueryParam('page')? Yii::$app->request->getQueryParam('page')-1:0;
?>
<!--内容区-->
<div id="content">
    <div id="cont">
        <div class="cont_left">
            <div class="cont_left_bt">
                <span><?= $cl->lang($cache['menu_'.$menu_id.'_parent']['cname'])[$lang]?></span>
            </div>

            <div class="cont_left_list">
                <ul>
                    <?php foreach($cache['menu_'.$menu_id.'_brother'] as $child):?>
                        <li <?php if($menu_id==$child['id']):?> class="hover" <?php endif?> ><a href="/menu/<?= $child['id']?>"><?= $cl->lang($child['cname'])[$lang] ?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>

        </div>
        <div class="cont_right">
            <div class="cont_right_weizhi">当前位置：<span>首页</span><?= $position?></div>
            <div class="new">
                <div class="newcont">
                    <div class="newcont_bt">
                        <p class="bt"><?= $cache['menu_'.$menu_id.'_article_'.$id]['title'] ?></p>
                        <p class="js"><span><?= $cache['menu_'.$menu_id.'_article_'.$id]['created_at'] ?></span> <span>作者：华粮官网</span></p>
                    </div>

                    <div class="newcont_nr">

                        <?= $cache['menu_'.$menu_id.'_article_'.$id.'_pages'][$page] ?>

                    </div>
                </div>

            </div>
            <div class="clear"></div>
            <div class="biaozhi"><img src="../images/jiao2.png" /></div>

            <div class="fenye">
                <?= Articlepager::widget([
                    'data'=>$cache['menu_'.$menu_id.'_article_'.$id.'_pages'],
                    'page_size'=>1
                ])?>
            </div>
        </div>
    </div>
</div>
