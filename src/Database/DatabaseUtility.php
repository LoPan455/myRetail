<?php
/**
 * Created by PhpStorm.
 * User: lopan
 * Date: 9/3/18
 * Time: 2:54 PM
 */

namespace MyRetail\Database;

use MongoDB\Client;


class DatabaseUtility
{
    /**
     * @var
     */
    private static $instance;

    /**
     *
     */
    private $connection;

    /**
     * @var
     */
    private $dbUrl = 'myretail_database_1';

    /**
     * @var
     */
    private $dbPassowrd = 'password2841';

    /**
     * @var
     */
    private $dbUser = 'root';

    /**
     * DatabaseUtility constructor.
     */
    private function __construct()
    {
        $this->connection = new Client("mongodb://{$this->dbUser}:{$this->dbPassowrd}@{$this->dbUrl}");
    }

    /**
     * @return DatabaseUtility
     */
    public static function getDbInstance()
    {
        if (!self::$instance) {
            self::$instance = new DatabaseUtility;
        }

        return self::$instance;

    }

    /**
     * @return Client
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @return \MongoDB\Model\DatabaseInfoIterator
     */
    public function listDatabases()
    {
        return $this->connection->listDatabases();
    }

    public function listCollections()
    {

    }
}