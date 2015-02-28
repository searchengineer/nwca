<?php

use yii\helpers\Html;
?>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <section>
                    <h2 class="section-title no-margin-top"><?= $model->name; ?><div class="clearfix"></div></h2>


                    <div class="col-sm-2">
                        <?= Html::img(Yii::$app->params['baseUrl'] . '/images/' . $model->file, ['alt' => 'Wing Chun self defense classes', 'class' => 'img-thumbnail img-responsive aligncenter']); ?>
                    </div>
                    <div class="col-sm-10">

                        <?= $model->description; ?>
                    </div>

                </section>
            </div>
        </div>
    </div>
</div>
