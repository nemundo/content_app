<?phpnamespace Nemundo\Content\App\Print\Install;use Nemundo\Content\Action\Setup\ActionSetup;use Nemundo\App\Application\Type\Install\AbstractUninstall;class PrintUninstall extends AbstractUninstall{    public function uninstall()    {//        (new ActionSetup())->removeContentAction(new ContentPrintContentAction());/*        (new ContentActionSetup())            ->removeContentAction(new ContentPrintAction());*/    }}