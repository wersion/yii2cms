<!--内容区-->
<div id="content">
    <div id="cont">
        <?php include '../views/index/left.php'?>

        <div class="cont_right">
            <div class="cont_right_weizhi">当前位置：<span>首页</span> <?= $position?></div>
            <div class="hualiang">
                <div class="hualiang_img">
                    <img src="<?= Yii::$app->params['adminUrl']?><?= $menu['file']?>"/>
                </div>

                <div class="clear"></div>
                <div style="height:56px;"><p></p></div>
            </div>
            <div class="biaozhi"><img src="../images/jiao2.png" /></div>


        </div>
    </div>
</div>

