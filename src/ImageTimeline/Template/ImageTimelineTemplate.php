<?phpnamespace Nemundo\Content\App\ImageTimeline\Template;use Nemundo\Admin\Com\Navbar\AdminBootstrapSiteNavbar;use Nemundo\Admin\Com\Navigation\AdminNavigation;use Nemundo\Com\Template\AbstractTemplateDocument;use Nemundo\Content\App\ImageTimeline\Site\ImageTimelineSite;class ImageTimelineTemplate extends AbstractTemplateDocument{    protected function loadContainer()    {        parent::loadContainer(); // TODO: Change the autogenerated stub        $nav = new AdminNavigation($this);        $nav->site=ImageTimelineSite::$site;    }}