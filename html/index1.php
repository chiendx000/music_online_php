<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nhúng bootstrap 4</title>
    <meta charset="utf-8">
    <!-- Bản css đã nén của bootstrap 4, nên đặt trong cặp thẻ head -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/layout.css">
    <link rel="shortcut icon" type="image/png" href="#"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="headers">
   <div class="menu">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../images/logozing.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">    
          <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Thể Loại
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Trữ Tình</a>
              <a class="dropdown-item" href="#">Pop</a>
              <!-- <div class="dropdown-divider"></div> -->
              <a class="dropdown-item" href="#">Nhạc Vàng</a>
            </div>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Nghệ Sĩ
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Việt Nam </a>
            <a class="dropdown-item" href="#">Âu Mỹ</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="#">Hàn Quốc</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Bảng xếp Hạng
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Việt Nam</a>
            <a class="dropdown-item" href="#">Âu Mỹ</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="#">Hàn Quốc</a>
          </div>
        </li>
      </ul>
      <form class="navbar-form navbar-center" action="ketquatimkiem.php" method="get">
        <div class="form-group input-group">
          <input type="text" class=" form-control" id="txtsearch" name="keyword" placeholder="Tìm Kiếm...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button" id="searchbutton"   style=" background-color: white; ">
            <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </span>        
        </div>
      </form>
      <?php
         @session_start(); 
         if(isset($_SESSION['username'])){
       ?>
           <ul class="nav navbar-nav navbar-right">
          <li><a href="user.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username'];?></a></li>
          <li><a href="upload.php"><span class="glyphicon glyphicon-upload"></span> Upload</a></li>
          <li><a href="dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      <?php
      }else{
      ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="dangnhap.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
        </ul>
      <?php
      }
      ?>           
    </div>
  </div>
  </nav>
</div><br>
<div class="allcontent">
  <div class="container">
      <div class="row">
    
          <div class="col-12 col-md-8">
        
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="padding-top:15px;">
        
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="item">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/yeuvoivang.jpg" class="d-block w-100" alt="yeuvoivang">
      <div class="carousel-caption d-none d-md-block">
        <h5>Lê Bảo Bình</h5>
        <p>Nếu như ngày xưa chúng ta không vội vàng...</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/yeusainguoi.jpg" class="d-block w-100" alt="yeusainguoi">
      <div class="carousel-caption d-none d-md-block">
        <h5>Khắc Việt</h5>
        <p>Thông minh đến mấy yêu vào cũng ngu.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/suytnuathi.jpg" class="d-block w-100" alt="suytnuathi">
      <div class="carousel-caption d-none d-md-block">
        <h5>Huy Đạt</h5>
        <p>Suýt nữa thì anh có thể muốn nói một lời.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
  </div>
  <div>
   </div><br>
<div class="item-text">
  <h1>BÀI HÁT MỚI</h1>
</div>
<div class="item">
  <div class="content"> 
    <div class="row">
        <div class="col-md-4">
          <a href="anhsairoi.php"><img src="../images/anhsairoi.jpg" class="img-responsive" style="width:100%"  alt="Anh sai rồi-Sơn Tùng MTP">
              <p>Anh sai rồi-Sơn Tùng MTP</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="lalung.php"><img src="../images/thuong.jpg" class="img-responsive" style="width:100%"  alt="Thương-Quốc Thiên">
              <p>Thương-Quốc Thiên</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="buoncuaanh.php"><img src="../images/buoncuaanh.jpg" class="img-responsive" style="width:100%" alt="Buồn của anh-Huy Đạt"> 
            <p>Buồn của anh-Huy Đạt</p>
          </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
          <a href="contraicung.php "><img src="../images/chiconmotdemcuoi.jpg" class="img-responsive" style="width:100%" alt="Nếu chỉ còn một đêm cuối-Tuấn Hưng">
             <p>Nếu chỉ còn một đêm cuối-Tuấn Hưng</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#"><img src="../images/sainguoisaithoidiem.jpg" class="img-responsive" style="width:100%" alt="Sai người sai thời điểm">
             <p>Sai người sai thời điểm</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#"><img src="../images/giupanhtraloinhungcauhoi.jpg" class="img-responsive" style="width:100%"  alt="Giúp anh trả lời những câu hỏi">
             <p>Giúp anh trả lời những câu hỏi</p>
          </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
          <a href="#"><img src="../images/chiacachbinhyen.jpg" class="img-responsive" style="width:100%" alt="Chia cách bình yên-Quốc Thiên">
             <p>Chia cách bình yên-Quốc Thiên</p> 
          </a>
        </div>
        <div class="col-md-4">
          <a href="#"><img src="../images/buonkhongem.jpg" class="img-responsive" style="width:100%"  alt="Buồn không em-Đạt G">
             <p>Buồn không em-Đạt G</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#"><img src="../images/anhyeuem.jpg" class="img-responsive" style="width:100%" alt="Anh yêu em-Khắc Việt">
             <p>Anh yêu em-Khắc Việt</p>
          </a>
        </div>
    </div>
    </DIV>
    
</div>
<div class="item-text">
  <h1>MV HOT</h1>
</div>
<div class="item">
  <div class="content"> 
    <div class="row">
        <div class="col-md-4">
          <a href="#"><img src="../images/chieuhomay.jpg" class="img-thumbnail" style="width:100%" alt="Chiều hôm ấy-Jayki">
            <p>Chiều hôm ấy-Jayki</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#"><img src="../images/doithay.jpg" class="img-thumbnail" style="width:100%"  alt="Đổi thay-Hồ Quang Hiếu">
            <p>Đổi thay-Hồ Quang Hiếu</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#"><img src="../images/dungnhuthoiquen.jpg" class="img-thumbnail" style="width:100%" alt="Đừng như thòi quen-Jayki">
            <p>Đừng như thòi quen-Jayki</p>
          </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
          <a href="#"><img src="../images/emthatlangoc.jpg" class="img-thumbnail" style="width:100%" alt="Em thật là ngốc-Vũ Duy Khánh">
            <p>Em thật là ngốc-Vũ Duy Khánh</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#"><img src="../images/sainguoisaithoidiem.jpg" class="img-mv" style="width:100%" alt="Sai người sai thời điểm">
             <p>Sai người sai thời điểm</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#"><img src="../images/giupanhtraloinhungcauhoi.jpg" class="img-mv" style="width:100%"  alt="Giúp anh trả lời những câu hỏi">
             <p>Giúp anh trả lời những câu hỏi</p>
          </a>
        </div>
    </div>
    </DIV>
    
</div>
</div>

          <div class=" col-12 col-md-4">
            <div class="all-right">
               <div class="item-text-right">
                  <h1>CHỦ ĐỀ HOT</h1>
                </div>
   
             <div class="theme">
             
             <a href="#"><img src="../images/chude1.jpg" class="img-responsive" style="width:100%" alt="EDM">EDM</a>
             <a href="#"><img src="../images/chude2.jpg" class="img-responsive" style="width:100%" alt="CHRISTMAS">CHRISTMAS</a>
             <a href="#"><img src="../images/chude7.jpg" class="img-responsive" style="width:100%" alt="WINTER">WINTER</a>
             <a href="#"><img src="../images/chude4.jpg" class="img-responsive" style="width:100%" alt="MUSIC FOR LOVE">MUSIC FOR LOVE</a>
             <a href="#"><img src="../images/chude5.jpg" class="img-responsive" style="width:100%" alt="RADIO MP3">RADIO MP3</a>
             <a href="#"><img src="../images/chude6.png" class="img-responsive" style="width:100%" alt="NHỮNG BÀI HIT">NHỮNG BÀI HIT</a>     
             </div>            
            </div>
        <div class="charts">
            <div class="item-text-right-next">
              <h1>BẢNG XẾP HẠNG VIỆT NAM</h1>
            </div>
            <div class="the-song">
              <div class="song-content">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Bài Hát</th>
                      <th scope="col">Ca Sĩ</th>
                      <!-- <th scope="col-md-4">Lượt Nghe</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td><a href="#">Anh đang ở đâu đấy anh</a></td>
                      <td><a href="#">Anh Chiến</a> </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td><a href="#">Con trai cưng</a></td>
                      <td><a href="#">Đẹp Troai</a></td>
         
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td><a href="#">Em không thể</a></td>
                      <td><a href="#">Sói Ca</a></td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td><a href="#">Larry</a></td>
                      <td><a href="#">Phấn Đấu</a></td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td><a href="#">Vô tình</a></td>
                      <td><a href="#">Học Giỏi</a></td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td><a href="#">Hongkong1</a></td>
                      <td><a href="#">Nhất Định</a></td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td><a href="#">Suýt nữa thì</a></td>
                      <td><a href="#">Nhiều Tiền</a></td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <td><a href="#">Vài giây phút thôi</a></td>
                      <td><a href="#">Nhiều Gái Theo</a></td>
                    </tr>
                    <tr>
                      <th scope="row">9</th>
                      <td><a href="#">Chạy ngay đi</a></td>
                      <td><a href="#">Từ Đầu Đường</a></td>
                    </tr>
                    <tr>
                      <th scope="row">10</th>
                      <td><a href="#">Người phản bội</a></td>
                      <td><a href="#">Đến Cuối Đường</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>     
        </div>
        <div class="connect">
          <div class="text-connect">
            <p>LIÊN KẾT MẠNG XÃ HỘI</p>
          </div>
       
          <a href="https://www.facebook.com/groups/569578757251092/?multi_permalinks=587695132106121%2C587633968778904%2C587221122153522%2C587592578783043%2C587154282160206&notif_id=1594354352997448&notif_t=group_activity" target="_blank" class="facebook">
         <i class="fa fa-facebook" aria-hidden="true"></i>
         </a>
         <a href="#" target="_blank" class="twitter">
         <i class="fa fa-twitter" aria-hidden="true"></i>
         </a>
         <a href="#" target="_blank" class="whatsapp">
         <i class="fa fa-whatsapp" aria-hidden="true"></i>
         </a>
         <a href="#" target="_blank" class="youtube">
         <i class="fa fa-youtube" aria-hidden="true"></i>
         </a>        
          </div>
        </div>
          </div>
      </div>
  </div>
  <div class="container-full">
   
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="#" target="_blank" >
            <img class="footer-img" src="../images/logozing.png">
          </a>
        </div>
        <div class="col-md-9">
          <div class="text-footer">
          <div class="row">
            <div class="col-md-3">
        <ul>
          <li>Giới Thiệu</li>
          <li>Quảng Cáo</li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul>
          <li>Điều khoản</li>
          <li>Ứng Dụng</li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul>
          <li>Liên Hệ</li>
          <li>Góp Ý</li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul>
          <li>Copyright</li>
          <li>FAQs</li>
        </ul>
      </div>
        
        
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
</div>
</div>
 </div>
 </div>
    </div>

 
    <!-- Thư viện jquery đã nén phục vụ cho bootstrap.min.js  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Thư viện popper đã nén phục vụ cho bootstrap.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <!-- Bản js đã nén của bootstrap 4, đặt dưới cùng trước thẻ đóng body-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>
<!-- 
  
<!DOCTYPE html>
<html lang="en">
<head>
<title>NGHE NHẠC ONLINE</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="shortcut icon" type="image/png" href="#"/>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  audio{
    width:750px;
    height:54px;
  
  } 

  </style>
  
</head>
<body>
  <div class="hedear">
  <div class="container">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
 <img src="../images/logozing.png">
  </a>
  <div class="header">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="navbar-nav mr-auto">
  
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color:#9d9d9d;"><i class="fa fa-home" aria-hidden="true"></i>Home
        <span class="sr-only"></span>
        </a>
      </li>

      
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thể Loại<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">Trữ Tình</a></li>
              <li><a href="#">Pop</a></li>
              <li><a href="#">Vinahouse</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nghệ Sĩ<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">Việt Nam</a></li>
              <li><a href="#">Âu Mỹ</a></li>
              <li><a href="#">Hàn Quốc</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bảng Xếp Hạng<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">Việt Nam</a></li>
              <li><a href="#">Âu Mỹ</a></li>
              <li><a href="#">Hàn Quốc</a></li>
          </ul>
        </li>
    </div>
    <form class="navbar-form navbar-center" action="ketquatimkiem.php" method="get">
      <div class="form-group input-group">
        <input type="text" class=" form-control" id="txtsearch" name="keyword" placeholder="Tìm Kiếm...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button" id="searchbutton"   style=" background-color: white; ">
          <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </span>        
      </div>
      <?php
       @session_start(); 
       if(isset($_SESSION['username'])){
     ?>
         <ul class="nav navbar-nav navbar-right">
        <li><a href="user.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username'];?></a></li>
        <li><a href="upload.php"><span class="glyphicon glyphicon-upload"></span> Upload</a></li>
        <li><a href="dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    <?php
    }else{
    ?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="dangnhap.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
      </ul>
    <?php
    }
    ?>
    </form>
     <!-- <?php
       @session_start(); 
       if(isset($_SESSION['username'])){
     ?>
         <ul class="nav navbar-nav navbar-right">
        <li><a href="user.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username'];?></a></li>
        <li><a href="upload.php"><span class="glyphicon glyphicon-upload"></span> Upload</a></li>
        <li><a href="dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    <?php
    }else{
    ?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="dangnhap.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    <?php
    }
    ?> -->
  <!-- </div>
  </div>
</nav>
  </div>
  </div> -->
<!-- <nav class="navbar navbar-inverse  navbar-fixed-top ">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
      <a class="navbar-brand" href="index1.php"><img src="../images/logozing.png" class="img-responsive" alt="zing"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index1.php"><span class="glyphicon glyphicon-home"> Home</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thể Loại<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">Trữ Tình</a></li>
              <li><a href="#">Pop</a></li>
              <li><a href="#">Vinahouse</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nghệ Sĩ<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">Việt Nam</a></li>
              <li><a href="#">Âu Mỹ</a></li>
              <li><a href="#">Hàn Quốc</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bảng Xếp Hạng<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">Việt Nam</a></li>
              <li><a href="#">Âu Mỹ</a></li>
              <li><a href="#">Hàn Quốc</a></li>
          </ul>
        </li>
      </ul> -->
      <!-- <?php
@session_start(); 
if(isset($_SESSION['username'])){
?>
         <ul class="nav navbar-nav navbar-right">
        <li><a href="user.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username'];?></a></li>
        <li><a href="upload.php"><span class="glyphicon glyphicon-upload"></span> Upload</a></li>
        <li><a href="dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
<?php
}else{
?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="dangnhap.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
<?php
}
?>
   
    </div>
  </div>
</nav> -->
<!-- <div class="container text-center">    
  <div class="row content">
    <div class="col-md-8 text-left">
    
      <div class="well"><div id="myCarousel" class="carousel slide" data-ride="carousel">
  
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        
        </ol>
      
   
        <div class="carousel-inner">
          <div class="item active">
            <a href="#"><img src="../images/yeuvoivang.jpg" alt="yêu vội vàng"></a>
            <div class="carousel-caption">
              <h3>Lê Bảo Bình</h3>
              <p>Nếu như ngày xưa chúng ta không vội vàng...</p>
            </div>
          </div>
      
          <div class="item">
            <a href="#"><img src="../images/yeusainguoi.jpg" alt="yêu sai người"></a>
            <div class="carousel-caption">
              <h3 >Khắc Việt</h3>
              <p>Thông minh đến mấy yêu vào cũng ngu...</p>
            </div>
          </div>
      
          <div class="item">
            <a href="#"><img src="../images/suytnuathi.jpg" alt="suýt nữa thì"></a>
            <div class="carousel-caption">
              <h3>Huy Đạt</h3>
              <p>Suýt nữa thì anh có thể nói muôn vài lời muốn nói...</p>
            </div>
          </div>
        </div>
      
    
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div></div>
     
      <h1 class="text-danger">BÀI HÁT MỚI</h1><br>
      <div class="well"><div class="bg-info"> <div class="container-fluid bg-4 text-center">   
            
            <div class="row">
               <div class="col-md-4"> 
                  <a href="anhsairoi.php"><img src="../images/anhsairoi.jpg" class="img-responsive" style="width:100%"  alt="Anh sai rồi-Sơn Tùng MTP"><p>Anh sai rồi-Sơn Tùng MTP</p></a>
                </div>
              <div class="col-md-4"> 
                <a href="lalung.php"><img src="../images/thuong.jpg" class="img-responsive" style="width:100%"  alt="Thương-Quốc Thiên"><p>Thương-Quốc Thiên</p></a>
              </div>
              <div class="col-md-4"> 
                <a href="contraicung.php "><img src="../images/chiconmotdemcuoi.jpg" class="img-responsive" style="width:100%" alt="Nếu chỉ còn một đêm cuối-Tuấn Hưng"><p>Nếu chỉ còn một đêm cuối-Tuấn Hưng</p></a>
              </div>
              <div class="col-md-4">
                    <a href="#"><img src="../images/sainguoisaithoidiem.jpg" class="img-responsive" style="width:100%" alt="Sai người sai thời điểm"><p>Sai người sai thời điểm</p></a>
              </div>
              <div class="col-md-4"> 
                    <a href="#"><img src="../images/giupanhtraloinhungcauhoi.jpg" class="img-responsive" style="width:100%"  alt="Giúp anh trả lời những câu hỏi"><p>Giúp anh trả lời những câu hỏi</p></a>
              </div>
              <div class="col-md-4"> 
                    <a href="#"><img src="../images/chiacachbinhyen.jpg" class="img-responsive" style="width:100%" alt="Chia cách bình yên-Quốc Thiên"><p>Chia cách bình yên-Quốc Thiên</p></a>
              </div>
              <div class="col-md-4">
                    <a href="buoncuaanh.php"><img src="../images/buoncuaanh.jpg" class="img-responsive" style="width:100%" alt="Buồn của anh-Huy Đạt"><p>Buồn của anh-Huy Đạt</p></a>
              </div>
              <div class="col-md-4"> 
                    <a href="#"><img src="../images/buonkhongem.jpg" class="img-responsive" style="width:100%"  alt="Buồn không em-Đạt G"><p>Buồn không em-Đạt G</p></a>
              </div>
              <div class="col-md-4"> 
                    <a href="#"><img src="../images/anhyeuem.jpg" class="img-responsive" style="width:100%" alt="Anh yêu em-Khắc Việt"><p>Anh yêu em-Khắc Việt</p></a>
              </div>
            </div>
          </div><br></div></div>
       <h1 class="text-danger">MV HOT</h1><br>
       <div class="well"><div class="bg-warning"> <div class="container-fluid bg-4 text-center">    
            
            <div class="row">
            <div class="col-md-4">
                    <a href="#"><img src="../images/chieuhomay.jpg" class="img-thumbnail" style="width:100%" alt="Chiều hôm ấy-Jayki"><p>Chiều hôm ấy-Jayki</p></a>
                </div>
                <div class="col-md-4"> 
                    <a href="#"><img src="../images/doithay.jpg" class="img-thumbnail" style="width:100%"  alt="Đổi thay-Hồ Quang Hiếu"><p>Đổi thay-Hồ Quang Hiếu</p></a>
                </div>
                <div class="col-md-4"> 
                    <a href="#"><img src="../images/dungnhuthoiquen.jpg" class="img-thumbnail" style="width:100%" alt="Đừng như thòi quen-Jayki"><p>Đừng như thòi quen-Jayki</p></a>
                </div>
                <div class="col-md-4">
                    <a href="#"><img src="../images/emthatlangoc.jpg" class="img-thumbnail" style="width:100%" alt="Em thật là ngốc-Vũ Duy Khánh"><p>Em thật là ngốc-Vũ Duy Khánh</p></a>
                </div>
                <div class="col-md-4">
                <a href="#"><img src="../images/thanghekhoc.jpg" class="img-thumbnail" style="width:100%" alt="Thằng hề khóc-Dương 565"><p>Thằng hề khóc-Dương 565</p></a>
              </div>
                <div class="col-md-4"> 
                    <a href="#"><img src="../images/chayngaydi.jpg" class="img-thumbnail" style="width:100%" alt="Chạy ngay đi-Sơn Tùng MTP"><p>Chạy ngay đi-Sơn Tùng MTP</p></a>
                </div>
                
                </div>
              </div><br></div></div> 
    
    </div>
    <div class="col-md-4 sidenav">
      <h1 class="text-danger">CHỦ ĐỀ HOT</h1><br>
      <a href="#"><img src="../images/chude1.jpg" class="img-responsive" style="width:100%" alt="EDM">EDM</a>
      <a href="#"><img src="../images/chude2.jpg" class="img-responsive" style="width:100%" alt="CHRISTMAS">CHRISTMAS</a>
      <a href="#"><img src="../images/chude7.jpg" class="img-responsive" style="width:100%" alt="WINTER">WINTER</a>
      <a href="#"><img src="../images/chude4.jpg" class="img-responsive" style="width:100%" alt="MUSIC FOR LOVE">MUSIC FOR LOVE</a>
      <a href="#"><img src="../images/chude5.jpg" class="img-responsive" style="width:100%" alt="RADIO MP3">RADIO MP3</a>
      <a href="#"><img src="../images/chude6.png" class="img-responsive" style="width:100%" alt="NHỮNG BÀI HIT">NHỮNG BÀI HIT</a>      
      <h1 class="text-danger">BXH VIỆT NAM</h1><br>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Bài Hát</th>
              <th scope="col">Ca sĩ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><a href="#"> Anh đang ở đâu đấy anh</a></td>
              <td><a href="#">Hương Giang Idol</a></td>           
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><a href="#"> Con trai cưng</a></td>
              <td><a href="#">Bray</a></td>
                    
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><a href="#">Em không thể</a></td>
              <td><a href="#">Tiên Tiên</a></td>
             
            </tr>
            <tr>
              <th scope="row">4</th>
              <td><a href="#">Vô tình</a></td>
              <td><a href="#">Xesi</a></td>
              
            </tr>
            <tr>
              <th scope="row">5</th>
              <td><a href="#">Hongkong1</a></td>
              <td><a href="#">Trọng Tài</a></td>
             
            </tr>
            <tr>
              <th scope="row">6</th>
              <td><a href="#"> Suýt Nữa Thì</a></td>
              <td><a href="#">Hương Giang Idol</a></td>
              
            </tr>
            <tr>
              <th scope="row">7</th>
              <td><a href="#"> Một Phút</a></td>
              <td><a href="#">Bray</a></td>
              
            </tr>
            <tr>
              <th scope="row">8</th>
              <td><a href="#">Vài Giây Nữa Thôi</a></td>
              <td><a href="#">Tiên Tiên</a></td>
             
            </tr>
            <tr>
              <th scope="row">9</th>
              <td><a href="#">Chạy Ngay Đi</a></td>
              <td><a href="#">Xesi</a></td>
              
            </tr>
            <tr>
              <th scope="row">10</th>
              <td><a href="#">Người Phản Bội</a></td>
              <td><a href="#">Trọng Tài</a></td>
             
            </tr>
          </tbody>
        </table>
    </div>
  </div>
</div>

<footer >
  <div class="container">
<div class="col-md-4 text-left">
  <img src="../images/logozing.png" >
  </div>
  <div class="col-md-8 text-left">
    <div class="col-md-3">
    <tr>
    <td><a href="#">Giới Thiệu</td><br>
    <td><a href="#">Úng Dụng</td>
  </tr>
    </div>
    <div class="col-md-3">
    <tr>
    <td><a href="#">Điều Khoản</td><br> 
    <td><a href="#">Góp Ý</td>
  </tr>
    </div>
    <div class="col-md-3">
    <tr>
    <td><a href="#">liên Hệ</td><br>
    <td><a href="#">Copyright</td>

  </tr>
    </div>
    <div class="col-md-3">
    <tr>
    <td><a href="#">Quảng cáo</td><br>
    <a href="#">FAQs</td>
  </tr>
    </div>
  
</div>
  </div>
</div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="./js/bootstrap.min.js"></script>  
</body>
</html> -->
