<?php
namespace Nemundo\Content\App\Store\Data\LargeTextStore;
class LargeTextStorePaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var LargeTextStoreModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LargeTextStoreModel();
}
/**
* @return LargeTextStoreRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new LargeTextStoreRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}