<?php

use yii\helpers\Html;
//use yii\web\Controller;
use frontend\widgets\TestimonialsWidget;
use frontend\widgets\NewsWidget;
use frontend\widgets\EventsWidget;

/* @var $this yii\web\View */
$this->title = 'Newcastle Wing Chun Academy - Self Defense, Martial Arts & Fitness';
?>
<div class="jumbotron">
    <p><?= Html::img(Yii::$app->params['baseUrl'] . '/images/sifu-greg-newcastle-wing-chun-lg.jpg', ['alt' => 'Newcastle Wing Chun Kung Fu', 'class' => 'img-responsive aligncenter']); ?></p>
</div>
<div class="container">
    <div class="site-index">

        <div class="body-content">
            <div class="row">
                <div class="col-lg-12 aligncenter">
                    <h1 class="site-title" itemprop="headline">Newcastle Wing Chun Kung Fu Academy</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <section>
                        <div class="featurebox shadow">
                            <p>
                                <?= Html::img(Yii::$app->params['baseUrl'] . '/images/ipman-bruce-lee.jpg', ['alt' => 'About Wing Chun Kung Fu', 'class' => 'thumbnail img-responsive aligncenter']); ?> 

                            </p>
                            <div class="featurebox-body">
                                <h2 class="featurebox-heading">About</h2>
                                <div class="text">
                                    <p>Wing Chun Kung Fu is a fast and effective <strong>self defence</strong> which is not reliant on brute strength.
                                        Wing Chun is good for relaxation, posture co-ordination, confidence and fitness.
                                        Everyone is capable of doing Wing Chun regardless of their fitness, body shape or size.
                                    </p>
                                </div>
                                <div class="featurebox-button">
                                    <p><?= Html::a('More', array('/about'), array('title' => 'About Newcastle Wing Chun Kung Fu', 'class' => 'btn btn-default')); ?></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <section>
                        <div class="featurebox shadow">
                            <p>
                                <?= Html::img(Yii::$app->params['baseUrl'] . '/images/instructors.jpg', ['alt' => 'Wing Chun Kung Fu Instructors', 'class' => 'thumbnail img-responsive aligncenter']); ?> 

                            </p>
                            <div class="featurebox-body">
                                <h2 class="featurebox-heading">Instructors</h2>
                                <div class="text">
                                    <p>Our friendly and dedicated instructors are passionate about Wing Chun.
                                        Over many years our talented instructors have invested hundreds, even thousands of hours into practicing and developing their Wing Chun skills.</p>
                                </div>
                                <div class="featurebox-button">
                                    <p><?= Html::a('More', array('/instructors'), array('title' => 'Newcastle Wing Chun Kung Fu Instructors', 'class' => 'btn btn-default')); ?></p>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <section>
                        <div class="featurebox shadow">
                            <p>
                                <?= Html::img(Yii::$app->params['baseUrl'] . '/images/classes.jpg', ['alt' => 'Wing Chun Kung Fu Classes', 'class' => 'thumbnail img-responsive aligncenter']); ?> 

                            </p>
                            <div class="featurebox-body">
                                <h2 class="featurebox-heading">Classes</h2>
                                <div class="text">
                                    <p>We welcome new students of all levels of experience and ability.
                                        Whether you're just starting out or have trained in martial arts previously, come on in and join us for a free training session.
                                        We also have kids classes.
                                    </p>
                                </div>
                                <div class="featurebox-button">
                                    <p><?= Html::a('More', array('/classes'), array('title' => 'Newcastle Wing Chun Self Defense classes', 'class' => 'btn btn-default')); ?></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <span class="cta aligncenter"><em><q>Wing Chun Kung Fu is one of the most practical, effective and easy to learn forms of self defense in the world today</q></em></span>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <section>
                            <div class="featurebox shadow">
                                <div class="featurebox-body">
                                    <h2 class="featurebox-heading">Latest News</h2>
                                    <div class="text">
                                    <?=
                                    NewsWidget::widget([
                                        'limit' => 3
                                    ])
                                    ?>
                                    </div>
                                    <div class="featurebox-button">
                                    <p><?= Html::a('More', array('/news'), array('title' => 'Newcastle Wing Chun news', 'class' => 'btn btn-default')); ?></p>
                                </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <section>
                            <div class="featurebox shadow">
                                <div class="featurebox-body">
                                    <h2 class="featurebox-heading">Upcoming Events</h2>
                                    <div class="text">
                                    <?=
                                    EventsWidget::widget([
                                        'limit' => 3
                                    ])
                                    ?>
                                    </div>
                                    <div class="featurebox-button">
                                    <p><?= Html::a('More', array('/events'), array('title' => 'Newcastle Wing Chun Events', 'class' => 'btn btn-default')); ?></p>
                                </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <section>
                            <div class="featurebox shadow">
                                <div class="featurebox-body">
                                    <h2 class="featurebox-heading">Testimonials</h2>
                                    <div class="text">
                                    <?=
                                    TestimonialsWidget::widget([
                                        'limit' => 3
                                    ])
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="row">
                    <div class="col-lg-12">
                        
                        <span class="cta aligncenter"><em><q>Calm and relax your mind. Forget about yourself and follow your opponents movement</q></em>— Yip Man</span>
                    </div>
                </div>
                </div>
        </div>
    </div>
</div>
