<?php
	
	class AddBlog extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$name = $_POST["name"];
					$description = $_POST["description"];
					$content = $_POST["content"];
					$metaTitle = RemoveString($name);
					$dateTime = date("d/m/Y");
					$catalog = $_POST["catalog"];
					$token = new Token();
					$strToken = $token->generate(10);
					$id = '';	
					if($_FILES["image"]["name"]){
						$image = "public/images/".time().$_FILES["image"]["name"];
						move_uploaded_file($_FILES["image"]["tmp_name"], "../public/images/".time().$_FILES["image"]["name"]);
					}

					$con = mysqli_connect("localhost","root","","btl") or die("Can not connect to MySQL");
					mysqli_set_charset($con,"UTF8");

					$sql = "INSERT INTO `menu_list_blog`(`id`,`images`, `name`, `metaTitle`, `catalog`, `description`, `content`, `token`, `dateTime`) VALUES('$id','$image','$name', '$metaTitle', $catalog, '$description', '$content', '$strToken', '$dateTime')";
					// print_r($sql).die("Ok");
					mysqli_query($con,$sql);

					//$this->Model->execute("insert into menu_list_blog(avatar, name, metaTitle, catalog, description, content, token, dateTime) values('$image','$name', '$metaTitle', $catalog, '$description', '$content', '$strToken', '$dateTime','$id')");

					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=blog/list'>";
					break;
			}
								
			include "views/blog/addView.php";
		}
	}
	new AddBlog();

?>