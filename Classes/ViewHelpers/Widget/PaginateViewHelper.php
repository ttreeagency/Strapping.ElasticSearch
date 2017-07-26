<?php
namespace Ttree\Strapping\ElasticSearch\ViewHelpers\Widget;

use Neos\Flow\Annotations as Flow;
use Neos\FluidAdaptor\Core\Widget\AbstractWidgetViewHelper;
use Neos\ContentRepository\Search\Search\QueryBuilderInterface;
use Ttree\Strapping\ElasticSearch\ViewHelpers\Widget\Controller\PaginateController;

class PaginateViewHelper extends AbstractWidgetViewHelper
{
    /**
     * @Flow\Inject
     * @var PaginateController
     */
    protected $controller;

    /**
     * Render this view helper
     *
     * @param QueryBuilderInterface $query
     * @param string $as
     * @param array $configuration
     * @return string
     */
    public function render(QueryBuilderInterface $query = null, $as, array $configuration = array('itemsPerPage' => 10, 'insertAbove' => false, 'insertBelow' => true, 'maximumNumberOfLinks' => 99))
    {
        if ($query === null) {
            return '';
        }
        $response = $this->initiateSubRequest();
        return $response->getContent();
    }
}
