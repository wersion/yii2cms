<!--内容区-->
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<div id="content">
    <div id="cont">
        <?php include '../views/index/left_l.php'?>
        <div class="cont_right">
            <div class="cont_right_weizhi">Position：<span>Home</span> <?= $position?></div>
            <div class="cont_right_nr">
                <p class="lianxi"><img src="../images/contact2.jpg" />联系我们</p>
                <?= $cache['menu_'.$id]['content']?>

                <div class="biaozhi"><img src="../images/jiao.png" /></div>
            </div>

        </div>
    </div>
</div>
