<?php
namespace Nemundo\Content\App\Contact\Data\Contact;
class ContactModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $company;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $lastName;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $firstName;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $phone;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $email;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $street;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $postalCode;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $city;

protected function loadModel() {
$this->tableName = "contact_contact";
$this->aliasTableName = "contact_contact";
$this->label = "Contact";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "contact_contact";
$this->id->externalTableName = "contact_contact";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "contact_contact_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->company = new \Nemundo\Model\Type\Text\TextType($this);
$this->company->tableName = "contact_contact";
$this->company->externalTableName = "contact_contact";
$this->company->fieldName = "company";
$this->company->aliasFieldName = "contact_contact_company";
$this->company->label = "Company";
$this->company->allowNullValue = true;
$this->company->length = 255;

$this->lastName = new \Nemundo\Model\Type\Text\TextType($this);
$this->lastName->tableName = "contact_contact";
$this->lastName->externalTableName = "contact_contact";
$this->lastName->fieldName = "last_name";
$this->lastName->aliasFieldName = "contact_contact_last_name";
$this->lastName->label = "Last Name";
$this->lastName->allowNullValue = true;
$this->lastName->length = 255;

$this->firstName = new \Nemundo\Model\Type\Text\TextType($this);
$this->firstName->tableName = "contact_contact";
$this->firstName->externalTableName = "contact_contact";
$this->firstName->fieldName = "first_name";
$this->firstName->aliasFieldName = "contact_contact_first_name";
$this->firstName->label = "First Name";
$this->firstName->allowNullValue = true;
$this->firstName->length = 255;

$this->phone = new \Nemundo\Model\Type\Text\TextType($this);
$this->phone->tableName = "contact_contact";
$this->phone->externalTableName = "contact_contact";
$this->phone->fieldName = "phone";
$this->phone->aliasFieldName = "contact_contact_phone";
$this->phone->label = "Phone";
$this->phone->allowNullValue = true;
$this->phone->length = 255;

$this->email = new \Nemundo\Model\Type\Text\TextType($this);
$this->email->tableName = "contact_contact";
$this->email->externalTableName = "contact_contact";
$this->email->fieldName = "email";
$this->email->aliasFieldName = "contact_contact_email";
$this->email->label = "eMail";
$this->email->allowNullValue = true;
$this->email->length = 255;

$this->street = new \Nemundo\Model\Type\Text\TextType($this);
$this->street->tableName = "contact_contact";
$this->street->externalTableName = "contact_contact";
$this->street->fieldName = "street";
$this->street->aliasFieldName = "contact_contact_street";
$this->street->label = "Street";
$this->street->allowNullValue = false;
$this->street->length = 255;

$this->postalCode = new \Nemundo\Model\Type\Text\TextType($this);
$this->postalCode->tableName = "contact_contact";
$this->postalCode->externalTableName = "contact_contact";
$this->postalCode->fieldName = "postal_code";
$this->postalCode->aliasFieldName = "contact_contact_postal_code";
$this->postalCode->label = "Postal Code";
$this->postalCode->allowNullValue = false;
$this->postalCode->length = 10;

$this->city = new \Nemundo\Model\Type\Text\TextType($this);
$this->city->tableName = "contact_contact";
$this->city->externalTableName = "contact_contact";
$this->city->fieldName = "city";
$this->city->aliasFieldName = "contact_contact_city";
$this->city->label = "City";
$this->city->allowNullValue = false;
$this->city->length = 255;

}
}