<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_rest.serializer.jms_handler_registry' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Serializer/JMSHandlerRegistryV2.php';

return $this->services['fos_rest.serializer.jms_handler_registry'] = new \FOS\RestBundle\Serializer\JMSHandlerRegistryV2(($this->privates['fos_rest.serializer.jms_handler_registry.inner'] ?? $this->getFosRest_Serializer_JmsHandlerRegistry_InnerService()));
