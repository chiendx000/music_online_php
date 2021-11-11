<?php
session_start();

if(isset($_SESSION,$_SESSION['quyen']) && $_SESSION['quyen']==1){

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>QUẢN TRỊ HỆ THỐNG</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/layout.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.js"></script>
  <script>
  $(document).ready(function(){
  $(".xoa").click(function(){
    if (confirm("Bạn có muốn xóa không?")){
    }else{
      return false;
    }
    })
  })
</script>
</head>
<body>

<?php
  require('connect.php');
?>
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
      <li><a href="admin.php">Quản Lý Thành Viên</a></li>
      <li><a href="quanlynhac.php">Quản Lý Nhạc</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username'];?></a></li>
      <li><a href="dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
        
    </div>
  </div>
</nav>
<div class="container text-center">    
  <div class="row content">
    <h2 class="text-info">DANH SÁCH THÀNH VIÊN</h2>
    <div class="col-md-6 col-md-offset-3">
    </div><br>
    <div class="col-md-10 col-md-offset-1">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>STT</th>
        <th>id</th>
        <th>username</th>
        <th>password</th>
        <th>quyen</th>
        <th>Thêm</th> 
        <th>Sửa</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
       <?php  
          $sql="SELECT * FROM user ";
          $query=mysqli_query($con,$sql);
          $num =mysqli_num_rows($query);
          if($num>0){
            $STT=0;
            while($row=mysqli_fetch_array($query)){
              $STT++;
        ?>
        <tr>
           <td><?php echo $STT;?></td>
           <td><?php echo $row['id'];?></td>
           <td><?php echo $row['username'];?></td>
           <td><?php echo $row['password'];?></td>
           <td><?php echo $row['quyen'];?></td>
           <td><a href="dangky.php" title=""><span class="glyphicon glyphicon-plus"></span></a></td>
           <td><a href="suauser.php?id=<?php echo $row['id']?>" title=""><span class="glyphicon glyphicon-pencil"></span></a></td>
           <td><a class="xoa" href="xoauser.php?id=<?php echo $row['id']?>" title=""><span class="glyphicon glyphicon-trash"></span></a></td>
         </tr>
         <?php
              }
            }else{
              echo 'Không có dữ liệu';
            }
          ?>
    </tbody>
  </table>
  </div>
</div>
</div>  

</body>
</html>
 <?php
    }else{
      header('location:user.php');
    }
?> 
