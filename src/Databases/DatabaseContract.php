<?php namespace BackupManager\Databases;

/**
 * Class Database
 * @package BackupManager\Databases
 */
interface DatabaseContract {

    /**
     * @param $type
     * @return bool
     */
    public function handles($type);

    /**
     * @param array $config
     * @return null
     */
    public function setConfig(array $config);

    /**
     * @param $databaseName
     * @return null
     */
    public function setDatabaseName($databaseName);

    /**
     * @param $inputPath
     * @return string
     */
    public function getDumpCommandLine($inputPath);

    /**
     * @param $outputPath
     * @return string
     */
    public function getRestoreCommandLine($outputPath);
}
