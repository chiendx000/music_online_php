<?php
    session_start();
    if(isset($_SESSION['username']) && $_SESSION['quyen']==1){

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> USER QUẢN LÝ NHẠC </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/layout.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.js"></script>
  <script>
  $(document).ready(function(){
  $(".xoanhac").click(function(){
    if (confirm("Bạn có muốn xóa không bài hát này không?")){
    }else{
      return false;
    }
    })
  })
</script>
</head>
<body>
<?php require('connect.php'); ?>
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
      <li class="active"><a href="index1.php"><span class="glyphicon glyphicon-home"></span></a></li>
      <li><a href="user.php">Quản Lý Nhạc</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="user.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username'];?></a></li>
      <li><a href="dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
        
    </div>
  </div>
</nav>
<div class="container text-center">    
  <div class="row content">
    <h2 class="text-info">DANH SÁCH BÀI HÁT BẠN ĐÃ UPLOAD</h2>
    <div class="col-md-6 col-md-offset-3">
    </div><br>
    <div class="col-md-12 col-md-offset-">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>STT</th>
        <th>ID Nhạc</th>
        <th >Tên Bài Hát</th>
        <th>Ca Sĩ</th>
        <th>Thể Loại</th>
        <th>Lời Bài Hát</th>
        <th>Người Đăng</th>
        <th>Thêm</th>
        <th>Sửa</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
       <?php
          $name=$_SESSION['username'];  
          $sql="SELECT * FROM baihat where nguoidang ='$name'";
          $query=mysqli_query($con,$sql);//truy vấn dữ liệu
          $num =mysqli_num_rows($query);
          if($num>0){//kiểm tra xem có dl không nếu có thì sử dụng vòng lặp để in số dòng cho table
            $STT=0;
            while($row=mysqli_fetch_array($query)){ 
                $STT++;
        ?>  
        <tr> 
           <td><?php echo $STT;?></td>
           <td><?php echo $row['id_nhac'];?></td>
           <td><?php echo $row['tenbaihat'];?></td>
           <td><?php echo $row['casi'];?></td>
           <td><?php echo $row['theloai'];?></td>
           <td><?php echo $row['loibaihat'];?></td>
           <td><?php echo $row['nguoidang'];?></td>
           <td><a href="upload.php" title=""><span class="glyphicon glyphicon-plus"></span></a></td>
           <td><a href="usersuanhac.php?id=<?php echo $row['id_nhac']?>" title=""><span class="glyphicon glyphicon-pencil"></span></a></td>
           <td><a class="xoanhac" href="xoanhac.php?id=<?php echo $row['id_nhac']?>" title=""><span class="glyphicon glyphicon-trash"></span></a></td>
         </tr>
         <?php
              }
            }else{
              echo 'không có dữ liệu';
            }
          ?>
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

</body>
</html>
<?php
    }else{
      header('location:dangnhap.php');  
    }
?> 
