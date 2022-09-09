<DOCTYPE html>
  <html lang="ja">
      <head>
          <meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo bloginfo('name');?></title>
        <!--<link rel="stylesheet" href="css/style.css" media="screen">-->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <?php wp_head(); ?>
      </head>
<body>
  <header>
    <!--ロゴ-->
    <div class="logo" style="text-align: center">
    <a href="<?php echo esc_url(home_url());?>"> <img src="<?php echo esc_url(get_theme_file_uri('images/logo1.png')); ?>" width="" height="" alt=""></a>
    </div>
    <!--/ロゴ-->
    <!--グローバルメニュー-->
<div id="globalnav">
<nav class="navbar navbar-expand navbar-light p-2" style="background-color: #c7b299;">
  <!--ブランド名-->
  <!--<a class="navbar-brand" href="#">Navbar</a>-->
  <!--トグルボタン-->
  <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>-->
      <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
        <ul class="navbar-nav nav-fill w-100">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url( home_url() ); ?>/profile/">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url( home_url() ); ?>/works/">Works</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url( home_url() ); ?>/news/">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url( home_url() ); ?>/contact/">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
<!--/グローバルメニュー-->
</header>
