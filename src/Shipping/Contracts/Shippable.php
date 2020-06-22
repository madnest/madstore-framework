<?php

namespace Madnest\Madstore\Shipping\Contracts;

use Madnest\Madstore\Shipping\Contracts\ShippingOption;

interface Shippable
{
    /**
     * Determines wether Shipping option was already set
     *
     * @return boolean
     */
    public function hasPaymentOption(): bool;

    /**
     * Get Shipping option
     *
     * @return ShippingOption
     */
    public function shippingOption(): ShippingOption;
}
