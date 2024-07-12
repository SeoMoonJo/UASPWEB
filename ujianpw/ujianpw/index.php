<!DOCTYPE html>
<html lang="en" class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin One HTML - Bulma Admin Dashboard</title>

  <!-- Bulma is included -->
  <link rel="stylesheet" href="assets/css/main.min.css">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
</head>
<body>
<div id="app">
  <nav id="navbar-main" class="navbar is-fixed-top">
    <div class="navbar-brand">
      <a class="navbar-item is-hidden-desktop jb-aside-mobile-toggle">
        <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
      </a>
      <div class="navbar-item has-control">
        <div class="control"><input placeholder="Search everywhere..." class="input"></div>
      </div>
    </div>
    <div class="navbar-brand is-right">
      <a class="navbar-item is-hidden-desktop jb-navbar-menu-toggle" data-target="navbar-menu">
        <span class="icon"><i class="mdi mdi-dots-vertical"></i></span>
      </a>
    </div>
  </nav>
  <aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
      <div class="aside-tools-label">
        <span><b>Admin</b> One HTML</span>
      </div>
    </div>
    <div class="menu is-menu-main">
      <p class="menu-label">General</p>
      <ul class="menu-list">
        <li>
          <a href="index.html" class="is-active router-link-active has-icon">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
      </ul>
      <p class="menu-label">MANAJEMEN</p>
      <ul class="menu-list">
        <li>
          <a href="" class="has-icon">
            <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span>
            <span class="menu-item-label">Data Mahasiswa</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <?php
    if(isset($_GET['page']))
    {
      switch($_GET['page'])
      {
        case 'home' : include("default.php");break;
        case '' : include("pages/");break;
        default : include("default.php");break;
      }
    }
    else
    {
      include("default.php");
    }
  ?>
  <footer class="footer">
    <div class="container-fluid">
      <div class="level">
        <div class="level-left">
          <div class="level-item">
            © 2020, JustBoil.me
          </div>
          <div class="level-item">
            <a href="https://github.com/vikdiesel/admin-one-bulma-dashboard" style="height: 20px">
              <img src="https://img.shields.io/github/v/release/vikdiesel/admin-one-bulma-dashboard?color=%23999">
            </a>
          </div>
        </div>
        <div class="level-right">
          <div class="level-item">
            <div class="logo">
              <a href="https://justboil.me"><img src="img/justboil-logo.svg" alt="JustBoil.me"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>

<div id="sample-modal" class="modal">
  <div class="modal-background jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Confirm action</p>
      <button class="delete jb-modal-close" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <p>This will permanently delete <b>Some Object</b></p>
      <p>This is sample modal</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button jb-modal-close">Cancel</button>
      <button class="button is-danger jb-modal-close">Delete</button>
    </footer>
  </div>
  <button class="modal-close is-large jb-modal-close" aria-label="close"></button>
</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="assets/js/main.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="assets/js/chart.sample.min.js"></script>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
</body>
</html>
