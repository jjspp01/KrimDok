<?php
namespace TueLib\Module\Configuration;

$config = array(
    'controllers' => array(
        'invokables' => array(
            'proxy' => 'TueLib\Controller\ProxyController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'proxy-load' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/Proxy/Load',
                    'defaults' => array(
                        'controller' => 'Proxy',
                        'action'     => 'Load',
                    )
                )
            ),
        )
    ),
    'vufind' => array(
        'plugin_managers' => array(
            'recorddriver' => array(
                'factories' => array(
                    'solrmarc' => 'TueLib\RecordDriver\Factory::getSolrMarc',
                )
            )
        ),
        'recorddriver_tabs' => [
            'VuFind\RecordDriver\SolrMarc' => [
                'tabs' => [
                    'Similar' => null,
                ],
            ],
        ],
    )
);

return $config;
