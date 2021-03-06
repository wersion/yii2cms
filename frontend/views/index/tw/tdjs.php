<?php
use common\helps\menu;
$cl = new menu();
$session = Yii::$app->session;
switch($session['language'])
{
    case 'cn':
        $lang = 0;
        break;
    case 'en':
        $lang = 1;
        break;
    case 'tw':
        $lang = 2;
        break;
}
?>
<div id="content">
    <div id="cont">
        <?php include '../views/index/left_l.php'?>
        <div class="cont_right">
            <div class="cont_right_weizhi">當前位置：<span>首頁</span> <?= $position?></div>
            <div class="tuandui">

                <div class="wc960">
                    <div id="wrapBox1" class="wrapBox">
                        <ul id="count1" class="count">
                            <?php foreach($cache['menu_'.$id.'_articles'] as $article):?>

                            <li class="yy">

                                <div class="yy_bt"><?= $article['title']?></div>

                                <div class="yy_img"><img src="<?= Yii::$app->params['adminUrl'].$article['file']?>"/></div>

                                <div class="yy_js">

                                    <div class="js_xbt">个人履历</div>
                                    <?= $article['content']?>

                                </div>
                                <div class="clear"></div>
                            </li>
                            <?php endforeach?>


                        </ul>
                        <div class="clear"></div>
                    </div>

                    <a id="right1" class="prev icon btn" style="position:absolute; top:25px; right:50px;"></a>
                    <a id="left1" class="next icon btn" style="position:absolute; top:25px; right:100px;"></a>
                </div>

                <script type="text/javascript">
                    $(document).ready(function(){

                        $("#count1").dayuwscroll({
                            parent_ele:'#wrapBox1',
                            list_btn:'#tabT04',
                            pre_btn:'#left1',
                            next_btn:'#right1',
                            path: 'left',
                            auto:true,
                            time:3000,
                            num:1,
                            gd_num:1,
                            waite_time:1000
                        });

                    });
                </script>

                <div class="renyuan">
                    <?php foreach($cache['menu_'.$id.'_articles'] as $article):?>
                    <?= $article['title']?>
                    <?php endforeach?>

                </div>

            </div>

            <div class="biaozhi"><img src="../images/jiao2.png" /></div>

        </div>
    </div>
</div>
