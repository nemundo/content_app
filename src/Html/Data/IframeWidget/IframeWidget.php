<?php
namespace Nemundo\Content\App\Html\Data\IframeWidget;
class IframeWidget extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var IframeWidgetModel
*/
protected $model;

/**
* @var string
*/
public $src;

public function __construct() {
parent::__construct();
$this->model = new IframeWidgetModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->src, $this->src);
$id = parent::save();
return $id;
}
}