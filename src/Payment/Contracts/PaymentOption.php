<?php

namespace Madnest\Madstore\Payment\Contracts;

use Madnest\Madstore\Payment\Contracts\Purchasable;
use Madnest\Madstore\Payment\PaymentResponse;

interface PaymentOption
{
    public function createPayment(Purchasable $purchasable, array $params = [], array $options = []): PaymentResponse;
}
