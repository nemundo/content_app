<?php
namespace Nemundo\Content\App\Bookmark\Data\Url;
class UrlDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var UrlModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new UrlModel();
}
}