<!--内容区-->
<div id="content">
    <div id="cont">
        <?php include '../views/index/left_l.php'?>
        <div class="cont_right">
            <div class="cont_right_weizhi">Posion：<span>Home</span> <?= $position?></div>
            <div class="zoujin">
                <div class="zoujin_bt"><?= $cl->lang($cache['menu_'.$id]['cname'])[$lang]?></div>
                <div class="zoujin_nr">

                    <div class="linian_bt">
                        <ul>
                            <?php foreach($cache['menu_'.$id.'_articles'] as $key=>$article):?>
                                <li <?php if($key==0):?>class="hover" <?php endif ?> ><?= $article['title']?></li>
                            <?php endforeach?>
                        </ul>
                        <div class="clear"></div>
                    </div>

                    <div class="linian_nr">
                        <?php foreach($cache['menu_'.$id.'_articles'] as $key=>$article):?>
                        <div class="hide" <?php if($key==0):?> style="display:block" <?php endif;?> >
                            <?= $article['content']?>
                        </div>
                        <?php endforeach; ?>

                    </div>

                </div>


            </div>
            <div class="biaozhi"><img src="../images/jiao2.png" /></div>


        </div>
    </div>
</div>
