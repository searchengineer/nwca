<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" itemscope itemtype="http://schema.org/WebPage">
<head>
<meta charset="<?= Yii::$app->charset ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?= Html::csrfMetaTags() ?>
<title><?= Html::encode($this->title) ?></title>
<?php $this->head() ?>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<meta name="headline" itemprop="headline" content="Newcastle Wing Chun Kung Fu Academy">
<meta name="description" itemprop="description" content="Wing Chun Kung Fu is one of the most practical, effective and easy to learn forms of self defense in the world today!">
<meta name="keywords" itemprop="keywords" content="Wing Chun, Kung Fu, Martial Arts, Self Defense, Newcastle">
</head>
<body>
<?php $this->beginBody() ?>
    <div class="wrap">
        <header role="banner" itemscope itemtype="http://schema.org/WPHeader">
           <meta itemprop="name" content="Newcastle Wing Chun Kung Fu Academy"> 
            <?php
            NavBar::begin([
                'brandLabel' => Html::img(Yii::$app->params['baseUrl'] . '/images/logo.png', ['alt' => 'Newcastle Wing Chun Kung Fu', 'title' => 'Newcastle Wing Chun Kung Fu Academy', 'class' => 'img-responsive']),
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-default',
                    'itemscope itemtype'=> 'http://schema.org/SiteNavigationElement',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index'], 'options'=>array('itemprop'=>'name'), 'linkOptions'=>array('itemprop'=>'url')],
                ['label' => 'About', 'url' => ['/site/about'], 'options'=>array('itemprop'=>'name'), 'linkOptions'=>array('itemprop'=>'url')],
                ['label' => 'Classes', 'url' => ['/classes/index'], 'options'=>array('itemprop'=>'name'), 'linkOptions'=>array('itemprop'=>'url')],
                ['label' => 'Instructors', 'url' => ['/instructors/index'], 'options'=>array('itemprop'=>'name'), 'linkOptions'=>array('itemprop'=>'url')],
                ['label' => 'Testimonials', 'url' => ['/testimonials/index'], 'options'=>array('itemprop'=>'name'), 'linkOptions'=>array('itemprop'=>'url')],
                //['label' => 'Gallery', 'url' => ['/gallery/index'], 'options'=>array('itemprop'=>'name'), 'linkOptions'=>array('itemprop'=>'url')],
                ['label' => 'Contact', 'url' => ['/site/contact'], 'options'=>array('itemprop'=>'name'), 'linkOptions'=>array('itemprop'=>'url')],
            ];
            if (Yii::$app->user->isGuest) {
                //$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                //$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
            ?>
            
    </header>
    <main role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/WebPageElement">
        <?= Alert::widget() ?>
        <?= $content ?>
    </main>
    </div>
    <footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
        <div class="container">
            <p class="pull-left">&copy; <span itemprop="copyrightHolder">Newcastle Wing Chun Kung Fu Academy</span> <span itemprop="copyrightYear"><?= date('Y') ?></span></p>
            <address>
                <p class="pull-right">
                    774A Hunter Street, Newcastle. <strong>Tel: 0403 471 565</strong>
                </p>
            </address>
        </div>
    </footer>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
