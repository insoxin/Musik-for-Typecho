 <!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<meta name="theme-color" content="#4cb6cb">
<meta name="msapplication-TileColor" content="#4cb6cb">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title><?php $this->archiveTitle(array(
'category'=>_t('分类 %s 下的文章'),
'search'=>_t('包含关键字 %s 的文章'),
'tag' =>_t('标签 %s 下的文章'),
'author'=>_t('%s 发布的文章')
), '', ' - '); ?><?php $this->options->title(); ?></title>

  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/app.v1.css'); ?>" type="text/css" />
    <!--[if lt IE 9]>
    <script src="<?php $this->options->themeUrl('js/ie/html5shiv.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/ie/respond.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/ie/excanvas.js'); ?>"></script>
  <![endif]--> 
<?php $this->header(); ?>

<?php if($this->is('post')||$this->is('page')): ?>
<meta property="og:type" content="blog"/>
<meta property="og:image" content="<?php showThumbnail($this); ?>"/>
<meta property="og:release_date" content="<?php $this->date('Y-m-j'); ?>"/>
<meta property="og:title" content="<?php $this->options->title(); ?>"/>
<meta property="og:description" content="<?php $this->description() ?>" />
<meta property="og:author" content="<?php $this->author(); ?>"/>
<?php endif; ?>
</head>
 
<body >
  <section class="vbox">
   <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
     <div class="navbar-header aside bg-info dk nav-xs">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="icon-list"></i>
        </a>
<a href="<?php $this->options->siteUrl(); ?>" class="navbar-brand text-lt">
          <i class=" icon-bubble"></i>
          <img src="#" alt="." class="hide">
       <span class="hidden-nav-xs m-l-sm"><?php $this->options->title(); ?></span>
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="icon-settings"></i>
        </a>
      </div>      <ul class="nav navbar-nav hidden-xs">
        <li>
          <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted">
            <i class="fa fa-indent text"></i>
            <i class="fa fa-dedent text-active"></i>
          </a>
        </li>
      </ul>
      <form action="?i=search" method="post" class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search" target="_blank">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">

<form id="search" method="post" action="./" role="search">

          <button type="submit" name="search" value="搜索" type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button>
            </span>
            <input type="text" name="s" class="form-control input-sm no-border rounded" placeholder="填充搜索内容..."></form>
          </div>
        </div>
      </form>
      <div class="navbar-right ">
        <ul class="nav navbar-nav m-n hidden-xs nav-user user">
    
           <li class="dropdown"> 
            <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
    
      <img <?php if ($this->options->logoUrl){ ?>src="<?php $this->options->logoUrl();?>"<?php }else{ ?>src="https://secure.gravatar.com/avatar/"<?php };?> alt="<?php $this->options->title();?>"/>
              </span>
        <?php if($this->user->hasLogin()): ?><?php $this->user->screenName(); ?>
 <?php else: ?>
               <?php echo "个人中心";?>  <?php endif; ?>  <b class="caret"></b>
            </a>
            <ul class="dropdown-menu animated fadeInRight">       
             <?php if($this->user->hasLogin()): ?>
              <li>    <span class="arrow top"></span>
              <a href="<?php $this->options->adminUrl(); ?>" title="<?php $this->user->screenName(); ?>" target="_blank"><?php _e('后台设置'); ?></i></a>
              </li>
             
          <?php else: ?>
               <li>
                <span class="arrow top"></span>
              <a href="<?php $this->options->adminUrl('login.php'); ?>" target="_blank"><?php _e('登录'); ?></a>
              </li>   <?php endif; ?>
              <li class="divider"></li>
              <li>
                <a href="<?php $this->options->feedUrl(); ?>" target="_blank"> 文章rss-<i class="fa fa-rss-square"></i> </a>
              </li>
 
              <li class="divider"></li>
              <li>
                <a href="<?php $this->options->commentsFeedUrl(); ?>" target="_blank" >评论rss-<i class="fa fa-rss"></i></a>
              </li><?php if($this->user->hasLogin()): ?>
         <li class="divider"></li>
              <li>
                <a href="<?php $this->options->logoutUrl(); ?>" >安全退出</a>  <?php endif; ?>
              </li>
            </ul>
          </li>
        </ul>
      </div>      
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->

           <aside class="bg-black dk aside hidden-print nav-xs" id="nav">
          <section class="vbox">
            <section class="w-f-md scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                


                <!-- nav -->                 
             <nav class="hidden-xs nav-primary">
<ul class="nav" data-ride="collapse">
                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                      语言
                    </li>  
<li>   <a href="https://blog.isoyu.com" >
              <i class="icon-speech"></i>
                     <span class="font-bold"> 中文</span>
                    </a>    </li>

<li>   

<a href="http://translate.baiducontent.com/transpage?query=blog.isoyu.com&from=auto&to=en&source=url" ><i class="icon-emoticon-smile"></i>
                     <span class="font-bold"> English</span>
                     
                    </a>    </li>


  </ul>  

                  <ul class="nav bg clearfix">     
                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                    展示
                    </li>
                   
        <li>
                      <a href="<?php $this->options->siteUrl(); ?>">
                        <i class="icon-disc icon text-success"></i>
                        <span class="font-bold">文章</span>
                      </a>                  
                    </li>         
         <!--             
          <li>
                      <a href="<?php $this->options->siteUrl(); ?>">
                        <i class="icon-drawer icon text-primary-lter"></i>
                        <b class="badge bg-primary pull-right">6</b>
                        <span class="font-bold">事件</span>
                      </a>
                    </li>
                     -->    
               <li>   

<a href="http://mv.isoyu.com/" >
                       <i class="icon-social-youtube icon text-primary"></i>
                     <span class="font-bold">影院</span>
                    </a>    </li> 



<li class="m-b hidden-nav-xs"></li>         </ul>     

<ul class="nav" data-ride="collapse">
                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                      交互
                    </li>  
<li>   <a href="<?php $this->options->siteUrl(); ?><?php $this->options->gd(); ?>" >
              <i class="fa fa-paste"></i>
                     <span class="font-bold"> 归档</span>
                    </a>    </li>

<li>   

<a href="<?php $this->options->siteUrl(); ?><?php $this->options->ab(); ?>" >
                     <i class="icon-badge"></i>
                     <span class="font-bold"> 关于</span>
                    </a>    </li>

<li>   

<a href="./links.html" >
                     <i class="icon-link"></i>
                     <span class="font-bold"> 友链</span>
                    </a>    </li>

  </ul>  


                  <ul class="nav bg clearfix">     
                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                    INSO
                    </li>
                   
        <li>
                      <a href="./inso.html">
                        <i class="icon-trophy"></i>
                        <span class="font-bold">旗下网站</span>
                      </a>                  
                    </li>  
<li>
                      <a href="http://h.isoyu.com/web.php?id=iPQEX8k">
                        <i class="icon-picture"></i>
                        <span class="font-bold">China INSO shot</span>
                      </a>                  
                    </li>  
 <li>
                      <a href="//beta.qq.com/m/pn4m">
                        <i class="icon-screen-smartphone"></i>
                        <span class="font-bold">博客客户端</span>
                      </a>                  
                    </li>  
<li class="m-b hidden-nav-xs"></li>        

 </ul>  
 
             <div style="position:fixed; bottom:0; ">
   <?php $this->options->tongji(); ?>    

</div>
              
                <!-- / nav --></nav>
              </div>
            </section>
            
   
          </section>
        </aside>
        

 
                