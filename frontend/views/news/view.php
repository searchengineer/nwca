<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ListView;

//use yii\widgets\Breadcrumbs;
$this->title = $model->title.' - Newcastle Wing Chun Academy';
//$this->params['breadcrumbs'][] = $this->title;
?>
<header class="pageheader">
    <div class="container">
        <h1 class="page-title">Latest News</h1>
        <?php
//    Breadcrumbs::widget([
//        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//    ])
        ?>
    </div>
</header>
<div class="container">
    <div class="site-news">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <article class="hentry" itemscope itemtype="http://schema.org/Article">
                            <header>
                                <h2 class="entry-title section-title no-margin-top no-margin-bottom" itemprop="headline name"><?= $model->title; ?></h2>
                                <address class="author vcard">By <span itemprop="author" data-rel="author" class="url fn n">Sifu</span></address>
                                <span class="section-date">Published: <time class="published" itemprop="datePublished" datetime="<?= $model->published; ?>"><?= Yii::$app->formatter->asDatetime($model->published, "php:d-m-Y"); ?></time></span>
                                <span class="section-date hidden">Updated: <time class="updated " itemprop="dateModified" datetime="<?= $model->updated; ?>"><?= Yii::$app->formatter->asDatetime($model->updated, "php:d-m-Y"); ?></time></span>
                            </header>
                            <span class="entry-summary" itemprop="description"><?= $model->description; ?></span>  
                        </article>
                    </div>
                </div>
                <p><?= Html::a('Back', array('index'), array('title' => 'Back to News', 'class' => 'btn btn-default',)); ?></p>
            </div>
        </div>
    </div>
</div>
