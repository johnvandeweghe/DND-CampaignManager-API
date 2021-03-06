<?php
namespace DNDCampaignManagerAPI\ManagerRegistry;

use DNDCampaignManagerAPI\Configuration\Configuration;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use LunixRESTBasics\ManagerRegistry\ArrayManagerRegistry;

class ConfigurationManagerRegistry extends ArrayManagerRegistry
{

    public function __construct(Configuration $configuration)
    {
        $entityManager = $this->buildEntityManager($configuration);

        parent::__construct("default", [
            "default" => $entityManager->getConnection()
        ], [
            "default" => $entityManager
        ], "default", "default");
    }

    protected function buildEntityManager(Configuration $configuration)
    {
        $paths = ["src/Entities/"];

        // the connection configuration
        $dbParams = array(
            'driver'   => 'pdo_mysql',
            'user'     => $configuration->getDbUser(),
            'password' => $configuration->getDbPassword(),
            'dbname'   => $configuration->getDbDatabase(),
        );

        $config = Setup::createAnnotationMetadataConfiguration($paths, false, null, null, false);

        $em = EntityManager::create($dbParams, $config);
        $platform = $em->getConnection()->getDatabasePlatform();
        $platform->registerDoctrineTypeMapping('enum', 'string');

        return $em;
    }
}
