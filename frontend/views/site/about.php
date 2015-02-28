<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
//use yii\widgets\Breadcrumbs;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<header class="pageheader">
    <div class="container">
        <h1 class="page-title">About Newcastle Wing Chun Kung Fu Academy</h1>
        <?php
//    Breadcrumbs::widget([
//        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//    ])
        ?>
    </div>
</header>
<div class="container">
    <div class="site-about">
        <div class="row">
            <div class="col-lg-8">
                <article>
                    <h2>Newcastle Wing Chun</h2>
                    <p>Located on Hunter Street, The Newcastle Wing Chun Academy aims to promote self defense, relaxation, confidence and fitness via our teachings of Wing Chun.</p>
                    <p>Newcastle Wing Chun Academy was established in 1985 by the late Sifu Toni Bardakos.</p>
                    <p>We are a member of the Australian Wing Chun Federation and also CST Alumni,which is an organisation run by Tai Sigung Tsui Shun Tin's Senior Students with the aim of passing down the teachings unaltered as from their master.</p>
                    
                    <h2>Principals Of Wing Chun</h2>
                    <p>Wing Chun Kung Fu is a fast and effective self defense which is not reliant on brute strength. Wing Chun is good for relaxation, posture co-ordination, confidence and fitness. Everyone is capable of doing Wing Chun regardless of their fitness, body shape or size.</p>
                    
                    <h2>Origin Of Wing Chun</h2>
                    <p>Wing Chun, founded in the early 1700’s in China, is one of the youngest styles of Kung Fu.</p>
                    <p>It was founded by a Buddhist nun named Ng Mei, who was recognized as one of the five top fighters of that period. Ng Mei, of the renowned Shaolin Temple, was highly proficient in the existing styles of Kung Fu, yet she felt it was possibly to devise a more effective fighting method that did not rely so much on brute strength or take too long to learn.</p>
                    <p>According to legend, one day Ng Mei witnessed a fight between a stork and a rodent. She was impressed by the way the stork used its wings to deflect the attacks of the large rodent, and counter-attacked with kicking at the same time. Ng Mei was inspired to formulate and establish a unique, new martial art.</p>
                    <p>This art was later named after her student, a young woman named Yim Wing Chun. Yim Wing Chun was to be forced into an arranged marriage against her wishes, so she decided to try and train herself up as a fighter to get rid of her despised fiancé. She trained diligently under Ng Mei, and when her would-be husband came to take her away, this small woman defeated him. Yim Wing Chun then settled down with the partner of her choice - a Hung Kuen exponent Leung Boc To - and taught him her style.</p>
                    <p>This is one of the most popular accounts of the Wing Chun history, although the details vary from one version to another. Indeed, we are lucky that this style was passed on as many styles have died out. Most Chinese martial arts have been taught privately to a small number of disciples. Since it was developed, Wing Chun has been handed down to only a select few people.</p>
                    <p>Until Yip Man came to Hong Kong from China in 1948-49, Wing Chun was never taught publicly. Grand Master Yip Man was responsible for introducing Wing Chun to the general public. Coming to Hong Kong in 1948-49 to escape the new communist regime, he began to teach Wing Chun as his means of living. Over the years he continued to teach and had many students until his death in 1972, it is from a number of Yip Man’s students that Wing Chun has been passed down to us today. Yip Man was widely regarded as one of the truly great and legendary figures in martial arts. He further perfected the Wing Chun system and despite his small frame was an invincible fighter.</p>
                </article>
            </div>
            <div class="col-lg-4"> 
                <div class='thumbnail with-caption img-responsive'>
                    <?= Html::img(Yii::$app->params['baseUrl'] . '/images/yip-man.jpg', ['alt' => 'Yip Man', 'class' => 'img-thumbnail img-responsive aligncenter']); ?>
                    <p><b>Yip Man</b></p>    
                </div>
                <blockquote><q>We all have inner demons to fight. We call these demons ‘fear’, and ‘hatred’, and ‘anger’. If you don’t conquer them, then a life of a hundred years… is a tragedy. If you do, a life of a single day can be a triumph.</q><footer>Yip Man</footer></blockquote>
            </div>
        </div>
    </div>
</div>
