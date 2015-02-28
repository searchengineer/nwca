<?php

use \kartik\rating\StarRating;
?>
<div class="testimonialsbox">
    <ul>
    <?php foreach ($testimonials as $testimonial): ?>
            <li>
                <div class="testi-item">
                    <blockquote class="testi-item_blockquote">
                        <q><?php echo $testimonial['testimonial']; ?></q>
                        <div class="clear"></div>
                        <footer><cite class="testi-meta"><span class="user"><?php echo $testimonial['name']; ?></span></cite></footer>
<!--                        <span class="stars"><?=
                            StarRating::widget([
                                'name' => 'rating_2',
                                'value' => $testimonial['rating'],
                                'pluginOptions' => [
                                    'readonly' => true,
                                    'showClear' => false,
                                    'showCaption' => false,
                                    'size' => 'xs',
                                ],
                            ]);
                            ?>
                        </span>-->
                    </blockquote>
                </div>
            </li>
    <?php endforeach; ?>
    </ul>
</div>
