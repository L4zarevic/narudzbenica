    <?php
    function OpenCon()
    {
        $dbhost = 'localhost';
        $dbuser = 'mojaopt_moptic';
        $dbpass = 'mP9!1&plTK$sE%aB8DdM';
        $db = 'mojaopt_narudzbenica';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

        if (!$conn) {
            die(header("Location:login.php?msg=2"));
            exit;
        }

        return $conn;
    }

    function CloseCon($conn)
    {
        $conn->close();
    }

    ?>