<?phpnamespace Nemundo\Content\App\Explorer\Install;use Nemundo\App\Application\Type\Install\AbstractUninstall;use Nemundo\Content\App\Explorer\Content\Container\ContainerType;use Nemundo\Content\App\Explorer\Data\ExplorerModelCollection;use Nemundo\Content\App\Explorer\Store\HomeContentIdStore;use Nemundo\Content\Setup\ContentTypeRemove;use Nemundo\Model\Setup\ModelCollectionSetup;class ExplorerUninstall extends AbstractUninstall{    public function uninstall()    {        (new ContentTypeRemove())            ->removeContent(new ContainerType());        (new ModelCollectionSetup())            ->removeCollection(new ExplorerModelCollection());        /*(new ContentTypeSetup())            ->addContentType(new ContainerType())            ->addContentType(new ContainerRenameLogContentType());*/        //(new HomeContentIdStore())->removeStore();    }}