<?php

namespace Madnest\Madstore\Payment\Contracts;

use Illuminate\Support\Collection;
use Madnest\Madstore\Payment\Contracts\HasPayerInfo;

interface Purchasable
{
    /**
     * Get language
     *
     * @return void
     */
    public function getLanguage(): string;

    /**
     * Get currency code
     *
     * @return string
     */
    public function getCurrency();

    /**
     * Get UUID
     *
     * @return string
     */
    public function getUUID(): string;

    /**
     * Get variable symbol
     *
     * @return string
     */
    public function getVarSymbol(): string;

    /**
     * Get price sum
     *
     * @return integer
     */
    public function getAmount(): int;

    /**
     * Get discount amount
     *
     * @return integer
     */
    public function getDiscountAmount(): int;

    /**
     * Get final amount
     *
     * @return integer
     */
    public function getFinalAmount(): int;

    /**
     * Get Purchasable items collection
     *
     * @return Collection
     */
    public function getItems(): Collection;

    /**
     * Get payer info
     *
     * @return HasPayerInfo
     */
    public function getPayerInfo(): HasPayerInfo;
}
