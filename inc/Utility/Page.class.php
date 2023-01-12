<?php

class Page  {

    public static $title = "PHP PDO: User Authentication by Kaisen";

    static function header() { ?>

        <!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <title><?php echo self::$title; ?></title>
            <!-- <meta http-equiv="refresh" content="3"> -->

        </head>
        <body>
        <div class="container">
            <h1><?php echo self::$title; ?></h1>

           
    <?php }

    static function footer()    { ?>
        </div>
            <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                </body>
            </html>
    <?php }

    static function showUserDetails(User $u) { ?>
    <table>
        <tr>
            <td>User Name: <?php echo $u->getUsername(); ?></td>
            <td></td>
        </tr>
        <tr>
            <td>First Name: <?php echo $u->getFirst_name(); ?></td>
            <td>Last Name:  <?php echo $u->getLast_name(); ?></td>
        </tr>
        <tr>
            <td>Email Address: <?php echo $u->getEmail(); ?></td>
            <td>Phone Number:  <?php echo $u->getPhone(); ?></td>
        </tr>
        <tr>
            <td>Age: <?php echo $u->getAge(); ?></td>
            <td>Gender:  <?php echo $u->getGender(); ?></td>
        </tr>
    </table>
    <form ACTION="Lab09KWu_41264-logout.php">
        <input type="submit" name="btnLogout" value="Logout">
    </form>

    <?php }

    static function showLogin() { ?>
    <h2>Please sign in</h2>
    <form method="POST" ACTION="Lab09KWu_41264-login.php">
        <input type="text" placeholder="User Name" name="txtUserName"><br>
        <input type="text" placeholder="Password" name="txtPassword"><br>
        <input type="submit" name="btnLogin" value="Log in"> 
    </form>
    <?php }

    static function thankyou() {
        
        echo "Thanks for your visiting!";

    }

}