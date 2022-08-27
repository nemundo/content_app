<?phpnamespace Nemundo\Content\App\Contact\Content\Contact;use Nemundo\Content\App\Contact\Data\Contact\Contact;use Nemundo\Content\App\Contact\Data\Contact\ContactReader;use Nemundo\Content\App\Contact\Data\Contact\ContactRow;use Nemundo\Content\App\Contact\Data\Contact\ContactUpdate;use Nemundo\Content\App\Contact\Type\ContactIndexTrait;use Nemundo\Content\Type\AbstractContentType;class ContactType extends AbstractContentType{    //use ContactIndexTrait;   /* public $company;    public $firstName;    public $lastName;    public $phone;    public $email;*/    protected function loadContentType()    {        $this->typeLabel = 'Contact';        $this->typeId = 'e0cba854-3714-4fa8-b16b-f0eb7aa5d163';        $this->formClassList[] = ContactForm::class;        $this->viewClassList[]  = ContactView::class;        $this->itemClass=ContactItem::class;    }    /*protected function onCreate()    {        $data = new Contact();        $data->company = $this->company;        $data->firstName = $this->firstName;        $data->lastName = $this->lastName;        $data->phone = $this->phone;        $data->email = $this->email;        $this->dataId = $data->save();    }    protected function onUpdate()    {        $update = new ContactUpdate();        $update->company = $this->company;        $update->firstName = $this->firstName;        $update->lastName = $this->lastName;        $update->phone = $this->phone;        $update->email = $this->email;        $update->updateById($this->dataId);    }    protected function onIndex()    {        //$this->saveContactIndex();    }    protected function onDataRow()    {        $this->dataRow = (new ContactReader())->getRowById($this->dataId);    }    /**     * @return \Nemundo\Model\Row\AbstractModelDataRow|ContactRow     */    /*public function getDataRow()    {        return parent::getDataRow(); // TODO: Change the autogenerated stub    }    public function getSubject()    {        $contactRow = $this->getDataRow();        $subject = '';        if ($contactRow->company !== '') {            $subject = $contactRow->company . ', ';        }        $subject .= $contactRow->lastName . ' ' . $contactRow->firstName;        return $subject;    }    protected function getCompany()    {        // TODO: Implement getCompany() method.    }    protected function getLastName()    {        return $this->getDataRow()->lastName;    }    protected function getFirstName()    {        return $this->getDataRow()->lastName;    }    protected function getPhone()    {        return $this->getDataRow()->phone;    }    protected function getEmail()    {        return $this->getDataRow()->email;    }*/}