<?php


trait DB
{
    public static function connect()
    {
        $connection = new PDO('mysql:host=localhost;dbname=website_crm', 'root', '##chandy');
        return $connection;
    }
}