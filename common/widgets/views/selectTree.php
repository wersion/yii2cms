<?php
namespace common\widgets\views;

use yii;
?>
<div class="form-group>
    <label class="control-label"><?= $model->getAttributeLabel($name)?></label>
    <select name="<?= $model->formName()?>[<?= $name?>]">

    </select>
    <div class="help-block"></div>
</div>