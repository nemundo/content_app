<?phpnamespace Nemundo\Content\App\Store\Form;use Nemundo\Admin\Com\ListBox\AdminTextBox;use Nemundo\Package\Bootstrap\FormElement\BootstrapTextBox;class TextStoreForm extends AbstractStoreForm{    /**     * @var AdminTextBox     */    private $text;    public function getContent()    {        $this->text = new AdminTextBox($this);        $this->text->label = $this->store->storeLabel;        $this->text->value = $this->store->getValue();        return parent::getContent();    }    protected function getStoreValue()    {        $value = $this->text->getValue();        return $value;    }}