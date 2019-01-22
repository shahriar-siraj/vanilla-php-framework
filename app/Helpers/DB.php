<?php

namespace App\Helpers;

use PDO;

class DB
{
    private static $host = DB_HOST;
    private static $db_name = DB_NAME;
    private static $username = DB_USER;
    private static $password = DB_PASSWORD;

    private static $statement;
    private static $params;
    private static $conn;
 
    /**
     * Establish Database Connection
     *
     * @return mixed
     */
    public static function getConnection()
    {
        $conn = null;
 
        try {
            $conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec("set names utf8");
        } catch(\PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
        
        self::$conn = $conn;
        return $conn;
    }
    
    /**
     * Set SQL query
     *
     * @param string $sql
     * @param mixed $data
     * @return self
     */
    public static function query($sql, $data = null)
    {
        // Get Connection
        $db = self::getConnection();
    
        // Prepare query statement
        $stmt = $db->prepare($sql);
    
        $params = array();

        if ($data) {
            // Sanitize
            foreach ($data as $key => $value) {
                if ($value) {
                    $params[$key] = htmlspecialchars(strip_tags($value));
                }
            }
        }

        self::$statement = $stmt;
        self::$params = $params;

        return new static();
    }

    /**
     * Run the SQL query
     *
     * @return mixed
     */
    public static function run()
    {
        try {
            return self::$statement->execute(self::$params);
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }

    /**
     * Run the SQL query and 
     * get all the result
     *
     * @return array
     */
    public static function get()
    {
        // Execute query
        self::$statement->execute(self::$params);
        $total = self::$statement->rowCount();
    
        // Check if more than 0 record found
        $result = array();
        
        if ($total > 0) {
            while ($row = self::$statement->fetch(PDO::FETCH_ASSOC)) {
                array_push($result, (object) $row);
            }
        }
        return $result;
    }

    /**
     * Run the SQL query and 
     * get the first result
     *
     * @return object
     */
    public static function first()
    {
        // Execute query
        self::$statement->execute(self::$params);
        $total = self::$statement->rowCount();
    
        // Check if more than 0 record found
        $result = array();
        
        if ($total > 0) {
            while ($row = self::$statement->fetch(PDO::FETCH_ASSOC)) {
                array_push($result, (object) $row);
            }
            return $result[0];
        } else {
            return null;
        }
    }

    /**
     * Get last inserted ID
     *
     * @return int
     */
    public static function insertedId()
    {
        // Get Connection
        $db = self::$conn;

        return (int) $db->lastInsertId();
    }
}

?>