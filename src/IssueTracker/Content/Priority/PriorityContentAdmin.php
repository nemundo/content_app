<?phpnamespace Nemundo\Content\App\IssueTracker\Content\Priority;use Nemundo\Admin\Com\Table\AdminBootstrapTable;use Nemundo\Com\TableBuilder\TableRow;use Nemundo\Content\App\IssueTracker\Data\Priority\PriorityReader;use Nemundo\Content\View\AbstractContentAdmin;class PriorityContentAdmin extends AbstractContentAdmin{    protected function onIndex()    {        $table = new AdminBootstrapTable($this);        $reader = new PriorityReader();        foreach ($reader->getData() as $priorityRow) {            $row = new TableRow($table);            $row->addText($priorityRow->priority);        }        parent::onIndex(); // TODO: Change the autogenerated stub    }}