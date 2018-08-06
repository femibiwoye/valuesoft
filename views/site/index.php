<?php

/* @var $this yii\web\View */

use yii\widgets\ActiveForm;

$this->title = 'Welcome to ValueSoft';
?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">New Profile Verification</div>
                            <div class="card-body">

                                <?php $form = ActiveForm::begin(['id' => 'search-form']); ?>
                                <?= $form->field($model, 'phone')->textInput(['autofocus' => true]) ?>

                                <?= $form->field($model, 'firstname')->textInput() ?>
                                <?= $form->field($model, 'lastname')->textInput() ?>

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Search</button>
                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>