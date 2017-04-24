<?php namespace BackupManager\Databases;

/**
 * Class PostgresqlDatabase
 * @package BackupManager\Databases
 */
class PostgresqlDatabase extends Database {

    /**
     * @param $type
     * @return bool
     */
    public function handles($type) {
        return in_array(strtolower($type), ['postgresql', 'pgsql']);
    }

    /**
     * @param $outputPath
     * @return string
     */
    public function getDumpCommandLine($outputPath) {
        return sprintf('PGPASSWORD=%s pg_dump --clean --host=%s --port=%s --username=%s %s -f %s',
            escapeshellarg($this->config['pass']),
            escapeshellarg($this->config['host']),
            escapeshellarg($this->config['port']),
            escapeshellarg($this->config['user']),
            escapeshellarg($this->config['database']),
            escapeshellarg($outputPath)
        );
    }

    /**
     * @param $inputPath
     * @return string
     */
    public function getRestoreCommandLine($inputPath) {
        return sprintf('PGPASSWORD=%s psql --host=%s --port=%s --user=%s %s -f %s',
            escapeshellarg($this->config['pass']),
            escapeshellarg($this->config['host']),
            escapeshellarg($this->config['port']),
            escapeshellarg($this->config['user']),
            escapeshellarg($this->config['database']),
            escapeshellarg($inputPath)
        );
    }
}
