<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ListView;

//use yii\widgets\Breadcrumbs;
$this->title = 'Latest News - Newcastle Wing Chun Academy';
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
        <?=
        ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_view',
            'layout' => "{items}\n{pager}"
        ]);
        ?>
    </div>
</div>