<?php

namespace Madnest\Madstore\Payment\Contracts;

interface HasPayerInfo
{
    /**
     * Retrieve User id if exists
     *
     * @return string
     */
    public function getUserId(): ?int;

    /**
     * Retrieve first name
     *
     * @return string
     */
    public function getFirstName(): string;

    /**
     * Retrieve last name
     *
     * @return string
     */
    public function getLastName(): string;

    /**
     * Retrieve full name
     *
     * @return string
     */
    public function getFullName(): string;

    /**
     * Retrieve email
     *
     * @return string
     */
    public function getEmail(): string;

    /**
     * Retrieve phone number
     *
     * @return string
     */
    public function getPhoneNumber(): ?string;

    /**
     * Retrieve city
     *
     * @return string
     */
    public function getCity(): string;

    /**
     * Retrieve street
     *
     * @return string
     */
    public function getStreet(): string;

    /**
     * Retrieve zip code
     *
     * @return string
     */
    public function getZipCode(): string;

    /**
     * Retrieve country
     *
     * @return string
     */
    public function getCountry(): string;

    /**
     * Retrieve country ISO code
     *
     * @return string
     */
    public function getCountryIso(): string;

    /**
     * Retrieve country ISO 3 code
     *
     * @return string
     */
    public function getCountryIso3Code(): string;

    /**
     * Has company data?
     *
     * @return string
     */
    public function isCompany(): bool;

    /**
     * Retrieve company name
     *
     * @return string
     */
    public function getCompanyName(): string;

    /**
     * Retrieve company IN
     *
     * @return string
     */
    public function getCompanyIn(): string;

    /**
     * Retrieve company TIN
     *
     * @return string
     */
    public function getCompanyTin(): ?string;

    /**
     * Retrieve company street
     *
     * @return string
     */
    public function getCompanyStreet(): string;

    /**
     * Retrieve company city
     *
     * @return string
     */
    public function getCompanyCity(): string;

    /**
     * Retrieve company zip code
     *
     * @return string
     */
    public function getCompanyZipCode(): string;

    /**
     * Retrieve company country
     *
     * @return string
     */
    public function getCompanyCountry(): string;

    /**
     * Retrieve company country ISO code
     *
     * @return string
     */
    public function getCompanyCountryIso(): string;

    /**
     * Retrieve company country ISO 3 code
     *
     * @return string
     */
    public function getCompanyCountryIso3Code(): string;
}
