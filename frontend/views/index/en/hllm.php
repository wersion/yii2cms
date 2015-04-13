<script>
    window.location.href = 'http://yiitest.xiuyun99.com/column/29'
</script>
<!--内容区-->
<div id="content">
    <div id="cont">
        <div class="cont_left">
            <div class="cont_left_bt">
                <span>华粮联盟</span><br />
                Walk into us
            </div>

            <div class="cont_left_list">
                <ul>
                    <?php foreach($cache['column_'.$id.'_children'] as $child):?>
                        <li <?php if(Yii::$app->request->get('id')==$child['id']):?> class="hover" <?php endif?> ><a href="/column/<?= $child['id']?>"><?= $child['cname']?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
            
        </div>
        <div class="cont_right">
            <div class="cont_right_weizhi">Posion：<span>Home</span> <?= $position?></div>
            <div class="cont_right_nr">
                <?= $cache['column-'.$id]['content']?>

                <div class="biaozhi"><img src="../images/jiao.png" /></div>
            </div>

        </div>
    </div>
</div>
