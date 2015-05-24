<?php
/**
 * Created by PhpStorm.
 * User: Zapp-PC
 * Date: 5/21/2015
 * Time: 12:31 AM
 */

 // Global variables

DEFINE('DB_USER', 'andi');
DEFINE('DB_PASSWORD', 'password');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'microblog');



$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to
MySQL: ' . mysqli_connect_error() );

// getting data from form


$title = trim($_POST['title']);

$post  = $_POST['post'];

$title  = mysqli_real_escape_string($dbc, $title);
$post  = mysqli_real_escape_string($dbc, $post);
//Sanitizing the input


// The sql query


$query = "INSERT INTO `post` (`id`, `title`, `article` ) VALUES (NULL, '$title', '$post')";

$r = mysqli_query($dbc, $query); // running the query

if ($r) {
    echo "<h2>Post successful</h2>";
} else {
    echo "<h3> Could not post.</h3>";
    echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $query . '</p>';

}
header("Location: write.php ");
mysqli_close($dbc);

?>