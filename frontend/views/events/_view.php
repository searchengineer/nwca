<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;
?>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <article class="hentry" itemscope itemtype="http://schema.org/Article">
                    <header>
                        <h2 class="entry-title section-title no-margin-top no-margin-bottom" itemprop="headline name"><?= Html::a($model->title, array('view', 'id' => $model->id), array('title' => $model->title)); ?></h2>
                        <address class="author vcard">By <span itemprop="author" data-rel="author" class="url fn n">Sifu</span></address>
                        <span class="section-date">Published: <time class="published " itemprop="datePublished" datetime="<?= $model->published; ?>"><?= Yii::$app->formatter->asDatetime($model->published, "php:d-m-Y"); ?></time></span>
                        <span class="section-date hidden">Updated: <time class="updated " itemprop="dateModified" datetime="<?= $model->updated; ?>"><?= Yii::$app->formatter->asDatetime($model->updated, "php:d-m-Y"); ?></time></span>
                    </header>
                    <span class="entry-summary" itemprop="description"><?= StringHelper::truncateWords($model->description, 20, ' ...', false); ?></span>  
                </article>
            </div>
        </div>
        <p><?= Html::a('Read', array('view', 'id' => $model->id), array('title' => $model->title, 'class' => 'btn btn-default')); ?></p>
    </div>
</div>
