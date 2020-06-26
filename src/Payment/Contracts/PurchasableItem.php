<?php

namespace Madnest\Madstore\Payment\Contracts;

interface PurchasableItem
{
    /**
     * Get PurchasableItem title
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Get PurchasableItem price
     *
     * @return integer
     */
    public function getAmount(): int;

    /**
     * Get PurchasableItem price
     *
     * @return integer
     */
    public function getPrice(): float;

    /**
     * Get PurchasableItem quantity
     *
     * @return integer
     */
    public function getQuantity(): int;

    /**
     * Get PurchasableItem VAT rate
     *
     * @return integer
     */
    public function getVATRate(): int;
}
