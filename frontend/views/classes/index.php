<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ListView;

//use yii\widgets\Breadcrumbs;
$this->title = 'Self Defense Classes - Newcastle Wing Chun Kung Fu Academy';
//$this->params['breadcrumbs'][] = $this->title;
?>
<header class="pageheader">
    <div class="container">
        <h1 class="page-title">Classes</h1>
        <?php
//    Breadcrumbs::widget([
//        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//    ])
        ?>
    </div>
</header>
<div class="container">
    <div class="site-classes">
        <div class="page-intro">
            <p>We welcome new students of all levels of experience and ability. Whether you're just starting out or have trained in martial arts previously, come on in and join us for a free introductory training session.</p>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <?=
                ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemView' => '_view',
                    'layout' => "{items}\n{pager}"
                ]);
                ?>
            </div>
            <div class="col-lg-4"> 
                <div>
                    <?= Html::img(Yii::$app->params['baseUrl'] . '/images/wingchun-self-defense-classes-1.jpg', ['alt' => 'Wing Chun self defense classes', 'class' => 'img-thumbnail img-responsive aligncenter']); ?>   
                </div>           
                <div>
                    <?= Html::img(Yii::$app->params['baseUrl'] . '/images/wingchun-self-defense-classes-2.jpg', ['alt' => 'Wing Chun self defense classes', 'class' => 'img-thumbnail img-responsive aligncenter']); ?>   
                </div>
            </div>
        </div>
    </div>
</div>