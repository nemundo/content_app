<?phpnamespace Nemundo\Content\App\Widget\Install;use Nemundo\App\Application\Setup\ApplicationSetup;use Nemundo\App\Application\Type\Install\AbstractInstall;use Nemundo\Content\App\Widget\Application\WidgetApplication;use Nemundo\Content\App\Widget\Content\UniqueId\UniqueIdType;use Nemundo\Content\App\Widget\Content\UtcTime\UtcTimeContentType;use Nemundo\Content\Setup\ContentTypeSetup;class WidgetInstall extends AbstractInstall{    public function install()    {        (new ApplicationSetup())            ->addApplication(new WidgetApplication());        (new ContentTypeSetup(new WidgetApplication()))            //->addContentType(new ClockContentType())        //    ->addContentType(new UtcTimeContentType());        ->addContentType(new UniqueIdType());        /*(new ClockContentType())->saveType();        (new UtcTimeContentType())->saveType();        (new UniqueIdContentType())->saveType();*/    }}