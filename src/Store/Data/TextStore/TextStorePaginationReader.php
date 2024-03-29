<?php
namespace Nemundo\Content\App\Store\Data\TextStore;
class TextStorePaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var TextStoreModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TextStoreModel();
}
/**
* @return TextStoreRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new TextStoreRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}