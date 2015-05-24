<?php
$page_title = 'Write';
include ('templates/header.php');

?>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-9">
                <form action="connect.php" method="post">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Write title">
                    </div>
                    <div class="form-group">
                        <label for="post">Post</label>
                        <textarea name="post" rows="10" cols="50" class="form-control" id="post" placeholder="Write something"> </textarea>
                    </div>

                    <button type="submit" id="post" class="btn btn-default">Post</button>
                </form>


            </div>


        </div>
        <hr>




<?php
include ('templates/footer.php');
?>