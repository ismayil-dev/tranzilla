<?php


namespace Softiso\Tranzila\Message\Requests;


use Omnipay\Common\Message\ResponseInterface;

class HandShakeRequest extends AbstractRequest
{

    protected const ENDPOINT = 'https://secure5.tranzila.com/cgi-bin/tranzila71dt.cgi';

    protected function getTransactionData(): array
    {
        return [
            'op' => 1
        ];
    }

    public function getHttpMethod(): string
    {
        return 'GET';
    }

    public function sendData($data): ResponseInterface
    {
        $endPoint = $this->getEndpoint() . '?' . $this->prepareBody($data);

        $response = $this->httpClient->request(
            $this->getHttpMethod(),
            $endPoint,
            $this->getHeaders(),
            $this->prepareBody($data),
        );

        $content = $response->getBody()->getContents();
        return $this->createResponse($this->refineContent($content));
    }

    private function refineContent(string $content)
    {
        $content = explode('=', $content);
        if (empty($content)) {
            return null;
        }

        return json_encode([$content[0] => $content[1]]);
    }

}