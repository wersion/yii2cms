<!--内容区-->
<div id="content">
    <div id="cont">
        <div class="cont_left">
            <div class="cont_left_bt">
                <span><?= $cl->lang($cache['menu_'.$id.'_parent']['cname'])[$lang]?></span>
            </div>

            <div class="cont_left_list">
                <ul>
                    <?php foreach($cache['menu_'.$id.'_brother'] as $child):?>
                        <li <?php if($id==$child['id']):?> class="hover" <?php endif?> ><a href="/menu/<?= $child['id']?>"><?= $cl->lang($child['cname'])[$lang]?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
           
        </div>
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
