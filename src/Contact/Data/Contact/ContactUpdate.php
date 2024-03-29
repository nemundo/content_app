<?php
namespace Nemundo\Content\App\Contact\Data\Contact;
use Nemundo\Model\Data\AbstractModelUpdate;
class ContactUpdate extends AbstractModelUpdate {
/**
* @var ContactModel
*/
public $model;

/**
* @var string
*/
public $company;

/**
* @var string
*/
public $lastName;

/**
* @var string
*/
public $firstName;

/**
* @var string
*/
public $phone;

/**
* @var string
*/
public $email;

/**
* @var string
*/
public $street;

/**
* @var string
*/
public $postalCode;

/**
* @var string
*/
public $city;

public function __construct() {
parent::__construct();
$this->model = new ContactModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->company, $this->company);
$this->typeValueList->setModelValue($this->model->lastName, $this->lastName);
$this->typeValueList->setModelValue($this->model->firstName, $this->firstName);
$this->typeValueList->setModelValue($this->model->phone, $this->phone);
$this->typeValueList->setModelValue($this->model->email, $this->email);
$this->typeValueList->setModelValue($this->model->street, $this->street);
$this->typeValueList->setModelValue($this->model->postalCode, $this->postalCode);
$this->typeValueList->setModelValue($this->model->city, $this->city);
parent::update();
}
}