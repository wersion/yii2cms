<?php
namespace common\widgets\views;

use yii;
use common\lib\tree;

$tree = new tree();
$tree->init($menu);
$str  = "<option value='\$id' \$selected>\$spacer \$cname</option>;";
?>
<div class="form-group>
    <label class="control-label"><?= $model->getAttributeLabel($name)?><?= $model->$name?></label>
    <select name="<?= $model->formName()?>[<?= $name?>]">
        <?= $tree->get_tree(0,$str,$model->$name);?>
    </select>
    <div class="help-block"></div>
</div>