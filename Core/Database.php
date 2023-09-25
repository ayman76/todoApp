<?php

namespace Core;

use PDO;

//This class is responsible on create the connection of database and execute queries
class Database
{
    public $connection;
    public $statement;

    //Constructor to start the connection
    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }


    //prepare and execute the query
    public function query($query, $parameters = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($parameters);
        return $this;
    }

    //Get the response from database (many rows)
    public function get()
    {
        return $this->statement->fetchAll();
    }

    //Get Specific response from database (just one row)
    public function find()
    {
        return $this->statement->fetch();
    }

    //get response if something wrong happens it will abort to error page
    public function findOrFail()
    {
        $result = $this->statement->fetch();
        if (!$result) {
            abort();
        }

        return $result;
    }
}