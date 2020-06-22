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

    public function setOrderNumber(string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    public function setAmount(string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function setCurrency(string $currency)
    {
        $this->currency = $currency;

        return $this;
    }

    public function setPayer(array $payer)
    {
        $this->payer = $payer;

        return $this;
    }

    public function setRedirectUrl(string $redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;

        return $this;
    }

    public function setRedirect(bool $redirect)
    {
        $this->redirect = $redirect;

        return $this;
    }

    public function setErrors(array $errors)
    {
        $this->errors = $errors;

        return $this;
    }
}
