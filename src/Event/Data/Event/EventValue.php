<?php
namespace Nemundo\Content\App\Event\Data\Event;
class EventValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var EventModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EventModel();
}
}