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

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function getStatus()
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

    public function setAmount(string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getCurrency(): array
    {
        return $this->currency;
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

    public function getRedirectUrl(): bool
    {
        return $this->redirectUrl;
    }

    public function setRedirect(bool $redirect): self
    {
        $this->redirect = $redirect;

        return $this;
    }

    public function getRedirect(): array
    {
        return $this->redirect;
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
