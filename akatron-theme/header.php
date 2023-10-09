<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    if ($_SERVER['REQUEST_URI'] == "/" || str_starts_with($_SERVER['REQUEST_URI'], '/category/')) {
      echo '<meta name="description" content="Akatron Yazılım. Cloud Saas projeleri ile veri analizi başta olmak üzere bir çok sektörde uygulamalar geliştirmekteyiz." />';
      echo '<meta name="contact" content="info@akatron.net" />';
      echo '<meta name="keywords" content="akatron, network, net, debi, cankaya, konak, izmir, turkiye, yazılım geliştirme, saas, cloud" />';
    }
  ?>
  
  <title><?php wp_title(''); ?></title>
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets'; ?>/blog.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets'; ?>/sidebar.css">
  <?php wp_head(); ?>
</head>

<body>

<nav id="nav" class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri().'/assets'; ?>/img/akt-icon.png" alt=""> AKATRON <span class="alt-brand">NETWORK</span> </a>
    
    <button class="navbar-toggler" type="button" onclick="$('.navbar-collapse').collapse('toggle'); document.getElementById('nav').classList.toggle('navbar-mobile-bg')" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="https://debi.akatron.net">Debi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/academy/">Akademi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/iletisim/">İletişim</a>
        </li>
      </ul>

      <a href="https://github.com/Akatron-Network" target="_blank" class="btn btn-github"><i class="fa-brands fa-github"></i> <span>GitHub</span></a>
      
    </div>
      
      
    </div>
  </div>
</nav>