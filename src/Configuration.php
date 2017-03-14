<?php
namespace DNDCampaignManagerAPI;

use DNDCampaignManagerAPI\Exceptions\InvalidConfigurationException;
use LunixREST\Configuration\Exceptions\INIParseException;
use LunixREST\Configuration\INIConfiguration;

class Configuration extends INIConfiguration
{
    protected $apiKey;
    protected $dbUser;
    protected $dbPassword;
    protected $dbDatabase;

    protected const NAMESPACE_NAME = "DND-CampaignManager-API";

    /**
     * Configuration constructor.
     * @param string $filename
     * @throws INIParseException
     * @throws InvalidConfigurationException
     */
    public function __construct($filename)
    {
        parent::__construct($filename);

        $this->checkRequiredConfiguration();

        $this->apiKey = $this->get("api_key", self::NAMESPACE_NAME);
        $this->dbUser = $this->get("db_user", self::NAMESPACE_NAME);
        $this->dbPassword = $this->get("db_password", self::NAMESPACE_NAME);
        $this->dbDatabase = $this->get("db_database", self::NAMESPACE_NAME);
    }

    protected function checkRequiredConfiguration()
    {
        $requiredFields = ["api_key", "db_user", "db_password", "db_database"];
        foreach($requiredFields as $requiredField) {
            if(!$this->has($requiredField, self::NAMESPACE_NAME)){
                throw new InvalidConfigurationException("Missing required configuration value: $requiredField");
            }
        }
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getDbUser()
    {
        return $this->dbUser;
    }

    /**
     * @return string
     */
    public function getDbPassword()
    {
        return $this->dbPassword;
    }

    /**
     * @return string
     */
    public function getDbDatabase()
    {
        return $this->dbDatabase;
    }
}
