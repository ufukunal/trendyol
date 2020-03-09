<?php

namespace BoolXY\Trendyol\Requests\OrderService;

use BoolXY\Trendyol\Abstracts\AbstractRequest;
use BoolXY\Trendyol\Interfaces\IRequest;

class UpdatePackage extends AbstractRequest implements IRequest
{
    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return self::METHOD_PUT;
    }

    /**
     * @inheritDoc
     */
    public function getPathPattern(): string
    {
        return 'suppliers/$supplierId/shipment-packages/$id';
    }
}
