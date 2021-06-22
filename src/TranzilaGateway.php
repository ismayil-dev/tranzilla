<?php

namespace Softiso\Tranzilla;

use Softiso\Tranzilla\Message\Requests\AuthorizeRequest;
use Softiso\Tranzilla\Message\Requests\CaptureRequest;
use Softiso\Tranzilla\Message\Requests\PurchaseRequest;
use Softiso\Tranzilla\Message\Requests\RefundRequest;
use Softiso\Tranzilla\Message\Requests\VoidRequest;
use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Message\RequestInterface;

/**
 * Class TranzilaGateway
 *
 * @noinspection PhpHierarchyChecksInspection
 */
class TranzilaGateway extends AbstractGateway
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'tranzila';
    }

    /**
     * @inheritDoc
     */
    public function getDefaultParameters(): array
    {
        return [
            'supplier' => $this->getSupplier(),
            'terminal_password' => $this->getTerminalPassword(),
        ];
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setSupplier(?string $value): self
    {
        return $this->setParameter('supplier', $value);
    }

    /**
     * @return string|null
     */
    public function getSupplier(): ?string
    {
        return $this->getParameter('supplier');
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setTerminalPassword(?string $value): self
    {
        return $this->setParameter('terminal_password', $value);
    }

    /**
     * @return string|null
     */
    public function getTerminalPassword(): ?string
    {
        return $this->getParameter('terminal_password');
    }

    /**
     * @inheritDoc
     */
    public function authorize(array $options = []): RequestInterface
    {
        return $this->createRequest(AuthorizeRequest::class, $options);
    }

    /**
     * @inheritDoc
     */
    public function capture(array $options = []): RequestInterface
    {
        return $this->createRequest(CaptureRequest::class, $options);
    }

    /**
     * @inheritDoc
     */
    public function purchase(array $options = []): RequestInterface
    {
        return $this->createRequest(PurchaseRequest::class, $options);
    }

    /**
     * @inheritDoc
     */
    public function refund(array $options = []): RequestInterface
    {
        return $this->createRequest(RefundRequest::class, $options);
    }

    /**
     * @inheritDoc
     */
    public function void(array $options = array()): RequestInterface
    {
        return $this->createRequest(VoidRequest::class, $options);
    }
}
