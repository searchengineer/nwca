<?php
namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\News;

class NewsWidget extends Widget {

    public $limit;
    public $news;

    public function init() {
        parent::init();
        $this->getNews($this->limit);
    }

    public function getNews($limit) {
        $this->news = News::find()
                ->limit($limit)
                ->orderBy(['id' => SORT_DESC])
                ->asArray()
                ->all();
    }

    public function run() {
        return $this->render('news', [
                    'news' => $this->news,
        ]);
    }
}
