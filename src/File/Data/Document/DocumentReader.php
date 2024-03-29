<?php
namespace Nemundo\Content\App\File\Data\Document;
class DocumentReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var DocumentModel
*/
public $model;

public function __construct() {
$this->model = new DocumentModel();
parent::__construct();
}
/**
* @return DocumentRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = $this->getModelRow($dataRow);
$list[] = $row;
}
return $list;
}
/**
* @return DocumentRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return DocumentRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new DocumentRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}