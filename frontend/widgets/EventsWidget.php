<?php
namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\Events;

class EventsWidget extends Widget {

    public $limit;
    public $events;

    public function init() {
        parent::init();
        $this->getEvents($this->limit);
    }

    public function getEvents($limit) {
        $this->events = Events::find()
                ->limit($limit)
                ->orderBy(['id' => SORT_DESC])
                ->asArray()
                ->all();
    }

    public function run() {
        return $this->render('events', [
                    'events' => $this->events,
        ]);
    }
}
