<?phpnamespace Nemundo\Content\App\Text\Content;use Nemundo\Content\App\Text\Content\Html\HtmlType;use Nemundo\Content\App\Text\Content\LargeText\LargeTextType;use Nemundo\Content\App\Text\Content\RichText\RichTextType;use Nemundo\Content\App\Text\Content\Text\TextType;use Nemundo\Content\App\Text\Content\Title\TitleContentType;use Nemundo\Content\App\Text\Content\VersionLargeText\VersionLargeTextContentType;use Nemundo\Content\App\Text\Content\VersionText\VersionTextContentType;use Nemundo\Content\Collection\AbstractContentTypeCollection;class TextContentTypeCollection extends AbstractContentTypeCollection{    protected function loadCollection()    {        $this            ->addContentType(new TextType())            //->addContentType(new TitleContentType())            ->addContentType(new LargeTextType())            ->addContentType(new HtmlType())            ->addContentType(new RichTextType());            //->addContentType(new VersionTextContentType())            //->addContentType(new VersionLargeTextContentType());    }}