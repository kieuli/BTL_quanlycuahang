<?php 
if(isset($_GET['varkey'])){
    $varkey   = $_GET['varkey'];

    include("../config/Config.php");
    
    $resultSet = $con ->query("SELECT activated,varkey FROM users WHERE activated = 0 AND varkey = '$varkey' ");
    if($resultSet -> num_rows == 1){
        $updates = $con->query("UPDATE users SET activated = 1  WHERE varkey = '$varkey'");
        if($updates){
            $value='successfully';
            header("Location:../login.php?reply=$value");
        }else{
            echo "Kích hoạt thất bại";
        }
    }else{
        echo "Kích hoạt thất bại";
    }
}else{
    die("Không thể kết nối");
}

?>