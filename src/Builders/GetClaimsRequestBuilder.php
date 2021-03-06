<?php

namespace BoolXY\Trendyol\Builders;

use BoolXY\Trendyol\Abstracts\AbstractRequestBuilder;
use BoolXY\Trendyol\Enums\ClaimItemStatus;
use BoolXY\Trendyol\Interfaces\IRequestBuilder;
use BoolXY\Trendyol\RequestManager;
use BoolXY\Trendyol\Requests\ClaimService\GetClaims;

class GetClaimsRequestBuilder extends AbstractRequestBuilder implements IRequestBuilder
{
    /**
     * GetClaimsRequestBuilder constructor.
     *
     * @param RequestManager $requestManager
     */
    public function __construct(RequestManager $requestManager)
    {
        parent::__construct($requestManager);

        $this->setRequest(new GetClaims([
            'supplierId' => $this->requestManager->getClient()->getSupplierId(),
        ]));
    }

    /**
     * @param int $cargoTrackingNumber
     *
     * @return $this
     */
    public function cargoTrackingNumber(int $cargoTrackingNumber): self
    {
        $this->request->addQueryParam('cargoTrackingNumber', $cargoTrackingNumber);

        return $this;
    }

    /**
     * @param int $cargoSenderNumber
     *
     * @return $this
     */
    public function cargoSenderNumber(int $cargoSenderNumber): self
    {
        $this->request->addQueryParam('cargoSenderNumber', $cargoSenderNumber);

        return $this;
    }

    /**
     * @param string $cargoTrackingLink
     *
     * @return $this
     */
    public function cargoTrackingLink(string $cargoTrackingLink): self
    {
        $this->request->addQueryParam('cargoTrackingLink', $cargoTrackingLink);

        return $this;
    }

    /**
     * @param ClaimItemStatus $status
     *
     * @return $this
     */
    public function status(ClaimItemStatus $status): self
    {
        $this->request->addQueryParam('status', (string) $status);

        return $this;
    }

    /**
     * @return mixed
     */
    public function get()
    {
        return $this->process();
    }
}
