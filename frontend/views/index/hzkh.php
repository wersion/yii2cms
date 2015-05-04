<!--内容区-->
<div id="content">
    <div id="cont">
        <?php include '../views/index/left_l.php'?>
        <div class="cont_right">
            <div class="cont_right_weizhi">當前位置：<span>首頁</span> <?= $position?></div>
            <div class="hezuo">
                <ul>
                    <?php foreach($cache['menu_'.$id.'_photos'] as $photo):?>
                    <li><img src="<?= Yii::$app->params['adminUrl'].$photo['url']?>" /></li>
                    <?php endforeach?>

                </ul>
                <div class="biaozhi"><img src="../images/jiao2.png" /></div>
            </div>

        </div>
    </div>
</div>
