<?php

namespace App\Models;

use App\Helpers\DB;

class User
{
    /**
     * Table Name
     *
     * @var string
     */
    private static $table_name = "users";

    /**
     * Get single user
     *
     * @param int $id
     * @return mixed
     */
    public static function find($id)
    {
        $sql = "select * from " . self::$table_name . " where id = " . $id;

        $user = DB::query($sql)->first();

        return $user;
    }

    /**
     * Get all users
     *
     * @return mixed
     */
    public static function getAll()
    {
        $sql = "select * from " . self::$table_name;

        $users = DB::query($sql)->get();

        return $users;
    }
    
    /**
     * Get last user
     *
     * @return mixed
     */
    public static function last()
    {
        $sql = "select * from " . self::$table_name . " order by id desc";

        $users = DB::query($sql)->first();

        return $users;
    }

    /**
     * Create a user
     *
     * @param object $data
     * @return mixed
     */
    public static function create($data)
    {
        $sql = "insert into " . self::$table_name . " set first_name=:first_name, last_name=:last_name, email=:email, age=:age, country=:country, created_at=NOW(), updated_at=NOW()";

        return DB::query($sql, $data)->run();
    }

    /**
     * Get last inserted user ID
     *
     * @return int
     */
    public static function insertedId()
    {
        return DB::insertedId();
    }
}