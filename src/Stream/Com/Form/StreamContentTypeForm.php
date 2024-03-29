<?php

namespace Nemundo\Content\App\Stream\Com\Form;

use Nemundo\Admin\Com\Form\AbstractAdminForm;
use Nemundo\Content\App\Stream\Data\StreamContentType\StreamContentType;
use Nemundo\Content\Com\ListBox\ContentTypeListBox;

class StreamContentTypeForm extends AbstractAdminForm
{

    /**
     * @var ContentTypeListBox
     */
    private $contentType;

    public function getContent()
    {

        $this->contentType=new ContentTypeListBox($this);

        return parent::getContent(); // TODO: Change the autogenerated stub
    }


    protected function onSubmit()
    {

        $data=new StreamContentType();
        $data->ignoreIfExists=true;
        $data->contentTypeId=$this->contentType->getValue();
        $data->save();

    }


}