<?phprequire __DIR__ . "/config.php";(new \Nemundo\App\ModelDesigner\ModelDesignerConfig())->addProject(new \Nemundo\FrameworkProject());(new \Nemundo\App\ModelDesigner\ModelDesignerConfig())->addProject(new \Nemundo\Content\ContentProject());(new \Nemundo\App\ModelDesigner\ModelDesignerConfig())->addProject(new \Nemundo\Content\App\ContentAppProject());\Nemundo\Admin\Controller\AdminController::addAdminSite(new \Nemundo\Content\App\PublicShare\Site\PublicShareSite());\Nemundo\Admin\Controller\AdminController::addAdminSite(new \Nemundo\Content\App\Dashboard\Site\DashboardSite());\Nemundo\Admin\Controller\AdminController::addAdminSite(new \Nemundo\Content\App\FileTransfer\Site\FileTransferSite());\Nemundo\Admin\Controller\AdminController::addAdminSite(new \Nemundo\Content\App\Share\Site\PrivateShareRedirectSite());\Nemundo\Admin\Controller\AdminController::addAdminSite(new \Nemundo\Content\AppTest\ImageGallery\TestImageGallerySite());\Nemundo\App\ClassDesigner\ClassDesignerConfig::$classBuilderFormList[] = new \Nemundo\Content\ClassDesigner\ContentTypeClassBuilderForm();\Nemundo\Com\Html\Header\LibraryHeader::$documentTitle = (new \Nemundo\Content\App\ContentAppProject())->project;