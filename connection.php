    <?php
    function OpenCon()
     {
     $dbhost = 'localhost';
     $dbuser = 'mojaopt_moptic';
     $dbpass = 'mP9!1&plTK$sE%aB8DdM';
     $db = 'mojaopt_narudzbenica';
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     
     return $conn;
     }
     
    function CloseCon($conn)
     {
     $conn -> close();
     }
       
    ?>