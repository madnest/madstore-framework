<?php

namespace Madnest\Madstore\Payment\Contracts;

use Madnest\Madstore\Payment\Contracts\Purchasable;

interface PaymentOption
{
    public function createPayment(Purchasable $purchasable, array $params = [], array $options = []);
}
