<?php

namespace Madnest\Madstore\Shipping\Contracts;

interface ShippingItem
{
    /**
     * Get Shipping option title
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Get Shipping option price
     *
     * @return integer
     */
    public function getAmount(): int;
}
