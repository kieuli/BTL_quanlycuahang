<?php
    
    session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email      =       $_POST["email"];
    $password   =       $_POST["password"];
    
    // QUY TRÌNH 4 bước:
    // Bước 01:
    include('../config/Config.php');


    // Bước 02: Xử lý truy vấn
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con,$sql);
    $password2  =   md5($password);
    if(mysqli_num_rows($result) > 0){
        // Lấy mật khẩu ra
        $row=mysqli_fetch_assoc($result);
        $pass_hash = $row['password'];
        $activated = $row['activated'];
		$permission = $row['permission'];
		$name 		= $row['name'];
        $templates = $row['templates'];
        if($activated ==1){
        
            if( md5($password) == $pass_hash ){
                $_SESSION["account"] = $email;
                $_SESSION["name"] = $name;
				$_SESSION['id'] = $row['id'];
                $_SESSION['level'] = $row['permission'];
                $_SESSION['template'] = $row['templates'];

                if($_SESSION['level'] == 1) {
                    echo "<meta http-equiv='refresh' content='0;url=../admin/index.php'>";
                } elseif($_SESSION['level'] == 0) 
                {
                    if($_SESSION['template'] == 0){
                        echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
                    }elseif($_SESSION['template'] == 1){
                        echo "<meta http-equiv='refresh' content='0;url=../templates/template1/'>";
                    }elseif($_SESSION['template'] == 2){
                        echo "<meta http-equiv='refresh' content='0;url=../templates/template2/'>";
                    }elseif($_SESSION['template'] == 3){
                        echo "<meta http-equiv='refresh' content='0;url=../templates/template3/'>";
                    }elseif($_SESSION['template'] == 4){
                        echo "<meta http-equiv='refresh' content='0;url=../templates/template4/'>";
                    }
                }
            
            }else{
                echo "Kiểm tra lại Mật khẩu";
            }
            }else{
                echo "Tài khoản của bạn chưa được kích hoạt. Vui lòng đăng nhập gmail để kích hoạt tài khoản !";
            }
    }else{
        echo "Email không tồn tại";
    }
}


?>
