<?php

namespace Nemundo\Content\App\Contact\Content\Contact;

use Nemundo\Content\App\Contact\Data\Contact\ContactReader;
use Nemundo\Content\App\Contact\Data\Contact\ContactRow;
use Nemundo\Content\Type\AbstractContentItem;

class ContactItem extends AbstractContentItem
{

    protected function loadItem()
    {
        $this->contentType=new ContactType();
        // TODO: Implement loadItem() method.
    }


    protected function onDataRow()
    {
        $this->dataRow = (new ContactReader())->getRowById($this->dataId);
    }

    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|ContactRow
     */
    public function getDataRow()
    {
        return parent::getDataRow(); // TODO: Change the autogenerated stub
    }


    public function getSubject()
    {

        $contactRow = $this->getDataRow();

        $subject = '';
        if ($contactRow->company !== '') {
            $subject = $contactRow->company . ', ';
        }

        $subject .= $contactRow->lastName . ' ' . $contactRow->firstName;

        return $subject;

    }

    protected function getCompany()
    {
        // TODO: Implement getCompany() method.
    }

    protected function getLastName()
    {
        return $this->getDataRow()->lastName;
    }

    protected function getFirstName()
    {
        return $this->getDataRow()->lastName;
    }

    protected function getPhone()
    {
        return $this->getDataRow()->phone;
    }

    protected function getEmail()
    {
        return $this->getDataRow()->email;
    }

}