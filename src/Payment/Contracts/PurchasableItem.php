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
     * Get PurchasableItem URL
     *
     * @return string
     */
    public function getUrl(): string;

    /**
     * Get PurchasableItem EAN
     *
     * @return string
     */
    public function getEan(): string;

    /**
     * Get PurchasableItem price
     *
     * @return integer
     */
    public function getAmount(): int;

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
