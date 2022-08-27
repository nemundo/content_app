<?phpnamespace Nemundo\Content\App\Video\Content\YouTube;use Nemundo\Com\Video\YouTube\YouTubeInformation;use Nemundo\Content\App\Video\Data\YouTube\YouTube;use Nemundo\Content\App\Video\Data\YouTube\YouTubeDelete;use Nemundo\Content\App\Video\Data\YouTube\YouTubeReader;use Nemundo\Content\App\Video\Data\YouTube\YouTubeRow;use Nemundo\Content\App\Video\Data\YouTube\YouTubeUpdate;use Nemundo\Content\Index\Tree\Com\Form\ContentSearchForm;use Nemundo\Content\Type\AbstractContentType;use Nemundo\Content\Type\JsonContentTrait;use Nemundo\Content\View\Listing\ContentListing;use Nemundo\Core\Type\Text\Text;use Nemundo\Crawler\HtmlParser\HtmlParser;class YouTubeType extends AbstractContentType{    protected function loadContentType()    {        $this->typeId = '5badc331-f0d1-4f14-8eba-e8468a64b9e3';        $this->typeLabel = 'YouTube';        $this->formClassList[] = YouTubeForm::class;        //$this->formClassList[] = ContentSearchForm::class;        $this->viewClassList[] = YouTubeView::class;        $this->viewClassList[] = YouTubeTitleDescriptionContentView::class;        $this->formPartClass = YouTubeContentFormPart::class;        // Image mit Play View        $this->itemClass=YouTubeItem::class;$this->removeClass=YouTubeRemove::class;        //$this->listingClass = ContentListing::class;    }}