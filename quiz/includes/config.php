 <?php  
    session_start();
    $host="localhost";
    $user="root";
    $pass="";
    $dbname = "test_db";
     $conn = mysql_connect($host,$user,$pass);
    if($conn){
        mysql_select_db($dbname);
    }  

?>