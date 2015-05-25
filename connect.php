<?php
/**
 * Created by PhpStorm.
 * User: Zapp-PC
 * Date: 5/21/2015
 * Time: 12:31 AM
 */

$title = null;
//$post = null;
//$errors = array();

// getting data from form
 if(empty(trim($_POST['title']))) {
    $errors[] = 'title empty';
 }
else {
    $title= mysql_real_escape_string(stripslashes(trim($_POST['title'])));

}

if(empty(trim($_POST['post']))) {
    $errors[] = 'post empty';
} else
{
    $post = mysql_real_escape_string(stripslashes(trim($_POST['post'])));
}



if (empty($errors)) {

require('connector.php');
    $query = "INSERT INTO `post` (`id`, `title`, `article` ) VALUES (NULL, '$title', '$post')";
    $r = @mysqli_query($dbc, $query); // running the query

    if ($r) {
        echo "<h2>Post successful</h2>";
    } else {
        echo "<h3> Could not post.</h3>";
        echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $query . '</p>';
    }
    mysqli_close($dbc);
    exit( );

} else {

    echo '<h1>Error!</h1>
    <p class="error">The following error(s) occurred:<br />';
        foreach ($errors as $msg) { // Print each error.
            echo " - $msg<br />\n";}
    echo '</p><p>Please try again.</p><p><br /></p>';


}











//header("Location: write.php ");

?>