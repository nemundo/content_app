<?php
namespace Nemundo\Content\App\Event\Data\Event;
class EventDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var EventModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EventModel();
}
}