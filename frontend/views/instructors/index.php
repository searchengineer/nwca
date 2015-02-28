<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ListView;

//use yii\widgets\Breadcrumbs;
$this->title = 'Instructors - Newcastle Wing Chun Academy';
//$this->params['breadcrumbs'][] = $this->title;
?>
<header class="pageheader">
    <div class="container">
        <h1 class="page-title">Instructors</h1>
        <?php
//    Breadcrumbs::widget([
//        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//    ])
        ?>
    </div>
</header>
<div class="container">
    <div class="site-instructors">
        <div class="page-intro">
        <p>Our friendly and dedicated instructors are passionate about Wing Chun. Over many years our talented instructors have invested hundreds, even thousands of hours into practicing and developing their Wing Chun skills.</p>
        <p>Our Senior instructors continue to master their art with annual visits to Hong Kong to learn from the Wing Chun Grand Masters.</p>
        </div>
        <?=
        ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_view',
            'layout' => "{items}\n{pager}"
        ]);
        ?>
    </div>
</div>
