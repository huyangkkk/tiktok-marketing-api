<?php

declare(strict_types=1);

namespace Promopult\TikTokMarketingApi;

interface CredentialsInterface
{
    /* Base URLs */
    public const API_BASE_URL = 'https://ads.tiktok.com';
    public const API_BASE_URL_SANDBOX = 'https://sandbox-ads.tiktok.com';

    /**
     * @return string
     */
    public function getAccessToken(): string;

    /**
     * @return string
     */
    public function getAppId(): string;

    /**
     * @return string
     */
    public function getSecret(): string;

    /**
     * @return string
     */
    public function getApiBaseUrl(): string;
}
