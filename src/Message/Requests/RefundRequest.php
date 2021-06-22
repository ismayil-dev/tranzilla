<?php

namespace Softiso\Tranzilla\Message\Requests;

/**
 * Class RefundRequest
 */
class RefundRequest extends AbstractRequest
{
    /**
     * @inheritDoc
     */
    public function getTransactionData(): array
    {
        return [
            'tranmode' => "C{$this->getIndex()}",
        ];
    }
}
