<?php

namespace Madnest\Madstore\Payment\Contracts;

interface PurchasableItem
{
    /**
     * Get purchasable item title
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Get purchasable item URL
     *
     * @return string
     */
    public function getUrl(): string;

    /**
     * Get purchasable item EAN
     *
     * @return string
     */
    public function getEan(): string;

    /**
     * Get purchasable option price
     *
     * @return integer
     */
    public function getAmount(): int;

    /**
     * Get purchasable item quantity
     *
     * @return integer
     */
    public function getQuantity(): int;
}
