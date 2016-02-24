<?php
session_start();
$servername = "localhost";
$username = "dealldsx_dealers";
$password = "Qq03049835";
$dbname = "dealldsx_dealers";
include './local_connection.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
$sql = "SELECT * FROM users WHERE id = '" . $_SESSION['user_id'] . "'";
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
    <title>Contact Share Seller Deal</title>
    <?php
    include('Header.php');
    ?>

    <script>
        $(function () {
            $("#tabs").tabs();
        });
    </script>





    <div id="main" class="site-main">

        <div class="container active-sidebar">
            <div id="primary" class="content-area">
                <div id="user-profile">
                    
                    <center>
                        <header class="page-header">
                            <h1 class="page-title">User Profile</h1>
                        </header>
                        
                        <div class="col-1">
                            <img id="user-profile-image" src="images/car2.jpeg" alt="Profile Picture" height="200" width="200">
                            <br><br>
                            <header class="page-header">
                                <h1 class="page-title">Profile Picture</h1>
                            </header>
                        </div>

                        <div id="tabs" class="col-2">
                            <ul>
                                <li><a href="#tabs-1">Bio</a></li>
                                <li><a href="#tabs-2">Ads</a></li>
                            </ul>
                            <div id="tabs-1">
                                <header class="page-header">
                                    <h1 class="page-title">Full Name:</h1> <?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?>
                                </header>

                                <header class="page-header">
                                    <h1 class="page-title">User ID:</h1> <?php echo $row['id']; ?>
                                </header>

                                <header class="page-header">
                                    <h1 class="page-title">Email:</h1> <?php echo $row['email']; ?>
                                </header>

                                <pre><?php echo $row['details']; ?></pre>
                            </div>
                            <div id="tabs-2">
                                <header class="page-header">
                                    <h1 class="page-title">My Ad(s):</h1>
                                </header>

                                <table>
                                    <?php
                                    $sql = "select * from articles where user_id='" . $_SESSION['user_id'] . "'";
                                    $result = mysqli_query($conn, $sql);
                                    $rowCount = mysqli_num_rows($result);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <tr>
                                            <td>
                                                <a href="delete_ads.php?uid=<?php echo $row['uid'] ?>">Delete</a>
                                            </td>

                                            <td>
                                                <?php echo $row['title'] ?>
                                            </td>


                                        </tr>
                                        <?php
                                    }
                                    ?>


                                    Delete my ad.

                                    Ad id:
                                    <br><br><br>
                                </table>
                            </div>
                        </div>

                    </center>
                </div>





            </div><!-- #post -->
        </div><!-- #content -->
    </div><!-- #primary -->


    <?php
    include('Footer.php');

// should the html code before this php be deleted?
    ?>

</body>
</html>