<?php

namespace Madnest\Madstore\Payment\Contracts;

interface HasPayerInfo
{
    /**
     * Get first name
     *
     * @return string
     */
    public function getFirstName(): string;

    /**
     * Get last name
     *
     * @return string
     */
    public function getLastName(): string;

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail(): string;

    /**
     * Get phone number
     *
     * @return string
     */
    public function getPhoneNumber(): string;

    /**
     * Get city
     *
     * @return string
     */
    public function getCity(): string;

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet(): string;

    /**
     * Get zip code
     *
     * @return string
     */
    public function getZipCode(): string;

    /**
     * Get country code in ISO3 format
     *
     * @return string
     */
    public function getCountryIso3Code(): string;
}
