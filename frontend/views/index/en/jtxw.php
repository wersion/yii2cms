<?php
use frontend\widgets\Pager;
use common\helps\menu;
$page_size = 2;
$array = Yii::$app->request->get('page')?array_slice($cache['menu_'.$id.'_articles'],$page_size*(Yii::$app->request->get('page')-1),$page_size):array_slice($cache['menu_'.$id.'_articles'],0,$page_size);
$session = Yii::$app->session;
?>
<!--内容区-->
<div id="content">
    <div id="cont">
        <?php include '../views/index/left_l.php'?>
        <div class="cont_right">
            <div class="cont_right_weizhi">Position：<span>HOME <?= $position?></div>
            <div class="zoujin">
                <div class="zoujin_bt"><?= $cl->lang($cache['menu_'.$id]['cname'])[$lang]?></div>
                <div class="zoujin_nr">

                    <?php if($menu['file']):?>
                        <div class="new_iconimg"><img src="<?= Yii::$app->params['adminUrl']?><?= $menu['file']?>"  /></div>
                    <?php endif;?>
                    <div class="new_list">
                        <ul>
                            <?php foreach($array as $key=>$article):?>
                            <li>
                                <div class="styleone">华粮动态<br />OUR NEW</div>
                                <div class="styletwo"><a href="/page/<?= $article['id']?>?menu=<?= Yii::$app->request->get('menu')?>" ><?= $article['title']?></a></div>
                                <div class="stylethree"><?= date('Y-m-d',$article['created_at'])?></div>
                            </li>
                            <?php endforeach;?>

                        </ul>
                    </div>
                </div>


            </div>
            <div class="clear"></div>
            <div class="biaozhi"><img src="../images/jiao2.png" /></div>

            <div class="fenye">
                <?= Pager::widget([
                    'data'=>$cache['menu_'.$id.'_articles'],
                    'page_size'=>$page_size
                ])?>
            </div>

        </div>
    </div>
</div>
