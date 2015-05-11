<!--内容区-->
<div id="content">
    <div id="cont">
        <?php include '../views/index/left_l.php'?>
        <div class="cont_right">
            <div class="cont_right_weizhi">当前位置：<span>首页</span> <?= $position?></div>
            <div class="jiaru">

                <?= $cache['menu_'.$id]['content']?>
                <div style="height:140px;"><p></p></div>
                <div class="biaozhi"><img src="../images/jiao2.png" /></div>
            </div>

        </div>
    </div>
</div>
