<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>错误的URL</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
 <link rel="stylesheet" href="<?php $this->options->themeUrl('css/app.v1.css'); ?>" type="text/css" />
  <link rel="shortcut icon" href="favicon.ico"/>
    <!--[if lt IE 9]>
    <script src="<?php $this->options->themeUrl('js/ie/html5shiv.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/ie/respond.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/ie/excanvas.js'); ?>"></script>
  <![endif]-->
</head>
<body class="bg-light dk">
    <section id="content">
    <div class="row m-n">
      <div class="col-sm-4 col-sm-offset-4">
        <div class="text-center m-b-lg">
          <h1 class="h text-white animated fadeInDownBig">404</h1>
        </div>
        <div class="list-group auto m-b-sm m-b-lg">
          <a href="<?php $this->options->siteUrl(); ?>" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <i class="fa fa-fw fa-home icon-muted"></i> 回到首页
          </a>
          <a href="<?php $this->options->siteUrl(); ?><?php $this->options->ab(); ?>" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <i class="fa fa-fw fa-question icon-muted"></i> 关于博客
          </a>
          <a href="?#" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <span class="badge bg-info lt"><?php $this->options->qq(); ?></span>
            <i class="fa fa-fw fa-phone icon-muted"></i> QQ联系
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder clearfix">
      <p>
        <small>&copy; &#23020;&#38271;&#20449;</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
 <script src="<?php $this->options->themeUrl('js/app.v1.js'); ?>"></script>
 <script src="<?php $this->options->themeUrl('js/jquery.easy-pie-chart.js'); ?>"></script>   
 <script src="<?php $this->options->themeUrl('js/jquery.sparkline.min.js'); ?>"></script>     
    <script src="<?php $this->options->themeUrl('js/app.plugin.js'); ?>"></script>     

</body>
</html>