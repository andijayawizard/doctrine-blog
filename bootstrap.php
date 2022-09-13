<?php
require_once "vendor/autoload.php";

// Setup Doctrine
$configuration = Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
    $paths = [__DIR__ . '/entities'],
    $isDevMode = true
);
// $cache = \Doctrine\Common\Cache\Psr6\DoctrineProvider::wrap($anyPsr6Implementation);
// $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, $proxyDir, $cache);

// Setup connection parameters
$connection_parameters = [
    'dbname' => 'doctrine_blog',
    'user' => 'root',
    'password' => '!@#123QWEasdzxc',
    'host' => 'localhost',
    'driver' => 'pdo_mysql'
];

// Get the entity manager
$entity_manager = Doctrine\ORM\EntityManager::create($connection_parameters, $configuration);
