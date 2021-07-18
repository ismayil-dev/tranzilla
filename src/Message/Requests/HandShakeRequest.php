<?php


namespace Softiso\Tranzila\Message\Requests;


class HandShakeRequest extends AbstractRequest
{

    protected const ENDPOINT = 'https://secure5.tranzila.com/cgi-bin/tranzila71dt.cgi';

    protected function getTransactionData(): array
    {
        return [
            'op' => 1
        ];
    }

}