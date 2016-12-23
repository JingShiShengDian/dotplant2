<?php die("frontend-edit"); ?>
<?= $form->field($model, $attribute_name)->widget(\devgroup\jsoneditor\Jsoneditor::className()) ?>