<div id="content">
    <div id="cont">
        <div class="cont_left">
            <div class="cont_left_bt">
                <span>耕织堂</span><br />
                Plow&nbsp;woven
            </div>

            <div class="cont_left_list">
                <ul>
                    <?php foreach($cache['column_'.$id.'_brother'] as $child):?>
                        <li <?php if($id==$child['id']):?> class="hover" <?php endif?> ><a href="/node/<?= $child['id']?>"><?= $child['cname']?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
            <img src="../images/left_di.png" />
        </div>
        <div class="cont_right">
            <div class="cont_right_weizhi">当前位置：<span>首页</span>&gt;<span>耕织堂</span>&gt;<span>国家政策</span></div>
            <div class="zoujin">
                <div class="zoujin_bt"><?= $cache['column_'.$id]['cname']?></div>
                <div class="zoujin_nr">

                    <div class="new_iconimg"><img src="../images/newicon.jpg"  /></div>

                    <div class="new_list">
                        <ul>
                            <li>
                                <div class="styleone">华粮动态<br />OUR NEW</div>
                                <div class="styletwo"><a href="#">4.机关事业单位养老保险改革决定发布</a></div>
                                <div class="stylethree">21015-1-15</div>
                            </li>
                            <li>
                                <div class="styleone">华粮动态<br />OUR NEW</div>
                                <div class="styletwo"><a href="#">4.机关事业单位养老保险改革决定发布</a></div>
                                <div class="stylethree">21015-1-15</div>
                            </li>
                            <li>
                                <div class="styleone">华粮动态<br />OUR NEW</div>
                                <div class="styletwo"><a href="#">4.机关事业单位养老保险改革决定发布</a></div>
                                <div class="stylethree">21015-1-15</div>
                            </li>
                            <li>
                                <div class="styleone">华粮动态<br />OUR NEW</div>
                                <div class="styletwo"><a href="#">4.机关事业单位养老保险改革决定发布</a></div>
                                <div class="stylethree">21015-1-15</div>
                            </li>
                            <li>
                                <div class="styleone">华粮动态<br />OUR NEW</div>
                                <div class="styletwo"><a href="#">4.机关事业单位养老保险改革决定发布</a></div>
                                <div class="stylethree">21015-1-15</div>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
            <div class="clear"></div>
            <div class="biaozhi"><img src="../images/jiao2.png" /></div>

            <div class="fenye">&lt<a href="#">上一页</a><a href="#">下一页</a>&gt;</div>
        </div>
    </div>
</div>
