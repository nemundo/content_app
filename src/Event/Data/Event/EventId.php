<?php
namespace Nemundo\Content\App\Event\Data\Event;
use Nemundo\Model\Id\AbstractModelIdValue;
class EventId extends AbstractModelIdValue {
/**
* @var EventModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EventModel();
}
}