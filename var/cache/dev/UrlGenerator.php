<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'new_compte' => [['id'], ['_controller' => 'App\\Controller\\AdminController::addCompte'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/compte']], [], []],
    'app_user_admin_create' => [[], ['_controller' => 'App\\Controller\\AdminController::addUser'], [], [['text', '/api/adduser']], [], []],
    'depot' => [['id'], ['_controller' => 'App\\Controller\\AdminController::depot'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/depot']], [], []],
    'app_part_modif' => [['id'], ['_controller' => 'App\\Controller\\AdminController::editpart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/statut']], [], []],
    'compte_index' => [[], ['_controller' => 'App\\Controller\\CompteController::index'], [], [['text', '/compte/']], [], []],
    'compte_new' => [[], ['_controller' => 'App\\Controller\\CompteController::new'], [], [['text', '/compte/new']], [], []],
    'compte_show' => [['id'], ['_controller' => 'App\\Controller\\CompteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte']], [], []],
    'compte_edit' => [['id'], ['_controller' => 'App\\Controller\\CompteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/compte']], [], []],
    'compte_delete' => [['id'], ['_controller' => 'App\\Controller\\CompteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte']], [], []],
    'app_inscrit_create' => [[], ['_controller' => 'App\\Controller\\SecurityController::inscrit'], [], [['text', '/api/inscrit']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/api/login_check']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/api/logout']], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/api/contexts']], [], []],
    'api_login_check' => [[], [], [], [['text', '/api/login_check']], [], []],
];
