<!--内容区-->
<div id="content">
    <div id="cont">
        <?php include '../views/index/left_l.php'?>
        <div class="cont_right">
            <div class="cont_right_weizhi">當前位置：<span>首頁</span> <?= $position?></div>
            <div class="new">
                <div class="newcont">
                    <img src="<?= Yii::$app->params['adminUrl'].$cache['menu_'.$id]['file']?>" style="margin:30px 0px;"/>
                </div>

            </div>
            <div class="clear"></div>
            <div class="biaozhi"><img src="../images/jiao2.png" /></div>

            <div class="fenye">&lt<a href="#">上一页</a><a href="#">下一页</a>&gt;</div>
        </div>
    </div>
</div>
