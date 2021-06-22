<?php

namespace Softiso\Tranzila\Message\Requests;

/**
 * Class PurchaseRequest
 */
class PurchaseRequest extends AbstractRequest
{
    /**
     * @inheritDoc
     */
    public function getTransactionData(): array
    {
        return [
            'tranmode' => 'A',
        ];
    }
}
