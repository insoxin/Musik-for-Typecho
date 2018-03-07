<?php
/**
 * 暖色调
 * 
 * @package 姬长信
 * @author 姬长信
 * @version 1.0.1
 * @link https://blog.isoyu.com
 */
$this->need('header.php');
?>


                         <!-- /.aside -->
        <section id="content">
          <section class="vbox">
            <section class="scrollable wrapper-lg">
              <div class="row"><?php if ($this->is('index')) : ?>
<?php else: ?><?php if ($this->is('search')) : ?>
 <!-- .breadcrumb -->
                  <ul class="breadcrumb">
                    <li> <a href="<?php $this->options->siteUrl(); ?>"><i class="fa fa-home"></i> 首页</a></li>
                    <li class="active">       <a href="#"><i class="fa fa-list-ul"></i> <?php $this->archiveTitle(array(
'category'=>_t('最新分类 %s 下的文章'),
'search'=>_t('最新包含关键字 %s 的文章'),
'tag' =>_t('最新标签 %s 下的文章'),
'author'=>_t('最新%s 发布的文章')
), '', ' -如下 '); ?></a>   </li>
 </ul>
                  <!-- / .breadcrumb -->
                </div>
<?php else: ?>
<div class="col-lg-12">
                  <!-- .breadcrumb -->
                  <ul class="breadcrumb">
                    <li> <a href="<?php $this->options->siteUrl(); ?>"><i class="fa fa-home"></i> 首页</a></li>
                    <li class="active">       <a href="#"><i class="fa fa-list-ul"></i> <?php $this->category(','); ?></a>   </li>
 </ul>
                  <!-- / .breadcrumb -->
                </div>
         <?php endif; ?> <?php endif; ?>
                 

              
                <div class="col-sm-9">
                  <div class="blog-post">     
                  <!-- 开始循环  -->   
     <style>
.img-full{
  max-width: 100%;
    height: 0;
padding-bottom:<?php $this->options->cc(); ?>;
    overflow: hidden;
}.img-full img{

width:100%
}
</style>
 <?php while($this->next()): ?><?php if($this->category == "video"): ?>
 <div class="post-item"><div class="item"> 
<div class="pos-rlt"> <div class="item-overlay opacity r r-2x bg-black"> <div class="center text-center m-t-n"> <a href="<?php $this->permalink() ?>"><i class="fa fa-play-circle i-2x"></i></a> </div> </div> <div class="top"> <span class="badge bg-dark m-l-sm m-t-sm"><?php $this->date('Y-m-j  H:i'); ?></span> </div> <a href="<?php $this->permalink() ?>">
<div class="img-full">
<?php if($this->options->slimg && 'guanbi'==$this->options->slimg): ?>
<?php else: ?>
<?php if($this->options->slimg && 'showoff'==$this->options->slimg): ?><a href="<?php $this->permalink() ?>" ><?php showThumbnail($this); ?></a>
<?php else: ?>
<img src="<?php showThumbnail($this); ?>">
        <?php endif; ?>
        <?php endif; ?>
 </div>
</a>
 </div>
 <div class="caption wrapper-lg">
                         <h2 class="post-title"><a itemtype="url" href="<?php $this->permalink() ?>" class="title"><span style="font-family:'Microsoft YaHei';color:#00D5FF;"><strong><?php $this->title() ?></strong></span></a></h2>
                        <div class="post-sum" >
                    <?php $this->excerpt(250, '...'); ?> 
                        </div>
                        <div class="line line-lg"></div>
                        <div class="text-muted">
                          <i class="fa fa-user icon-muted">by-</i> <a href="#" class="m-r-sm"><?php $this->author(); ?></a>
                          <i class="fa fa-clock-o icon-muted"></i><?php $this->date('Y-m-j  H:i'); ?>
                      
                        <a href="#" class="m-l-sm"><i class="fa fa-comment-o icon-muted"></i><?php $this->commentsNum(); ?>  </a>
                 
                        </div>
                      </div>
</div></div>
<?php else: ?>
  <div class="post-item"> <div class="post-media">
      <?php if (!empty($this->options->sidebarBlock) && in_array('Showt', $this->options->sidebarBlock)): ?>      


 <a itemtype="url" href="<?php $this->permalink() ?>" class="title"><div class="img-full">

<img src="<?php showThumbnail($this); ?>"> 
</a></div>
          <?php endif; ?>   </div>      
                      <div class="caption wrapper-lg">
                    <h2 class="post-title"><a itemtype="url" href="<?php $this->permalink() ?>" class="title"><span style="font-family:'Microsoft YaHei';color:#00D5FF;"><strong><?php $this->title() ?></strong></span></a></h2>
                        <div class="post-sum" >
                    <?php $this->excerpt(250, '...'); ?> 
                        </div>
                        <div class="line line-lg"></div>
                        <div class="text-muted">
                          <i class="fa fa-user icon-muted">Posted in-</i> <?php $this->category(','); ?>
                          <i class="fa fa-clock-o icon-muted"></i>on <?php $this->date('F-j'); ?> read(<?php get_post_view($this) ?>)<?php echo art_count($this->cid); ?>汉字
               
                        </div>
                      </div>

                    
</div>
                <?php endif; ?> <?php endwhile; ?>  </div>
                    <!-- 结束循环  --> 
                  <div class="text-center m-t-lg m-b-lg">
                 
                    <ul class="pagination pagination-md">
                   
                    <?php $this->pageNav('&laquo; ', '&raquo;',1,'...',array('wrapClass'=>'pagination pagination-success','currentClass'=>'active')); ?>
            
                 
                    </ul>
                    
                  </div>

                </div>
                                     
 
<?php $this->need('sidebar.php'); ?>
          
<?php $this->need('footer.php');?>