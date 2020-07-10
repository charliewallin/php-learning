<?php
/**
 * Template that accepts PDO database connection values 
 * 
 * @param array $config called from bootstrap. It calls the config.php file. 
 *    config.php contains the array of database connection values
 */
class Connection 
{
    public static function make($config) 
    {
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}