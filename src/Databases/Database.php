<?php namespace BackupManager\Databases;

/**
 * Class Database
 * @package BackupManager\Databases
 */
abstract class Database implements DatabaseContract {

    /** @var array */
    protected $config;

    /**
     * @return array
     */
    public function getConfig() {
        return $this->config;
    }

    /**
     * @param array $config
     * @return null
     */
    public function setConfig(array $config) {
        $this->config = $config;
    }

    /**
     * @param $databaseName
     * @return null
     */
    public function setDatabaseName($databaseName) {
        if (! is_null($databaseName)) {
            $this->config['database'] = $databaseName;
        }
    }
}
