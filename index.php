<?php 
		session_start();
    if(!isset($_SESSION["name"]))

	header("location:login.php"); 
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  
  <title>Blog cá nhân</title>
  <link rel="stylesheet" href="../src/public/style.css">
</head>
<body>
  <div class="app">
    <header>
      <div class="nav">
        <a class="nav__logo" href="">
          <img src="img/HKN.jpg" alt="index.php">
        </a>
        <ul class="nav__menu">
          <li class="nav__menu-items">
            <a class="nav__menu-items-link" href="index.php">Trang chủ</a>
          </li>
          <li class="nav__menu-items">
            <a class="nav__menu-items-link" href="post.php">Bài viết </a>
          </li>
          <li class="nav__menu-items nav__menu-2">
            <a class="nav__menu-items-link" href="index.php">Mẫu </a>
            <svg width="12px" height="6px" viewBox="0 0 12 6" xmlns="http://www.w3.org/2000/svg">
              <polygon fill="#1F303C" points="5 5.7 0 0.7 0.7 0 5 4.4 9.3 0 10 0.7 "></polygon>
          </svg>
        
          </li>
          <li class="nav__menu-items">
            <a class="nav__menu-items-link" href="contact.php">Trợ giúp</a>
          </li>
        </ul>

        <a href=" " class="user">
            <p class="text-end fst-italic "><?php echo $_SESSION['name']; ?></p>
            <a  href="controllers/logout.php"><i class="fa fa-fw fa-power-off "></i>Logout</a>
            
        </a>

      </div>
    </header>
    <div id="root">
      <div class="sidebar">
        <nav>
          <form class="form__search">
            <div class="search">
              <i class="fas fa-search icon__search"></i>
              <input class="input__search" type="text" placeholder="Tìm kiếm ">
            </div>
          </form>
          <ul class="sidebar__menu">
            <li class="sidebar__menu-items">

              <a class="sidebar__menu-items-link" href="templates/template6"><span>MỚI!</span></a>
            </li>
            <li class="sidebar__menu-items">
              <a class="sidebar__menu-items-link" href="templates/template1"><span>Phổ biến nhất</span></a>
            </li>
            <li class="sidebar__menu-items">
              <a class="sidebar__menu-items-link" href="templates/template1"><span>Mẫu màu xanh </span></a>
            </li>
          </ul>
          <div class="bar__title md">Danh mục</div>
          <ul class="sidebar__menu">
            <li class="sidebar__menu-items">
              <a class="sidebar__menu-items-link" href=""><span>Xem tất cả mẫu</span></a>
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Mẫu màu cam </span></a>
              </div>
              <ul class="bar__menuChild">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="templates/template1">
                    <span>Mẫu màu xanh </span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="templates/template3">
                    <span>Mẫu màu tím </span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="templates/template4">
                    <span>Mẫu màu lam </span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg class="icon__active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Phổ biến nhất</span></a>
              </div>
              <ul class="bar__menuChild bar__menuChild-active">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="templates/template1">
                    <span>Mẫu nền xanh lá </span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="templates/template3">
                    <span>Mẫu nền màu tím </span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="templates/template4">
                    <span>Mẫu nền xanh dương </span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="templates/template5">
                    <span>Mẫu nền pink </span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="templates/template6">
                    <span>Mẫu nền drank  </span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      <div class="main">
        <div class="grid">
          <div class="wide">
            <h1 data-hook="title" class="_1F0Ne">Chọn mẫu trang web Blog cá nhân <br>
              mà bạn yêu thích</h1>
            <div class="row">
              <div class="col l-4 c-4 m-1">
                <a href="templates/template1">
                  <div class="content">
                    <img src="../src/img/template_green.png" width="330px" height="250px"  alt="">
                    
                  </div>
                </a>
              </div>
              <div class="col l-4 c-4 m-1">
                <a href="templates/template2">
                  <div class="content">

                    <img src="../src/img/template_orange.png" width="330px" height="250px" alt="">
                  </div>
                </a>
              </div>
              <div class="col l-4 c-4 m-1">
                <a href="templates/template3">
                  <div class="content">
                     <img src="../src/img/template_purple.png" width="330px" height="250px" alt="">
                  </div>
                </a>
              </div>
              <div class="col l-4 c-4 m-1">
                <a href="templates/template4">
                  <div class="content">
                    <img src="../src/img/template_blue.png" width="330px" height="250px" alt="">
                  </div>
                </a>
              </div>
              <div class="col l-4 c-4 m-1">
                <a href="templates/template5">
                  <div class="content">
                    <img src="../src/img/Untitled.png" alt="template5">
                  </div>
                </a>
              </div>
              <div class="col l-4 c-4 m-1">
                <a href="templates/template6">
                  <div class="content">
                    <img src="../src/img/Untitled.png" alt="template6">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="text-center section">
            <div class="bg-drank align-center grey-text my-4">&copy; bài tập lớn- Kiều - Hoàng - Ngọc - ĐẠI HỌC THỦY LỢI - 175 TÂY SƠN ĐỐNG ĐA HÀ NỘI
            </div>
    </footer>
  </div>
  <script src="../src/public/active.js"></script>

</body>
</html>