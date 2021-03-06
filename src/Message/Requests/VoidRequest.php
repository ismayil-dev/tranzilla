<?php

namespace Softiso\Tranzila\Message\Requests;

use Softiso\Tranzila\Message\Responses\Response;
use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Common\Message\ResponseInterface;

/**
 * Class VoidRequest
 */
class VoidRequest extends AbstractRequest
{
    /**
     * @inheritDoc
     */
    protected function getTransactionData(): array
    {
        return [
            'tranmode' => "D{$this->getIndex()}",
        ];
    }

    /**
     * @param mixed $data
     * @return Response&ResponseInterface
     * @throws InvalidRequestException
     */
    public function sendData($data): ResponseInterface
    {
        $this->validate('amount', 'authnr', 'index');

        return parent::sendData($data);
    }
}
