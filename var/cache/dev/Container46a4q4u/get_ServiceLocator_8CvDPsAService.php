<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.8CvDPsA' shared service.

return $this->privates['.service_locator.8CvDPsA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'part' => ['privates', '.errored..service_locator.8CvDPsA.App\\Entity\\Partenaire', NULL, 'Cannot autowire service ".service_locator.8CvDPsA": it references class "App\\Entity\\Partenaire" but no such service exists.'],
], [
    'manager' => '?',
    'part' => 'App\\Entity\\Partenaire',
]);