<?php

namespace JMS\I18nRoutingBundle\Locale;

interface LocaleProviderInterface
{
    /**
     * Get array of locales
     *
     * @return array
     */
    public function getLocales();

    /**
     * Get default locale
     *
     * @return string
     */
    public function getDefaultLocale();
}
