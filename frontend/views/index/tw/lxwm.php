<!--内容区2-->

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=BYC4Fh2InXOeZXHNNQ4FdiEz"></script>

<div id="content">
    <div id="cont">
        <?php include '../views/index/left_l.php'?>
        <div class="cont_right">
            <div class="cont_right_weizhi">當前位置：<span>首頁</span> <?= $position?></div>
            <div class="cont_right_nr" id="allmap">
                <p class="lianxi"><img src="../images/contact2.jpg" />联系我们</p>
                <div class="juti">
                    <p class="style">中国华粮集团有限公司(上海）</p>
                    <p>地址：上海市闵行区虹中支路668号</p>
                    <p>邮编：200000</p>
                    <p>Email: cocafo@126.com</p>
                    <p>联系电话：400-816-5366</p>
                </div>
                <div class="map" id="dituContent">112</div>
                <div class="biaozhi"><img src="../images/jiao.png" /></div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="/js/map.js"></script>