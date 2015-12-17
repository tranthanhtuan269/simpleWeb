<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/dashboard.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            @font-face {
                font-family: fontFamily1;
                src: url(<?php echo Yii::app()->theme->baseUrl; ?>/fonts/KGATeenyTinyFont.ttf);
            }
            
            @font-face {
                font-family: fontFamily2;
                src: url(<?php echo Yii::app()->theme->baseUrl; ?>/fonts/KGATeenyTinyFont.ttf);
            }
            body{
                font-family: "Helvetica Neue","Helvetica","Arial,sans-serif";
            }
            
            .navbar-brand{
                font-family: fontFamily1;
            }
            
            .sidebar .nav-sidebar .header,
            .sidebar .nav-sidebar .header a:hover,
            .sidebar .nav-sidebar .header a:focus {
                background-color: #333;
            }
            .sidebar .nav-sidebar .header a{
                color: #EEE;
            }
        </style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand"><?php echo CHtml::encode($this->pageTitle); ?></a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Khóa Học <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Toán Học</a></li></a></li>
                  <li><a href="#">Vật Lý</a></li>
                  <li><a href="#">Hóa Học</a></li>
                  <li><a href="#">Văn Học</a></li>
                  <li><a href="#">Tiếng Anh</a></li>
                  <li><a href="#">Sinh Học</a></li>
                  <li><a href="#">Sử Học</a></li>
                  <li><a href="#">Địa Lý</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Luyện Thi<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="">Thành Tích Cá Nhân</a></li>
                    <li><a href="">Biểu Đồ Năng Lực</a></li>
                    <li><a href="">Kế Hoạch Học Tập</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thi Thử<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="">Hỏi Đáp Chưa Đọc</a></li>
                    <li><a href="">Hỏi Đáp Theo Môn</a></li>
                    <li><a href="">Hỏi Đáp Cũ</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hỏi Đáp<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="">Hỏi Đáp Chưa Đọc</a></li>
                    <li><a href="">Hỏi Đáp Theo Môn</a></li>
                    <li><a href="">Hỏi Đáp Cũ</a></li>
                </ul>
            </li>
            <li><a href="#">Đăng Nhập</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" placeholder="Tìm Kiếm..." class="form-control">
          </form>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="header"><a href="#">Khóa học <span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="#">Toán Học</a></li></a></li>
            <li><a href="#">Vật Lý</a></li>
            <li><a href="#">Hóa Học</a></li>
            <li><a href="#">Văn Học</a></li>
            <li><a href="#">Tiếng Anh</a></li>
            <li><a href="#">Sinh Học</a></li>
            <li><a href="#">Sử Học</a></li>
            <li><a href="#">Địa Lý</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="header"><a href="">Luyện Thi</a></li>
            <li><a href="">Thành Tích Cá Nhân</a></li>
            <li><a href="">Biểu Đồ Năng Lực</a></li>
            <li><a href="">Kế Hoạch Học Tập</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="header"><a href="">Hỏi Đáp</a></li>
            <li><a href="">Hỏi Đáp Chưa Đọc</a></li>
            <li><a href="">Hỏi Đáp Theo Môn</a></li>
            <li><a href="">Hỏi Đáp Cũ</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img width="200" height="200" alt="Generic placeholder thumbnail" class="img-responsive" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img width="200" height="200" alt="Generic placeholder thumbnail" class="img-responsive" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img width="200" height="200" alt="Generic placeholder thumbnail" class="img-responsive" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img width="200" height="200" alt="Generic placeholder thumbnail" class="img-responsive" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
</body>
</html>
