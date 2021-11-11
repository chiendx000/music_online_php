

<!DOCTYPE html>
<html lang="en">
<head>
  <title>NGHE NHẠC ONLINE</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/layout.css">
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
<nav class="navbar navbar-inverse  navbar-fixed-top ">
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
      </ul>

<?php
session_start();
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
      <form class="navbar-form navbar-center" >
        <div class="form-group input-group">
          <input type="text" class=" form-control" id="txtsearch" name="keyword" placeholder="Tìm Kiếm...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button" id="searchbutton">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
       </form>
    </div>
  </div>
</nav>
<?php
         
     
         require('connect.php');
         
          $sql="SELECT * FROM baihat WHERE tenbaihat= 'Buồn Của Anh' ";
          $query=mysqli_query($con,$sql);
          $row=mysqli_fetch_array($query);
          
        ?>
        
<div class="container text-center">    
  <div class="row content">
    <div class="col-sm-8 text-left">
    <div >
    <a href="#"><img src="../images/nennhac3.gif" style="width:750px;  height:150px;" id="nennhac" alt="gif sóng âm"></a>
    <audio   loop controls  autoplay>
        <source src="<?php echo $row['duongdan'];?>" type="audio/mpeg">
    </audio>
     
 </div>
     
      <div class="well">
      <h3 class="text-danger">Ca Khúc :<a href="anhsairoiindex.php"><?php echo $row['tenbaihat'];?></a></h3>
    <h3 class="text-danger">Thể hiện : <a href="#"><?php echo $row['casi'];?></a></h3>
    <h3 class="text-danger">Thể loại : <a href="#"><?php echo $row['theloai'];?></a></h3>
        <h3 class="text-danger">Lời Bài Hát:</h3><br>
        <p><?php echo $row['loibaihat'];?></p>
            
  </div>
  
       <h1 class="text-danger">MV HOT</h1><br>
       <div class="well"><div class="bg-warning"> <div class="container-fluid bg-4 text-center">    
            
            <div class="row">
               <div class="col-sm-4">
                    <a href="#"><img src="../images/chieuhomay.jpg" class="img-thumbnail" style="width:100%" alt="Chiều hôm ấy-Jayki"><p>Chiều hôm ấy-Jayki</p></a>
                </div>
                <div class="col-sm-4"> 
                    <a href="#"><img src="../images/doithay.jpg" class="img-thumbnail" style="width:100%"  alt="Đổi thay-Hồ Quang Hiếu"><p>Đổi thay-Hồ Quang Hiếu</p></a>
                </div>
                <div class="col-sm-4"> 
                    <a href="#"><img src="../images/dungnhuthoiquen.jpg" class="img-thumbnail" style="width:100%" alt="Đừng như thòi quen-Jayki"><p>Đừng như thòi quen-Jayki</p></a>
                </div>
                <div class="col-sm-4">
                    <a href="#"><img src="../images/emthatlangoc.jpg" class="img-thumbnail" style="width:100%" alt="Em thật là ngốc-Vũ Duy Khánh"><p>Em thật là ngốc-Vũ Duy Khánh</p></a>
                </div>
                <div class="col-sm-4">
                <a href="#"><img src="../images/thanghekhoc.jpg" class="img-thumbnail" style="width:100%" alt="Thằng hề khóc-Dương 565"><p>Thằng hề khóc-Dương 565</p></a>
              </div>
                <div class="col-sm-4"> 
                    <a href="#"><img src="../images/chayngaydi.jpg" class="img-thumbnail" style="width:100%" alt="Chạy ngay đi-Sơn Tùng MTP"><p>Chạy ngay đi-Sơn Tùng MTP</p></a>
                </div>
               
                </div>
              </div><br></div></div> 
       
    </div>
   
    <div class="col-sm-4 sidenav">
      <h1 class="text-danger">CHỦ ĐỀ HOT</h1><br>
      <a href="#"><img src="../images/chude1.jpg" class="img-responsive" style="width:100%" alt="EDM">EDM</a>
      <a href="#"><img src="../images/chude2.jpg" class="img-responsive" style="width:100%" alt="CHRISTMAS">CHRISTMAS</a>
      <a href="#"><img src="../images/chude7.jpg" class="img-responsive" style="width:100%" alt="WINTER">WINTER</a>
      <a href="#"><img src="../images/chude4.jpg" class="img-responsive" style="width:100%" alt="MUSIC FOR LOVE">MUSIC FOR LOVE</a>
      <a href="#"><img src="../images/chude5.jpg" class="img-responsive" style="width:100%" alt="RADIO MP3">RADIO MP3</a>
      <a href="#"><img src="../images/chude6.png" class="img-responsive" style="width:100%" alt="NHỮNG BÀI HIT">NHỮNG BÀI HIT</a>
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


</body>
</html>
