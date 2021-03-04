<?php

namespace Webkul\GraphQLAPI\Queries\Promotion;

use Webkul\GraphQLAPI\Queries\BaseFilter;

class FilterCatalogRuleProductPrice extends BaseFilter
{
    /**
     * filter the data .
     *
     * @param  object  $query
     * @param  array $input
     * @return \Illuminate\Http\Response
     */
    public function __invoke($query, $input)
    {
        $arguments = $this->getFilterParams($input);

        return $query->where($arguments);
    } 
}  
