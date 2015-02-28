<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<header class="pageheader">
    <div class="container">
        <h1 class="page-title"><?= Html::encode($this->title) ?></h1>
        <?php
//    Breadcrumbs::widget([
//        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//    ])
        ?>
    </div>
</header>
<div class="container">
    <div class="site-contact">
        <p>
            If you have inquiries, please fill out the contact form or call on the number below. Thank you.</p>
        <p class="phone">Phone: 0403 471 565
        </p>

        <div class="row">
            <div class="col-lg-6">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'subject') ?>
                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                <?=
                $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ])
                ?>
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-lg-6">
                <iframe class="img-responsive map aligncenter" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26795.901053112233!2d151.749539!3d-32.91171250000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b73144530601a05%3A0x69eebcb1bb286d36!2sNewcastle+Wing+Chun+Kung+Fu!5e0!3m2!1sen!2sau!4v1405869886064" width="500" height="500" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
    </div>
</div>
