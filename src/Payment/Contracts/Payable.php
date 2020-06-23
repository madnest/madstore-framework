<?php

namespace Madnest\Madstore\Payment\Contracts;

interface Payable
{
    /**
     * Determines wether Payment option was already set
     *
     * @return boolean
     */
    public function hasPaymentOption(): bool;

    /**
     * Get Payment option
     *
     * @return PaymentOption
     */
    public function paymentOption(): ?PaymentOption;
}
