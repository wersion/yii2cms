<?php
use common\helps\column;
$cl = new column();
?>
<div class="cont_left">
    <div class="cont_left_bt">
        <span><?= $cl->lang($cache['column_'.$id.'_parent']['cname'])[$lang]?></span><br />
        Walk into us
    </div>

    <div class="cont_left_list">
        <ul>
            <?php foreach($cache['column_'.$id.'_brother'] as $child):?>
                <li <?php if($id==$child['id']):?> class="hover" <?php endif?> ><a href="/column/<?= $child['id']?>"><?= $cl->lang($child['cname'])[$lang] ?></a></li>
            <?php endforeach;?>
        </ul>
    </div>

</div>