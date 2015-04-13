<!--内容区-->
<div id="content">
    <div id="cont">
        <div class="cont_left">
            <div class="cont_left_bt">
                <span><?= $cl->lang($cache['column_'.$id.'_parent']['cname'])[$lang]?></span><br />
                Walk into us
            </div>

            <div class="cont_left_list">
                <ul>
                    <?php foreach($cache['column_'.$id.'_brother'] as $child):?>
                        <li <?php if($id==$child['id']):?> class="hover" <?php endif?> ><a href="/column/<?= $child['id']?>"><?= $cl->lang($child['cname'])[$lang]?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
           
        </div>
        <div class="cont_right">
            <div class="cont_right_weizhi">当前位置：<span>首页</span>&gt;<span>华粮联盟</span>&gt;<span>合作客户</span></div>
            <div class="hezuo">
                <ul>
                    <?php foreach($cache['column_'.$id.'_photos'] as $photo):?>
                    <li><img src="<?= Yii::$app->params['adminUrl'].$photo['url']?>" /></li>
                    <?php endforeach?>

                </ul>
                <div class="biaozhi"><img src="../images/jiao2.png" /></div>
            </div>

        </div>
    </div>
</div>
