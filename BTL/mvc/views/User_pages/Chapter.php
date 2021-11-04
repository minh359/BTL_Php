<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  
  <link rel="stylesheet" href="/BTL/mvc/views/User_pages/css/chapter.css">

</head>
<body>

<nav class="navbar navbar-inverse">
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
<ul class="pager">
  <li class="previous"><a href="#">Previous</a></li>
  <li class="next"><a href="#">Next</a></li>
</ul>

<div id="chuong" class="form-group col-md-4 text-center">
  <label for="sel1">Chương truyện số:</label>
  <select class="form-control" id="sel1">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
</select>
<a href="#" id="btn" class="btn btn-info" role="button">Đọc chương</a>
</div>

<!-- Profile -->
<div class="container py-3">       
        <div class="row" style="margin-top: 10px;">               
          <div class="col-md-9">
          <h1 style="text-align: center;">Chư giới tận thế online</h1>           
                                      

          </div>
        </div>
</div>
<!-- End profile -->
<br>
<ul class="pager">
  <li class="previous"><a href="#">Previous</a></li>
  <li class="next"><a href="#">Next</a></li>
</ul>

</div> 
<div class="col-md-2"></div>
</div>