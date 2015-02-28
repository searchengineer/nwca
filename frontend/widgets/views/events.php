<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;
?>
<?php if (!empty($events)){ ?>
<ul class="recent-posts events unstyled">
    <?php foreach ($events as $event): ?>
        <li>
            <h3><?= Html::a($event['title'], array('events/view', 'id' => $event['id'])); ?></h3>
            <time><strong><?php echo $event['published']; ?></strong></time>
            <?= StringHelper::truncateWords($event['description'], 20, ' ...', false); ?>
        </li>
        
    <?php endforeach; ?>
</ul>
<?php } else{ echo "<p>No results found</p>";} ?>
