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
<div class="cont_left">
    <div class="cont_left_bt">
        <span><?= $cl->lang($cache['menu_'.$id.'_parent']['cname'])[$lang]?></span>
    </div>

    <div class="cont_left_list">
        <ul>
            <?php foreach($cache['menu_'.$id.'_brother'] as $child):?>
                <li <?php if($id==$child['id']):?> class="hover" <?php endif?> ><a href="/menu/<?= $child['id']?>"><?= $cl->lang($child['cname'])[$lang] ?></a></li>
            <?php endforeach;?>
        </ul>
    </div>

</div>