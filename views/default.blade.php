<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>POPA</title>

  <script src="{{ asset('js')}}/jquery.js"></script>
  <script src="{{ asset('js')}}/jquery.min.js"></script>

  <!-- Latest compiled and minified CSS -->
  <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->

  <!-- Optional theme -->
  <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">-->

  {{ HTML::style('css/bootstrap.min.css', array('media'=>'screen')); }}

  <!-- Latest compiled and minified JavaScript -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <style>
    body {
      padding-top: 70px;
    }
    .navbar-user-info {
      content: "";
      display: block;
      clear: both
    }
    .navbar-user-name {
      float: left;
      margin-left: 10px;
      margin-right: 10px;
    }
    .navbar-points {
      float: left;
      color: #ff6600;
      font-weight: bold;
      margin-left: 10px;
      margin-right: 10px;
    }

    footer .footer-above {
      background-color: #f8f8f8;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    footer .footer-above h5{
      border-bottom: dotted 1px #333;
    }

    .footer-ul{
      padding: 0;
      list-style: none;
    }

    .footer-ul li a{
      color: #333;
      text-decoration: none;
    }
  </style>

</head>



<body>

  <nav class="navbar navbar-default navbar-fixed-top navbar-collapse">

    <div class="container-fluid">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample8">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="{{ URL::to('/') }}">
          POPA
        </a>

      </div>


      <div class="navbar-collapse collapse" id="navbarEexample8">
        <form method="GET" action="{{ URL::to('/') }}" class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" name="q" class="form-control" placeholder="検索キーワード">
          </div>
          <button type="submit" class="btn btn-default">検索</button>
        </form>

        <ul class="nav navbar-nav">
          <li><a href="{{ URL::to('order') }}">依頼してみる</a></li>
        </ul>

        @if(UserController::is_logined())
          <div class="navbar-text navbar-right">
            <div class="navbar-user-info">
              <div class="navbar-points">{{Session::get('user_point');}}pt</div>
              {{-- {{$user->points}} --}}
  
              <?php 
              $acc_name = Auth::user()->acc_name;
              if (strlen($acc_name) > 12){
                $acc_name = substr($acc_name,0,12)."...";
              } 
              
              ?>
  
              <div class="navbar-user-name"><a href="{{ URL::to('user/home') }}">{{$acc_name}}</a></div>
            </div>
          </div>
        @else
          <p class="navbar-text navbar-right"><a href="{{ URL::to('user/create') }}" class="navbar-link">新規登録</a></p>
          <p class="navbar-text navbar-right"><a href="{{ URL::to('user') }}" class="navbar-link">ログイン</a></p>
        @endif
      </div>


    </div>
  </nav>



  @yield('content')

</div>


<footer>
  <div class="footer-above">
    <div class="container">

      <div class="row">
        <div class="footer-col col-md-4">
          <h5>問い合わせ</h5>
          <ul class="footer-ul">
            <li> <a href="#">利用規約</a> </li>
            <li> <a href="#">個人情報の取り扱いについて</a> </li>
            <li> <a href="#">問い合わせ</a> </li>
            <li> <a href="#">運営会社</a> </li>
          </ul>
        </div>

        <div class="footer-col col-md-4">
          <h5>このサイトについて</h5>
          <ul class="footer-ul">
            <li> <a href="#">POPA.comとは</a> </li>
            <li> <a href="#">よくある質問</a> </li>
          </ul>
        </div>

        <div class="footer-col col-md-4">
        </div>
      </div>

    </div>
  </div>
</footer>

</body>
<script src="{{ asset('js')}}/jquery.js"></script>
<script src="{{ asset('js')}}/bootstrap.min.js"></script>



</html>
