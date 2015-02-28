<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;
?>
<?php if (!empty($news)){ ?>
<ul class="recent-posts events unstyled">
    <?php foreach ($news as $item): ?>
        <li>
            <h3><?= Html::a($item['title'], array('news/view', 'id' => $item['id'])); ?></h3>
            <time><strong><?php echo $item['published']; ?></strong></time>
            <?= StringHelper::truncateWords($item['description'], 20, ' ...', false); ?>
        </li>
    <?php endforeach; ?>
</ul>
<?php } else{ echo "<p>No results found</p>";} ?>
