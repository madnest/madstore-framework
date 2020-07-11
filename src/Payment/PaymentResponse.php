<?php

namespace Madnest\Madstore\Payment;

use Madnest\Madstore\Core\Response;

class PaymentResponse extends Response
{
    public function __construct(int $statusCode, string $status)
    {
        $this->statusCode = $statusCode;

        $this->status = $status;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setOrderNumber(string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setPaymentMethod(string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }

    public function setPayer(array $payer): self
    {
        $this->payer = $payer;

        return $this;
    }

    public function getPayer(): string
    {
        return $this->payer;
    }

    public function setRedirectUrl(string $redirectUrl): self
    {
        $this->redirectUrl = $redirectUrl;

        return $this;
    }

    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }

    public function setGateway(string $gateway): self
    {
        $this->gateway = $gateway;

        return $this;
    }

    public function getGateway(): string
    {
        return $this->gateway;
    }

    public function setRedirect(bool $redirect): self
    {
        $this->redirect = $redirect;

        return $this;
    }

    public function getRedirect(): bool
    {
        return $this->redirect;
    }

    public function setEetCode(string $eetCode): self
    {
        $this->eetCode = $eetCode;

        return $this;
    }

    public function getEetCode(): bool
    {
        return $this->eetCode;
    }

    public function setErrors(array $errors): self
    {
        $this->errors = $errors;

        return $this;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
