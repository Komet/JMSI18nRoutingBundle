<?php

namespace JMS\I18nRoutingBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

class LocaleProviderPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $localeProvider = $container->getParameter('jms_i18n_routing.locale_provider');

        if ('default' == $localeProvider) {
            $container->setAlias('jms_i18n_routing.default.service.locale_provider', 'jms_i18n_routing.default.service.parameter_locale_provider');

            $definition = $container->getDefinition('jms_i18n_routing.default.service.parameter_locale_provider');

            $definition->setArguments(array(
                $container->getParameter('jms_i18n_routing.locales'),
                $container->getParameter('jms_i18n_routing.default_locale'),
            ));
        } else {
            $container->setAlias('jms_i18n_routing.default.service.locale_provider', $localeProvider);
        }
    }
}
