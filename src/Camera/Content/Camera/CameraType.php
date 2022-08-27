<?phpnamespace Nemundo\Content\App\Camera\Content\Camera;use Nemundo\Content\App\Camera\Content\Camera\View\CameraDetailView;use Nemundo\Content\App\Camera\Content\Camera\View\CameraView;use Nemundo\Content\App\Camera\Data\Camera\CameraDelete;use Nemundo\Content\App\Camera\Data\Camera\CameraReader;use Nemundo\Content\App\Camera\Data\Camera\CameraRow;use Nemundo\Content\Index\Calendar\DateTimeIndexTrait;use Nemundo\Content\Index\Geo\Type\GeoIndexTrait;use Nemundo\Content\Index\Tree\Com\Form\ContentSearchForm;use Nemundo\Content\Type\AbstractContentType;use Nemundo\Content\Type\JsonContentTrait;use Nemundo\Content\Type\WebServiceTrait;class CameraType extends AbstractContentType{    protected function loadContentType()    {        $this->typeLabel = 'Camera';        $this->typeId = 'd7ce44a9-7a62-4c88-9e48-7859df3de1b2';        $this->formClassList[] = CameraForm::class;        $this->formClassList[] = ContentSearchForm::class;        $this->viewClassList[] = CameraView::class;        $this->viewClassList[] = CameraDetailView::class;        $this->itemClass = CameraItem::class;        $this->listingClass = CameraContentListing::class;        //$this->webServiceClass = CameraContentService::class;    }}