<?phpnamespace Nemundo\Content\App\Contact\Parameter;use Nemundo\Content\App\Contact\Content\Contact\ContactItem;use Nemundo\Content\App\Contact\Content\Contact\ContactType;use Nemundo\Web\Parameter\AbstractUrlParameter;class ContactParameter extends AbstractUrlParameter{    protected function loadParameter()    {        $this->parameterName = 'contact';    }    public function getContentItem() {        return new ContactItem($this->getValue());    }    /*public function getContentType() {        $contactContentType=new ContactType($this->getValue());        return $contactContentType;    }*/}