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
  <link rel="stylesheet" href="public/style.css">
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
        <a href="controllers/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
              <a class="sidebar__menu-items-link" href="index.php"><span>MỚI!</span></a>
            </li>
            <li class="sidebar__menu-items">
              <a class="sidebar__menu-items-link" href="index.php"><span>mẫu xanh lá</span></a>
            </li>
            <li class="sidebar__menu-items">
              <a class="sidebar__menu-items-link" href="index.php"><span>Mẫu màu xanh lam </span></a>
            </li>
            <li class="sidebar__menu-items">
              <a class="sidebar__menu-items-link" href="index.php"><span>mẫu cam</span></a>
            </li>
            <li class="sidebar__menu-items">
              <a class="sidebar__menu-items-link" href="index.php"><span>mẫu đỏ</span></a>
            </li>
            <li class="sidebar__menu-items">
              <a class="sidebar__menu-items-link" href="index.php"><span>Mẫu hồng </span></a>
            </li>
          </ul>
        </nav>
      </div><!-- Page Heading -->
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <!-- Contact Us Section -->
    <section class="Material-contact-section section-padding section-dark">
      <div class="container">
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                  <h1 class="section-title">Hãy liên hệ với chúng tôi</h1>
              </div>
          </div>
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                <p>Một thực tế đã được thiết lập từ lâu rằng người đọc sẽ bị phân tâm bởi nội dung có thể đọc được của một trang khi nhìn vào bố cục của nó. Điểm đáng chú ý của việc sử dụng Lorem Ipsum là nó có sự phân phối các chữ cái bình thường ít nhiều, trái ngược với việc sử dụng Nội dung.</p>

                <div class="find-widget">
                 công ty:  <a href="https://www.facebook.com/kieu.li.1656/">H-K-N</a>
                </div>
                <div class="find-widget">
                 Địa chỉ: <a href="https://www.facebook.com/kieu.li.1656/">175 tây sơn- đống đa- hà nội</a>
                </div>
                <div class="find-widget">
                Điện thoại:  <a href="https://www.facebook.com/kieu.li.1656/">+ 8486 6797 508</a>
                </div>
                
                <div class="find-widget">
                  Website:  <a href="https://www.facebook.com/kieu.li.1656/">https://www.facebook.com/kieu.li.1656/</a>
                </div>
                <div class="find-widget">
                   thời gian: <a href="#">t2-t6: 09:30 - 10.30</a>
                </div>
              </div>
              <!-- contact form -->
              <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                  <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                      <!-- Name -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- email -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Subject -->
                      <div class="form-group label-floating">
                        <label class="control-label">Subject</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Message -->
                      <div class="form-group label-floating">
                          <label for="message" class="control-label">Message</label>
                          <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
                      <!-- Form Submit -->
                      <div class="form-submit mt-5">
                          <button class="btn btn-common" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                          <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </section>
    </div>
    <footer class="text-center section">
            <div class="align-center grey-text my-4">&copy;  bài tập lớn- kiều -Hoàng - ngọc-ĐẠI HỌC THỦY LỢI-175 TÂY SƠN ĐỐNG ĐA HÀ NỘI</div>
    </footer>
  </div>
  <script src="public/active.js"></script>
</body>
</html>
<!-- /.row -->