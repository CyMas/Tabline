<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>

  <!-- Basic -->
  <title>Tabline | Home</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="iThemesLab">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="/asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="/css/slicknav.css" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="/css/style2.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="/css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="/css/animate.css" media="screen">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="/css/colors/red.css" title="red" media="screen" />
  <link rel="stylesheet" type="text/css" href="/css/colors/jade.css" title="jade" media="screen" />
  <link rel="stylesheet" type="text/css" href="/css/colors/green.css" title="green" media="screen" />
  <link rel="stylesheet" type="text/css" href="/css/colors/blue.css" title="blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="/css/colors/beige.css" title="beige" media="screen" />
  <link rel="stylesheet" type="text/css" href="/css/colors/cyan.css" title="cyan" media="screen" />
  <link rel="stylesheet" type="text/css" href="/css/colors/orange.css" title="orange" media="screen" />
  <link rel="stylesheet" type="text/css" href="/css/colors/peach.css" title="peach" media="screen" />
  <link rel="stylesheet" type="text/css" href="/css/colors/pink.css" title="pink" media="screen" />
  <link rel="stylesheet" type="text/css" href="/css/colors/purple.css" title="purple" media="screen" />
  <link rel="stylesheet" type="text/css" href="/css/colors/sky-blue.css" title="sky-blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="/css/colors/yellow.css" title="yellow" media="screen" />

  <!-- Margo JS  -->
  <script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="/js/jquery.migrate.js"></script>
  <script type="text/javascript" src="/js/modernizrr.js"></script>
  <script type="text/javascript" src="/asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="/js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="/js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="/js/jquery.appear.js"></script>
  <script type="text/javascript" src="/js/count-to.js"></script>
  <script type="text/javascript" src="/js/jquery.textillate.js"></script>
  <script type="text/javascript" src="/js/jquery.lettering.js"></script>
  <script type="text/javascript" src="/js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="/js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="/js/jquery.parallax.js"></script>
  <script type="text/javascript" src="/js/mediaelement-and-player.js"></script>
  <script type="text/javascript" src="/js/jquery.slicknav.js"></script>
  

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

  <!-- Container -->
 <div id="container">
  <div class="hidden-header"></div>
    <header class="clearfix">

      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header">
            
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            
            <a class="navbar-brand" href="/">
              <h1 style="color:green;">Tabline</h1>
            </a>
          </div>
          <div class="navbar-collapse collapse">
            
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="/welcome">Home</a>
              </li>
              <li>
                <a href="/login">Login</a>
              </li>
              <li>  
                <a href="/register">Register</a>
              </li>
              <li>
                <a class="active" href="/contact">Contact Us</a>
              </li>
          </div>
        </div>
      </div>
    </header>

    <div id="content">
      <div class="container">

        <div class="row">

          <div class="col-md-8">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Contact Us</span></h4>

            <!-- Start Contact Form -->
            <form action="contactsave"  method="POST" role="form" class="contact-form" id="contact-form" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Nama" name="nama">
                </div>
              </div>

              <div class="form-group">
                <div class="controls">
                  <input type="email" class="email" placeholder="Email" name="email">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" class="requiredField" placeholder="Nomor Handphone" name="no_hp">
                </div>
              </div>

              <div class="form-group">
                <div class="controls">
                  <textarea rows="7" placeholder="Pesan" name="pesan"></textarea>
                </div>
              </div>
              <button type="submit" class="btn-system btn-large" onClick="data anda sudah terkirim">Kirim</button>
            </form>
          </div>

          <div class="col-md-4">
          <h4 class="classic-title"><span>Informasi</span></h4>
          <p>Jika ingin mengetahui lebih detailnya silahkan hubungi atau datangi.</p>
            <div class="hr1" style="margin-bottom:10px;"></div>
            <ul class="icons-list">
              <li><i class="fa fa-globe">  </i> <strong>Alamat:</strong> Jln. SMEA 6 </li>
              <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> yusufmawahid10@gmail.com</li>
              <li><i class="fa fa-mobile"></i> <strong>Handphone:</strong>&nbsp;081 219 947 273</li>
            </ul>
            <div class="hr1" style="margin-bottom:15px;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <div class="switcher-box">
    <a class="open-switcher show-switcher"><i class="fa fa-cog fa-2x"></i></a>
    <h4>Style Switcher</h4>
    <span>12 Predefined Color Skins</span>
    <ul class="colors-list">
      <li>
        <a onClick="setActiveStyleSheet('blue'); return false;" title="Blue" class="blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('sky-blue'); return false;" title="Sky Blue" class="sky-blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('cyan'); return false;" title="Cyan" class="cyan"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('jade'); return false;" title="Jade" class="jade"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('green'); return false;" title="Green" class="green"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('purple'); return false;" title="Purple" class="purple"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('pink'); return false;" title="Pink" class="pink"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('red'); return false;" title="Red" class="red"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('orange'); return false;" title="Orange" class="orange"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('yellow'); return false;" title="Yellow" class="yellow"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('peach'); return false;" title="Peach" class="peach"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('beige'); return false;" title="Biege" class="beige"></a>
      </li>
    </ul>
    <span>Top Bar Color</span>
    <select id="topbar-style" class="topbar-style">
      <option value="1">Light (Default)</option>
      <option value="2">Dark</option>
      <option value="3">Color</option>
    </select>
    <span>Layout Style</span>
    <select id="layout-style" class="layout-style">
      <option value="1">Wide</option>
      <option value="2">Boxed</option>
    </select>
    <span>Patterns for Boxed Version</span>
    <ul class="bg-list">
      <li>
        <a href="#" class="bg1"></a>
      </li>
      <li>
        <a href="#" class="bg2"></a>
      </li>
      <li>
        <a href="#" class="bg3"></a>
      </li>
      <li>
        <a href="#" class="bg4"></a>
      </li>
      <li>
        <a href="#" class="bg5"></a>
      </li>
      <li>
        <a href="#" class="bg6"></a>
      </li>
      <li>
        <a href="#" class="bg7"></a>
      </li>
      <li>
        <a href="#" class="bg8"></a>
      </li>
      <li>
        <a href="#" class="bg9"></a>
      </li>
      <li>
        <a href="#" class="bg10"></a>
      </li>
      <li>
        <a href="#" class="bg11"></a>
      </li>
      <li>
        <a href="#" class="bg12"></a>
      </li>
      <li>
        <a href="#" class="bg13"></a>
      </li>
      <li>
        <a href="#" class="bg14"></a>
      </li>
    </ul>
  </div>

  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript">

    $('#submit').click(function() {

      $.post("php/send.php", $(".contact-form").serialize(), function(response) {
        $('#success').html(response);
      });
      return false;
    });
  </script>
</body>
</html>