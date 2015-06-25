<?php
use frontend\widgets\Articlepager;
$page = Yii::$app->request->getQueryParam('page')? Yii::$app->request->getQueryParam('page')-1:0;
?>
<!--内容区-->
<div id="content">
    <div id="cont">
        <?php include '../views/index/left_l.php'?>
        <div class="cont_right">
            <div class="cont_right_weizhi">當前位置：<span>首頁</span> <?= $position?></div>
            <div class="zoujin">
                <div class="zoujin_bt"><?= $cl->lang($cache['menu_'.$id]['cname'])[$lang]?></div>
                <div class="zoujin_nr">

                    <div class="linian_bt">
                        <ul>
                            <?php foreach($cache['menu_'.$id.'_articles'] as $key=>$article):?>
                                <li <?php if($key==0):?>class="hover" <?php endif ?> ><?= $article['title']?></li>
                            <?php endforeach?>
                        </ul>
                        <div class="clear"></div>
                    </div>

                    <div class="linian_nr">
                        <?php foreach($cache['menu_'.$id.'_articles'] as $key=>$article):?>
                        <div class="hide" <?php if($key==0):?> style="display:block" <?php endif;?> >
                            <?= $article['content']?>
                            <?= $cache['menu_'.$menu_id.'_article_'.$article['id'].'_pages'][$page] ?>

                        </div>
                        <?php endforeach; ?>

                    </div>

                </div>
                
            </div>
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
