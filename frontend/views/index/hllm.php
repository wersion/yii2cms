<!--内容区-->
<div id="content">
    <div id="cont">
        <?php include '../views/index/left.php'?>

        <div class="cont_right">
            <div class="cont_right_weizhi">当前位置：<span>首页</span> <?= $position?></div>
            <div class="cont_right_nr">
                <?= $cache['menu-'.$id]['content']?>

                <div class="biaozhi"><img src="../images/jiao.png" /></div>
            </div>


        </div>
    </div>
</div>
