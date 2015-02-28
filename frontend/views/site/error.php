<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

/* @var $this yii\web\View */
$this->title = 'About';
$this->title = $name;
?>
<header class="pageheader">
    <div class="container">
        <h1 class="page-title"><?= Html::encode($this->title) ?></h1>
    </div>
</header>
<div class="container">
    <div class="site-error">
        <div class="alert alert-danger">
            <?= nl2br(Html::encode($message)) ?>
        </div>
        <p>
            The above error occurred while the Web server was processing your request.
        </p>
        <p>
            Please contact us if you think this is a server error. Thank you.
        </p>

    </div>
</div>
