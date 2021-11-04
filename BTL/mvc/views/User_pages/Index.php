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

<div class="container">
  <h2>Truyện tranh hot</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <a href="/BTL/mvc/views/User_pages/Truyen.php"><img id ="imgslide" src="/BTL/mvc/views/User_pages/img/hot1.jpg" alt="Los Angeles" height="450px"></a>
        <div class="carousel-caption" id="idslide">
          <h3 id="info">Mahouka koukou rettousei </h3>
          <p id="info">Pháp thuật. Nó không phải sản phẩm của thần thoại hay truyền thuyết, mà là một kỹ thuật khoa học hiện đại đã được phát triển gần một thế kỷ tính cho đến giờ.</p>
        </div>
      </div>

      <div class="item">
      <a href="Truyen.php"><img id ="imgslide" src="/BTL/mvc/views/User_pages/img/hot2.png" alt="Chicago" height="450px"></a>
        <div class="carousel-caption" id="idslide">
          <h3 id="info">Jahy-sama wa Kujikenai!</h3>
          <p id="info">Jahy-sama, trợ lý của chúa quỷ, là người được toàn thể vương quốc loài quỷ khiếp sợ. Trong một trận giao tranh với nữ pháp sư để bảo vệ vương quốc đang bị ....</p>
        </div> 
      </div>
    
      <div class="item">
      <a href="Truyen.php"><img id ="imgslide" src="/BTL/mvc/views/User_pages/img/hot3.png" alt="New york" height="450px"></a>
        <div class="carousel-caption" id="idslide">
          <h3 id="info">180 Byou de Kimi no Mimi wo Shiawase ni Dekiru ka?</h3>
          <p id="info">180 Byou de Kimi no Mimi wo Shiawase ni Dekiru ka?: Câu chuyện xoay quanh Akari (biệt danh: Gekkō-san), người mua phải một chiếc mic giả và bước ...</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
 
<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Truyện mới cập nhập</h2><br>
<!--   <h4>What we have created</h4> -->

  <div class="row text-center slideanim">

    <!--   row 1 -->
    <a class="col-sm-3" href="/BTL/mvc/views/User_pages/Chapter.php" style="display: inline-block;">
       <div class="thumbnail">
          <img src="/BTL/mvc/views/User_pages/img/T1.jpg" alt="" width="400" height="300">
          <p><strong>Trên truyện 1</strong></p>
          <p>Tóm tắt nội dung</p>
        </div>
    </a>

    <a class="col-sm-3" href="" style="display: inline-block;">
       <div class="thumbnail">
          <img src="/BTL/mvc/views/User_pages/img/T1.jpg" alt="" width="400" height="300">
          <p><strong>Trên truyện 1</strong></p>
          <p>Tóm tắt nội dung</p>
        </div>
    </a>

    <a class="col-sm-3" href="" style="display: inline-block;">
       <div class="thumbnail">
          <img src="/BTL/mvc/views/User_pages/img/T1.jpg" alt="" width="400" height="300">
          <p><strong>Trên truyện 1</strong></p>
          <p>Tóm tắt nội dung</p>
        </div>
    </a>

    


  


<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
