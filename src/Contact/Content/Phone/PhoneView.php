<?phpnamespace Nemundo\Content\App\Contact\Content\Phone;use Nemundo\Com\Html\Hyperlink\PhoneHyperlink;use Nemundo\Content\View\AbstractContentView;class PhoneView extends AbstractContentView{    protected function loadView()    {        $this->viewName = 'default';        $this->viewId = 'e9f9c70e-9447-4377-a080-f3cc30034e20';        $this->defaultView = true;    }    public function getContent()    {        $phoneRow=(new PhoneItem($this->dataId))->getDataRow();        $phone = new PhoneHyperlink($this);        $phone->phone = $phoneRow->phone;  // $this->contentType->getDataRow()->phone;        return parent::getContent();    }}