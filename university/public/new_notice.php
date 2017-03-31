<?php include("../include/layout/header.php") ?>
<?php include("../include/db_connection.php") ?>
 <h2>Create new notice</h2>
            <form action="notice.php" method="post">
                <p>Subject Name:
                    <input type="text" name="notice_text" value="" />
                </p>
               
                <input type="submit" name="submit" value="Create Subject" />
            </form>
 <?php include("../include/layout/footer.php") ?>