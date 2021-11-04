<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  
  <link rel="stylesheet" href="/BTL/mvc/views/User_pages/css/Truyen.css">

</head>
<body>

<nav id="idbody" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="Index.php">Truyện của tui</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="Index.php">Trang chủ</a></li>

        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh sách        
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="#">Truyện mới cập nhập</a></li>
            <li><a href="#">Truyện hot</a></li>
            <li><a href="#">Truyện full</a></li>
        </ul>
        </li>

        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Thể loại        
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="#">Tình cảm</a></li>
            <li><a href="#">Ngôn tình</a></li>
            <li><a href="#">Drama</a></li>
            <li><a href="#">Drama</a></li>
            <li><a href="#">Xuyên không</a></li>
        </ul>
        </li>
        
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Số lượng chương      
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="#">Dưới 500 chương</a></li>
            <li><a href="#">500-1000 chương</a></li>
            <li><a href="#">1000-2000 chương</a></li>
            <li><a href="#">Trên 2000 chương</a></li>
        </ul>
        </li>

<form class="navbar-form navbar-left" action="/action_page.php">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>

      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    </div>
  </div>
</nav>



<div class="row">
<div id="left" class="col-md-2"></div>
<div id="border" class="col-md-8">
<!-- Profile -->
<div class="container py-3">
        <div class="row" style="margin-top: 10px;">
          <div class="col-md-3">
            <div class="img-place wow zoomIn">
              <img src="img/T1.jpg" alt="Photo Profile">
            </div>
          </div>
          <div id="info" class="col-md-5">
            <div class="caption wow fadeInLeft">
              <h2 class="fg-dark">Name</h2>
              <p class="fg-theme fw-medium">Tên khác</p>
              <p>Bạch Tử Nhạc vì một lí do không rõ đã xuyên không đến một thế giới nơi người, quỷ, yêu, tiên cùng tồn tại. 
                Hơn nữa, cậu còn thức tỉnh được một hệ thống có thể gia tăng thuộc tính của bản thân. Nghiền ngẫm hàng ngàn 
                công pháp, yếu quyết; hấp thu lý luận và kinh nghiệm tu hành; tự sáng tạo võ công; dấn thân vào con đường 
                giết quỷ trừ yêu! Trở thành người mạnh nhất!</p>
              <ul class="theme-list">
                <li class="fg-dark"><b>Tác giả:</b> Kokuzawa Yousuke</li>
                <li class="fg-dark"><b>Tình trạng:</b> Đang tiến hành</li>
                <li class="fg-dark"><b>Thể loại:</b> Adventure - Ecchi - Fantasy - Manga - Shounen - Slice of Life</li>
                <li class="fg-dark"><b>Lượt xem:</b> 1.835.450</li>
              </ul>
              
              <a href="#" id="btn" class="btn btn-info" role="button">Đọc từ đầu</a>
            </div>
          </div>
        </div>
</div>
<!-- End profile -->
<br>
<div class="alert alert-info">
    <strong>Danh sách chương</strong> 
  </div>

<div class="list-group">
  <a href="#" class="list-group-item">Chương 9</a>
  <a href="#" class="list-group-item">Chương 8</a>
  <a href="#" class="list-group-item">Chương 7</a>
  <a href="#" class="list-group-item">Chương 6</a>
  <a href="#" class="list-group-item">Chương 5</a>
  <a href="#" class="list-group-item">Chương 4</a>
  <a href="#" class="list-group-item">Chương 3</a>
  <a href="#" class="list-group-item">Chương 2</a>
  <a href="#" class="list-group-item">Chương 1</a>
</div>

<ul class="pager">
  <li class="previous"><a href="#">Previous</a></li>
  <li class="next"><a href="#">Next</a></li>
</ul>

</div> 
<div class="col-md-2"></div>
</div>