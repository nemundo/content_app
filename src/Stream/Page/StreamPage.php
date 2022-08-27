<?phpnamespace Nemundo\Content\App\Stream\Page;use Nemundo\Admin\Com\Card\AdminCard;use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;use Nemundo\Admin\Com\Title\AdminTitle;use Nemundo\Admin\Com\Widget\AdminWidget;use Nemundo\Com\FormBuilder\SearchForm;use Nemundo\Com\Template\AbstractTemplateDocument;use Nemundo\Content\App\File\Content\Image\ImageType;use Nemundo\Content\App\Stream\Action\StreamContentAction;use Nemundo\Content\App\Stream\Collection\StreamContentTypeCollection;use Nemundo\Content\App\Stream\Com\Container\StreamContainer;use Nemundo\Content\App\Stream\Com\Form\StreamForm;use Nemundo\Content\App\Stream\Data\Stream\StreamPaginationReader;use Nemundo\Content\App\Stream\Data\StreamContentType\StreamContentTypeReader;use Nemundo\Content\App\Stream\Site\StreamSite;use Nemundo\Content\App\Stream\Usergroup\StreamUsergroup;use Nemundo\Content\App\Text\Content\LargeText\LargeTextType;use Nemundo\Content\App\Video\Content\YouTube\YouTubeType;use Nemundo\Content\Builder\ContentBuilder;use Nemundo\Content\Com\Dropdown\ContentTypeDropdown;use Nemundo\Content\Com\ListBox\ContentTypeCollectionListBox;use Nemundo\Content\Parameter\ContentTypeParameter;use Nemundo\Db\Sql\Order\SortOrder;use Nemundo\Html\Paragraph\Paragraph;use Nemundo\Package\Bootstrap\Pagination\BootstrapPagination;class StreamPage extends AbstractTemplateDocument{    public function getContent()    {        $layout = new AdminFlexboxLayout($this);        $dropdown = new ContentTypeDropdown($layout);        $reader=new StreamContentTypeReader();        $reader->model->loadContentType();        $reader->addOrder($reader->model->contentType->contentType);        foreach ($reader->getData() as $contentTypeRow) {            $dropdown->addContentType($contentTypeRow->contentType->getContentType());        }        $parameter = new ContentTypeParameter();        if ($parameter->hasValue()) {            $type = $parameter->getContentType();            $title = new AdminTitle($this);            $title->content = $type->typeLabel;            foreach ($type->getFormList() as $form) {                $card = new AdminCard($layout);                $card->cardTitle = $form->formName;                $card->addContainer($form);                $action = new StreamContentAction();                $form->addAction($action);                $form->redirectSite = StreamSite::$site;            }        }        new StreamContainer($layout);        /*        $streamReader = new StreamPaginationReader();        $streamReader->model->loadUser();        $streamReader->model->loadContent();        $streamReader->model->content->loadContentType();        $streamReader->addOrder($streamReader->model->id, SortOrder::DESCENDING);        foreach ($streamReader->getData() as $streamRow) {            //$contentType = $streamRow->content->getContent();            $card = new AdminCard($layout);  // new BootstrapCard($layout->col1);  // new ContentWidget($layout->col1);            $card->cardTitle = $streamRow->content->subject . ' ' . $streamRow->dateTime->getShortDateTimeLeadingZeroFormat();  //  $contentType->getSubject().' / '. $streamRow->user->displayName.' '.$streamRow->dateTime->getShortDateTimeLeadingZeroFormat();            //$widget->addCssClass('m-3');            if ($streamRow->hasMessage) {                $p = new Paragraph($card);                $p->content = $streamRow->dateTime->getShortDateTimeLeadingZeroFormat();                //$p->content=$streamRow->message;            }            //$contentType->getDefaultView($widget);            //$item = (new ContentBuilder($streamRow->contentId))->getContentItem();            //$view = $item->getDefaultView($card);  // getDefaultView($card);            //$view->            (new ContentBuilder($streamRow->contentId))->getDefaultView($card);            //$item->getDefaultView($widget);            /*$widget->contentType = $contentType;            $widget->viewId=$contentType->getDefaultViewId();            $widget->actionDropdown->addContentAction(new EditContentAction());            $widget->actionDropdown->addContentAction(new StreamDeleteContentAction());*/            //$widget->actionDropdown->addContentAction(new ViewChangeContentAction());            /*            if ((new UsergroupMembership())->isMemberOfUsergroup(new StreamUsergroup())) {            $widget->addContentAction(new EditContentAction());            $widget->addContentAction(new StreamDeleteContentAction());            $widget->addContentAction(new ViewChangeContentAction());            } else {                $widget->showMenu=false;                $widget->viewEditable=false;            }*/            //$widget->widgetTitle = $contentType->getSubject() . ' - ' . $streamRow->dateTime->getShortDateTimeLeadingZeroFormat();            //$widget->addCssClass(BootstrapSpacing::MARIGN_BOTTOM_3);            //$p=new Paragraph($layout->col1);            //$p->content = $streamRow->contentViewId;            /*$card = new AdminCard($layout->col1);            $card->title =            $contentType->getSubject() . ' ' . $streamRow->dateTime->getShortDateTimeLeadingZeroFormat();            $contentType->getDefaultView($card);*/        /*}        $pagination = new BootstrapPagination($this);        $pagination->paginationReader = $streamReader;*/        return parent::getContent();    }}