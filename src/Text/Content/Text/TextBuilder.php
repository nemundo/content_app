<?phpnamespace Nemundo\Content\App\Text\Content\Text;use Nemundo\Content\App\Text\Data\Text\Text;use Nemundo\Content\App\Text\Data\Text\TextUpdate;use Nemundo\Content\Type\AbstractContentBuilder;class TextBuilder extends AbstractContentBuilder{    public $text;    protected function loadBuilder()    {        $this->contentType = new TextType();    }    protected function onCreate()    {        $data = new Text();        $data->text = $this->text;        $this->dataId = $data->save();    }    protected function onUpdate()    {        $update = new TextUpdate();        $update->text = $this->text;        $update->updateById($this->dataId);    }    /*protected function loadContentType()    {        $this->typeLabel = 'Text';        $this->typeId = '00b2fd69-59de-4e2d-b829-640c142253eb';    }*/}