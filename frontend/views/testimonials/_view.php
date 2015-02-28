<?php

use \kartik\rating\StarRating;
?>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <section>
                    <div class="testi-item">
                        <blockquote class="testi-item_blockquote">
                            <q><?= $model->testimonial; ?></q>
                            <div class="clear"></div>
                            <footer><cite class="testi-meta"><span class="user"><?= $model->name; ?></span></cite></footer>
                            <span class="stars"><?=
                                StarRating::widget([
                                    'name' => 'rating_2',
                                    'value' => $model->rating,
                                    'pluginOptions' => [
                                        'readonly' => true,
                                        'showClear' => false,
                                        'showCaption' => false,
                                        'size' => 'xs',
                                    ],
                                ]);
                                ?>
                            </span>
                        </blockquote>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>


