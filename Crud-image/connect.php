 <?php
define('host', 'localhost:3306');
define('user', 'root');
define('pass', '');
define('db_name', 'papa');
define('DEBUG', false);

try{
    mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);
    $conn=mysqli_connect(host,user,pass,db_name);
    if($conn){
        if(DEBUG==true){
            echo 'Connection Successfully';
        }

    }else{
        throw new mysqli_sql_exception();
    }

}catch(mysqli_sql_exception $e){
    echo 'Error Connection ';
    echo $e->getMessage();
    exit();

}







?>