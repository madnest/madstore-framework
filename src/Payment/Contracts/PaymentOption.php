<?php

namespace Madnest\Madstore\Payment\Contracts;

use Madnest\Madstore\Payment\Contracts\Purchasable;
use Madnest\Madstore\Payment\PaymentResponse;

interface PaymentOption
{
    /**
     * Creates new payment
     *
     * @param Purchasable $purchasable
     * @param array $params
     * @param array $options
     * @return PaymentResponse
     */
    public function createPayment(Purchasable $purchasable, array $params = [], array $options = []): PaymentResponse;

    /**
     * Get status of payment
     *
     * @param int $id
     * @return PaymentResponse
     */
    public function getStatus(int $id): PaymentResponse;
}
