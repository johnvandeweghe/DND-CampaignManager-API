<?php
namespace DNDCampaignManagerAPI;

use Doctrine\Common\Persistence\AbstractManagerRegistry;
use Doctrine\ORM\ORMException;

class ArrayManagerRepository extends AbstractManagerRegistry
{
    protected $container;

    /**
     * ArrayManagerRepository constructor.
     * @param string $name
     * @param array $connections
     * @param array $managers
     * @param string $defaultConnection
     * @param string $defaultManager
     */
    public function __construct(
        $name,
        array $connections,
        array $managers,
        $defaultConnection,
        $defaultManager
    ) {
        $i = 0;
        foreach($connections as $name => $connection) {
            $this->container[$i] = $connection;
            $connections[$name] = $i;
            $i++;
        }
        foreach($managers as $name => $manager) {
            $this->container[$i] = $manager;
            $managers[$name] = $i;
            $i++;
        }

        parent::__construct($name, $connections, $managers, $defaultConnection, $defaultManager, null);
    }

    protected function getService($name)
    {
        return $this->container[$name];
    }
    protected function resetService($name)
    {
        $this->container[$name] = null;
    }

    public function getAliasNamespace($alias)
    {
        foreach (array_keys($this->getManagers()) as $name) {
            try {
                return $this->getManager($name)->getConfiguration()->getEntityNamespace($alias);
            } catch (ORMException $e) {
            }
        }
        throw ORMException::unknownEntityNamespace($alias);
    }
}
