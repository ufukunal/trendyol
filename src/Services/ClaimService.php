<?php

namespace BoolXY\Trendyol\Services;

use BoolXY\Trendyol\Abstracts\AbstractService;
use BoolXY\Trendyol\Builders\GetClaimsRequestBuilder;
use BoolXY\Trendyol\Interfaces\IService;

class ClaimService extends AbstractService implements IService
{
    /**
     * @return GetClaimsRequestBuilder
     */
    public function getClaims(): GetClaimsRequestBuilder
    {
        return new GetClaimsRequestBuilder($this->requestManager);
    }
}
