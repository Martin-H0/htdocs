<?php

class DBC
{
    const SERVER_IP = "localhost";
    const USER = "root";
    const PASSWORD = "student";
    const DATABASE = "LoginTest";

    private static $connection = null;

    public static function getConnection()
    {
        if (!self::$connection) {
            self::$connection = mysqli_connect(
                self::SERVER_IP,
                self::USER,
                self::PASSWORD,
                self::DATABASE
            );
            if (!self::$connection) {
                die('Could not connect to DB');
            }
        }
        return self::$connection;
    }

    public static function closeConnection()
    {
        if (self::$connection) {
            mysqli_close(self::$connection);
        }
    }
}
