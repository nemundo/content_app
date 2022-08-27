<?phpnamespace Nemundo\Content\App\Calendar\Page;use Nemundo\Admin\Com\Form\AdminSearchForm;use Nemundo\Admin\Com\Pagination\AdminPagination;use Nemundo\Admin\Com\Table\AdminTable;use Nemundo\Admin\Com\Table\AdminTableHeader;use Nemundo\Admin\Com\Table\Row\AdminTableRow;use Nemundo\Admin\Com\Title\AdminTitle;use Nemundo\Com\FormBuilder\SearchForm;use Nemundo\Com\Template\AbstractTemplateDocument;use Nemundo\Content\Action\DeleteContentAction;use Nemundo\Content\Action\EditContentAction;use Nemundo\Content\Action\ViewContentAction;use Nemundo\Content\App\Calendar\Com\ListBox\CalendarSourceListBox;use Nemundo\Content\App\Calendar\Content\Calendar\CalendarContentType;use Nemundo\Content\App\Calendar\Data\Calendar\CalendarPaginationReader;use Nemundo\Content\App\Calendar\Data\CalendarSourceType\CalendarSourceTypeReader;use Nemundo\Content\App\Calendar\Parameter\CalendarParameter;use Nemundo\Content\App\Calendar\Site\CalendarItemSite;use Nemundo\Content\App\Calendar\Site\CalendarNewSite;use Nemundo\Content\App\Calendar\Site\CalendarSite;use Nemundo\Content\App\PublicShare\Action\PublicShareContentAction;use Nemundo\Content\Com\Dropdown\ContentTypeDropdown;use Nemundo\Content\Com\Widget\ContentWidget;use Nemundo\Content\Index\Tree\Action\ChildOrder\ChildOrderContentAction;use Nemundo\Content\Parameter\ContentParameter;use Nemundo\Package\Bootstrap\Layout\BootstrapTwoColumnLayout;class CalendarPage extends AbstractTemplateDocument  // CalendarTemplate{    public function getContent()    {        $title = new AdminTitle($this);        $title->content = CalendarSite::$site->title;        $dropdown=new ContentTypeDropdown($this);        $dropdown->redirectSite= CalendarNewSite::$site;        $reader = new CalendarSourceTypeReader();        $reader->model->loadContentType();        $reader->addOrder($reader->model->contentType->contentType);        foreach ($reader->getData() as $calendarSourceTypeRow) {            //$this->addItem($calendarSourceTypeRow->id,$calendarSourceTypeRow->contentType->contentType);            $contentType = $calendarSourceTypeRow->contentType->getContentType();            if ($contentType->hasForm()) {                $dropdown->addContentType($contentType);            }        }        $formSearch = new AdminSearchForm($this);        $source = new CalendarSourceListBox($formSearch);        $source->submitOnChange=true;        $source->searchMode=true;        /*$formRow = new BootstrapRow($formSearch);        $sourceType = new BootstrapListBox($formRow);        $sourceType->label = 'Quelle';        $sourceType->submitOnChange = true;        $sourceType->searchMode = true;        $reader = new CalendarSourceTypeReader();        $reader->model->loadContentType();        foreach ($reader->getData() as $sourceTypeRow) {            $sourceType->addItem($sourceTypeRow->contentTypeId, $sourceTypeRow->contentType->contentType);        }*/        $layout = new BootstrapTwoColumnLayout($this);        $layout->col1->columnWidth = 4;        $layout->col2->columnWidth = 8;        $calendarReader = new CalendarPaginationReader();        $calendarReader->model->loadContent();        $calendarReader->model->content->loadContentType();        $calendarReader->addOrder($calendarReader->model->date);        //$reader->paginationLimit = ProcessConfig::PAGINATION_LIMIT;        $table = new AdminTable($layout->col1);        $header = new AdminTableHeader($table);        $header->addText($calendarReader->model->date->label);        $header->addText($calendarReader->model->time->label);        $header->addText($calendarReader->model->event->label);        $header->addText($calendarReader->model->content->contentType->label);        $calendarId = (new CalendarParameter())->getValue();        foreach ($calendarReader->getData() as $calendarRow) {            $row = new AdminTableRow($table);            /*if ($calendarRow->id == $calendarId) {                $row->setActiveRow();            }*/            $row->addText($calendarRow->date->getShortDateLeadingZeroFormat());            $row->addText($calendarRow->time->getTimeLeadingZero());            $row->addText($calendarRow->event);            $row->addText($calendarRow->content->contentType->contentType);            $site = clone(CalendarItemSite::$site);            //$site->addParameter(new CalendarParameter($calendarRow->id));            $site->addParameter(new ContentParameter($calendarRow->contentId));            $row->addIconSite($site);        }        $pagination = new AdminPagination($layout->col1);        $pagination->paginationReader = $calendarReader;        $parameter = new CalendarParameter();        if ($parameter->hasValue()) {            $calendarContent = new CalendarContentType($parameter->getValue());            $widget = new ContentWidget($layout->col2);            $widget->contentType = $calendarContent;            $widget->actionDropdown->addContentAction(new EditContentAction());            $widget->actionDropdown->addContentAction(new ChildOrderContentAction());            $widget->actionDropdown->addContentAction(new ViewContentAction());            $widget->actionDropdown->addContentAction(new PublicShareContentAction());            $widget->actionDropdown->addSeperator();            $widget->actionDropdown->addContentAction(new DeleteContentAction());            /* $container = new TreeAdminContainer($layout->col2);             $container->contentType = $calendarContent;*/        }        return parent::getContent();    }}