<?php

namespace Madnest\Madstore\Payment;

use Illuminate\Support\Str;
use Madnest\Madstore\Core\Response;

class PaymentResponse extends Response
{
    public function __construct(array $params)
    {
        $this->checkRequiredKeys($params);

        foreach ($params as $key => $value) {
            $method = 'set' . ucfirst(Str::camel($key));
            if (!method_exists($this, $method)) {
                throw new \BadMethodCallException("Method {$method} does not exist.");
            }

            $this->{$method}($value);
        }
    }

    public function isSuccessfull(): bool
    {
        return $this->getStatusCode() === 200;
    }

    public function hasErrors(): bool
    {
        return is_array($this->getErrors()) && !empty($this->getErrors());
    }

    public function setStatusCode(int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setOrderNumber(string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setPaymentMethod(string $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }

    public function setGateway(string $gateway): void
    {
        $this->gateway = $gateway;
    }

    public function getGateway(): string
    {
        return $this->gateway;
    }

    public function setPayerInfo(array $payerInfo): void
    {
        $this->payerInfo = $payerInfo;
    }

    public function getPayerInfo(): ?array
    {
        return $this->payerInfo;
    }

    public function setPaymentId(string $paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    public function setRedirectUrl(string $redirectUrl): void
    {
        $this->redirectUrl = $redirectUrl;
    }

    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }

    public function setRedirect(bool $redirect): void
    {
        $this->redirect = $redirect;
    }

    public function getRedirect(): ?bool
    {
        return $this->redirect;
    }

    public function setClientSecret(string $clientSecret): void
    {
        $this->clientSecret = $clientSecret;
    }

    public function getClientSecret(): ?string
    {
        return $this->clientSecret;
    }

    public function setEetCode(string $eetCode): void
    {
        $this->eetCode = $eetCode;
    }

    public function getEetCode(): ?string
    {
        return $this->eetCode;
    }

    public function setErrors(array $errors): void
    {
        $this->errors = $errors;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    protected function checkRequiredKeys(array $params)
    {
        $required = ['statusCode', 'status', 'orderNumber', 'amount', 'currency', 'paymentMethod', 'gateway'];

        foreach ($required as $key) {
            if (!array_key_exists($key, $params)) {
                throw new \InvalidArgumentException("Argument {$key} is missing from parameters.");
            }
        }
    }
}
