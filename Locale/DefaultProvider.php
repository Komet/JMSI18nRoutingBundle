<?php

namespace JMS\I18nRoutingBundle\Locale;

class DefaultProvider implements LocaleProviderInterface
{
    /**
     * Locales
     *
     * @var array
     */
    protected $locales;

    /**
     * Default locale
     *
     * @var
     */
    protected $defaultLocale;

    /**
     * @param array $locales
     * @param       $defaultLocale
     */
    public function __construct(array $locales, $defaultLocale)
    {
        if (!in_array($defaultLocale, $locales)) {
            throw new \InvalidArgumentException('Default locale should be contained in locales');
        }

        $this->locales = $locales;
        $this->defaultLocale = $defaultLocale;
    }

    /**
     * {@inheritdoc}
     *
     */
    public function getLocales()
    {
        return $this->locales;
    }

    /**
     * {@inheritdoc}
     *
     */
    public function getDefaultLocale()
    {
        return $this->defaultLocale;
    }
}
