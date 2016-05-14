<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<h1>Hello ?></h1>
<p>Welcome to your Yii2 demonstration application.</p>


<div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'new-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'city') ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'new-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
</div>