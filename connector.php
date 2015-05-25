<?php
/**
 * Created by PhpStorm.
 * User: Zapp-PC
 * Date: 5/25/2015
 * Time: 6:19 PM
 */

// Global variables
DEFINE('DB_USER', 'andi');
DEFINE('DB_PASSWORD', 'password');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'microblog');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to
MySQL: ' . mysqli_connect_error() );
