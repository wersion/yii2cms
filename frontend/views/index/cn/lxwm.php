<!--内容区-->
<div id="content">
    <div id="cont">
        <?php include '../views/index/left_l.php'?>
        <div class="cont_right">
            <div class="cont_right_weizhi">当前位置：<span>首页</span><?= $position?></div>
            <div class="cont_right_nr">
                <p class="lianxi"><img src="../images/contact2.jpg" />联系我们</p>
              	<div class="juti">
                    <p class="style">中国华粮集团有限公司(上海）</p>
                    <p>地址：上海市黄浦区356</p>
                    <p>邮编：200000</p>
                    <p>Email: 8892@163.com</p>
                    <p>联系电话：40-600-8888</p>
                </div>
                <div class="map" id="dituContent"></div>
                <?= $cache['menu_'.$id]['content']?>
                <div class="biaozhi"><img src="../images/jiao.png" /></div>
            </div>

        </div>
    </div>
</div>
