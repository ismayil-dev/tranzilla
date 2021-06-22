<?php

namespace Softiso\Tranzila\Message\Requests;

use Softiso\Tranzila\Message\Responses\Response;
use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Common\Message\ResponseInterface;

/**
 * Class CaptureRequest
 */
class CaptureRequest extends AbstractRequest
{
    /**
     * @inheritDoc
     */
    public function getTransactionData(): array
    {
        return [
            'tranmode' => 'F',
        ];
    }

    /**
     * @param mixed $data
     * @return Response&ResponseInterface
     * @throws InvalidRequestException
     */
    public function sendData($data): ResponseInterface
    {
        $this->validate('amount');

        return parent::sendData($data);
    }
}
