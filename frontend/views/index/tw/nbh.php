<?php
use frontend\widgets\Pager;


$page_size = 3;
$array = Yii::$app->request->get('page')?array_slice($cache['column_'.$id.'_articles'],$page_size*(Yii::$app->request->get('page')-1),$page_size):array_slice($cache['column_'.$id.'_articles'],0,$page_size);
?>
<!--内容区-->
<div id="content">
    <div id="cont2">

        <div class="cont2_right_weizhi">當前位置：<span>首頁</span> <?= $position?></div>
        <div class="nbh" >
            <div class="nbh_leftbt"><?= $cl->lang($cache['column_'.$id]['cname'])[$lang]?></div>
            <div class="nbh_rightnr">
                <ul>
                    <?php foreach($array as $key=>$article):?>
                    <li>
                        <div class="cplist22">
                            <div class="cplist_img22"><a href="/nbh/<?= $article['id']?>?column=<?= Yii::$app->request->get('column')?>" ><img src="<?= Yii::$app->params['adminUrl']?><?= $article['file']?>" height="360"/></a></div>
                            <div class="cplist_js22">
                                <p class="hh22"><span class="xbt22"><?= $article['title']?></span><span class="jt22"><img src="../images/xia.png" /></span><div class="clear"></div></p>
                                <p class="xx22"><?= $article['content']?><a href="#">【更多】....</a></p>
                            </div>
                        </div>
                    </li>
                    <?php endforeach;?>

                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <div style="height:56px;"><p></p></div>
        </div>
        <div class="biaozhi"><img src="../images/jiao2.png" /></div>
        <div class="fenye">
            <?= Pager::widget([
                'data'=>$cache['column_articles-'.$id],
                'page_size'=>$page_size
            ])?>
        </div>
    </div>
</div>

	
