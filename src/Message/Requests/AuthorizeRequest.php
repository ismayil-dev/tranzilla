<?php

namespace Softiso\Tranzila\Message\Requests;

use Softiso\Tranzila\Message\Responses\Response;
use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Common\Message\ResponseInterface;

/**
 * Class AuthorizeRequest
 */
class AuthorizeRequest extends AbstractRequest
{
    /**
     * @inheritDoc
     */
    public function getTransactionData(): array
    {
        return [
            'tranmode' => 'V',
        ];
    }

    /**
     * @param mixed $data
     * @return Response&ResponseInterface
     * @throws InvalidRequestException
     */
    public function sendData($data): ResponseInterface
    {
        if ($this->hasParameters('TranzilaTK')) {
            $this->validate('expdate');

            return parent::sendData($data);
        }

        if ($this->hasParameters('ccno')) {
            $this->validate('expdate', 'mycvv');

            return parent::sendData($data);
        }

        return $this->createRedirectResponse();
    }
}
