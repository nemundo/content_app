<?phpnamespace Nemundo\Content\App\File\Content\Document\View;use Nemundo\Admin\Com\Table\AdminLabelValueTable;use Nemundo\Com\Html\Hyperlink\UrlHyperlink;use Nemundo\Content\App\File\Content\Document\DocumentItem;use Nemundo\Content\View\AbstractContentView;use Nemundo\Core\Debug\Debug;use Nemundo\Core\File\FileSize;use Nemundo\Core\Type\Text\Html;use Nemundo\Html\Block\ContentDiv;use Nemundo\Html\Block\Div;class DocumentInformationView extends AbstractContentView{    protected function loadView()    {        $this->viewName='Document Information';        $this->viewId='c40a1ec9-fd1e-4a0b-b8ed-07cbac77dc5c';    }    public function getContent()    {        $documentRow = (new DocumentItem($this->dataId))->getDataRow();        $hyperlink = new UrlHyperlink($this);        $hyperlink->content = $documentRow->document->getFilename();        $hyperlink->url = $documentRow->document->getUrl();        $fileSize = new FileSize($documentRow->document->getFileSize());        $table = new AdminLabelValueTable($this);        $table->addLabelValue('Filesize', $fileSize->getText());        $table->addLabelValue('Extension', $documentRow->document->getFileExtension());        return parent::getContent();    }}