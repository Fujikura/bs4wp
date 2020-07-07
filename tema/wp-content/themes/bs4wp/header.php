<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="<?= bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?= wp_head()  ?>

</head>
<body>

<div class="container">
  <header class="row mt-4 align-items-center">
    <div class="col-md-8 col-sm-12">
        <h1>Meu primeiro tema</h1>
        <p class="lead">Fiz com wordpress</p>
    </div>
    <div class="col-md-4 col-sm-12 mb-3">
        <form action="">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="O que procura">
                <div class="input-group-append">
                    <button class="btn btn-cor-1" type="button">Buscar</button>
                </div>
            </div>
        </form>
    </div>
  </header>

  <div class="row">
    <div class="col mb-5">
        
      <nav class="navbar navbar-expand-lg navbar-dark bg-cor-1 rounded" role="navigation">
          <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#meuNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'Principal',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>
        </nav>
    </div>
  </div>