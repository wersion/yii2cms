<!--内容区-->
<div id="content">
    <div id="cont">
        <div class="cont_left">
            <div class="cont_left_bt">
                <span>网站地图</span><br />
                WEB&nbsp;MAP
            </div>

            <div class="cont_left_list">
                <ul>
                    <?php foreach($cache['column_21_children'] as $v):?>
                    <li><a href="/column/<?= $v['id']?>"><?= $v['cname']?></a></li>
                    <?php endforeach;?>

                </ul>
            </div>
            <img src="../images/left_di.png" />
        </div>
        <div class="cont_right">
            <div class="cont_right_weizhi">当前位置：<span>首页</span>&gt;<span>华粮联盟</span>&gt;<span>加入我们</span></div>
            <div class="ditu">
                <ul>
                    <?php foreach($cache['column_1_brother'] as $column):?>
                    <li>

                        <span><a href="/column/<?= $column['id']?>"><?= $column['cname']?></a></span>

                        <?php foreach($cache['column_'.$column['id'].'_children'] as $chiid):?>
                             <p><a href="/column/<?= $chiid['id']?>"><?= $chiid['cname']?></a></p>
                        <?php endforeach;?>

                    </li>
                    <?php endforeach;?>

                </ul>
                <div class="clear"></div>
            </div>

            <div style="height:140px;"><p></p></div>
            <div class="biaozhi"><img src="../images/jiao2.png" /></div>
        </div>

    </div>
</div>
</div>
