<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.4e0l2SM' shared service.

return $this->privates['.service_locator.4e0l2SM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'cpt' => ['privates', 'App\\Repository\\CompteRepository', 'getCompteRepositoryService.php', true],
    'serializer' => ['services', 'serializer', 'getSerializerService', false],
], [
    'cpt' => 'App\\Repository\\CompteRepository',
    'serializer' => '?',
]);
