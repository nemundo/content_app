<?php
namespace Nemundo\Content\App\Html\Data\ImgProperty;
use Nemundo\Model\Id\AbstractModelIdValue;
class ImgPropertyId extends AbstractModelIdValue {
/**
* @var ImgPropertyModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ImgPropertyModel();
}
}