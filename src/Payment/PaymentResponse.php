<?php

namespace Madnest\Madstore\Payment;

use Madnest\Madstore\Core\Response;

class PaymentResponse extends Response
{
    public int $statusCode;

    public string $status;

    public string $orderNumber;

    public int $amount;

    public string $currency;

    public array $payer;

    public bool $redirect;

    public string $redirectUrl;

    public array $errors;

    public function __construct(
        int $statusCode,
        string $status,
        string $orderNumber,
        int $amount,
        string $currency,
        array $payer,
        string $redirectUrl,
        bool $redirect,
        array $errors
    ) {
        $this->statusCode = $statusCode;
        $this->status = $status;
        $this->orderNumber = $orderNumber;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->payer = $payer;
        $this->redirectUrl = $redirectUrl;
        $this->redirect = $redirect;
        $this->errors = $errors;
    }
}
