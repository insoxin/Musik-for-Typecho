<?php 
/**
 * about
 * 
 * @package custom 
 * 
 */
 $this->need('header.php'); 
?> 
        <!-- /.aside -->
        <section id="content">
          <section class="vbox">
            <section class="scrollable wrapper">
                       
              <div class="row">
                <div class="col-lg-8">
                  <div class="row">
                    <div class="col-sm-6">
                      <section class="panel panel-default">
                        <header class="panel-heading bg-light no-border">
                          <div class="clearfix">
                            <a href="#" class="pull-left thumb-md avatar b-3x m-r">
                      <img <?php if ($this->options->logoUrl){ ?>src="<?php $this->options->logoUrl();?>"<?php }else{ ?>src="http://secure.gravatar.com/avatar/"<?php };?> alt="<?php $this->options->title();?>"/>
                            </a>
                            <div class="clear">
                              <div class="h3 m-t-xs m-b-xs">
                             <?php $this->author() ?>  
                                <i class="fa fa-circle text-success pull-right text-xs m-t-sm"></i>
                              </div>
                              <small class="text-muted"><?php $this->options->description() ?></small>
                            </div>
                          </div>
                        </header>
                        <div class="list-group no-radius alt">
                          <a class="list-group-item" href="tencent://AddContact/?fromId=45&fromSubId=1&subcmd=all&uin=<?php $this->options->qq(); ?>&website=<?php echo $SITE['title'];?>"  target="_blank">
                            <span class="badge bg-success">添加好友</span>
                            <i class="fa fa-comment icon-muted"></i> 
                            <b>QQ</b><span style="margin-left:10px;"><?php $this->options->qq(); ?></span>
                          </a>
                          <a class="list-group-item" href="mailto:<?php $this->author('mail'); ?> " target="_blank">
                            <span class="badge bg-info">博主邮箱</span>
                            <i class="fa fa-envelope icon-muted"></i> 
                            <b>Email</b><span style="margin-left:10px;"><?php $this->author('mail'); ?> </span>
                          </a>
                          <a class="list-group-item" href="<?php $this->options->weiboz(); ?>/<?php $this->options->weibo(); ?>" target="_blank">
                            <span class="badge bg-danger">博主微博</span>
                            <i class="fa fa-pinterest icon-muted"></i> 
                             <b>Weibo</b><span style="margin-left:10px;"><?php $this->options->weibo(); ?></span>
                          </a>
                        </div>
                      </section>
                      <section class="panel panel-info">
                       <div class="panel-body">
                          <a href="#" class="thumb pull-right m-l m-t-xs avatar">
                            <img src="https://q2.qlogo.cn/headimg_dl?dst_uin=192666378&spec=100" alt="...">
                            <i class="on md b-white bottom"></i>
                          </a>
                          <div class="clear">
                            <a href="#" class="text-info">@INSOXIN <i class="icon-twitter"></i></a>
                            <small class="block text-muted">2,415 followers / 225 tweets</small>
                            <a href="#" class="btn btn-xs btn-success m-t-xs">Follow</a>
                          </div>
                        </div>
									
							</section>
                    </div>
                    <div class="col-sm-6">                  
                      <section class="panel panel-default">
                       
                        
                          <img alt="每日一图" title="每日一图" src="<?php $this->options->tt(); ?>" style="height: 158px; width: 100%">
                          
                        
                      <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=4&type=category')
 ->parse('    <ul class="list-group no-radius">      <li class="list-group-item">
                            <span class="pull-right"> <i class="fa fa-comment-o icon-muted"></i></span>
                            <span class="label bg-primary">文章</span><a href="{permalink}">{title}
                           </li>
                          </a>    </ul> 
                          '); ?>
                     
                      </section>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <section class="panel panel-default">
                    <div class="panel-body">
                      <div class="clearfix text-center m-t">
                        <div class="inline">
                          <div class="easypiechart" data-percent="75" data-line-width="5" data-bar-color="#4cc0c1" data-track-Color="#f5f5f5" data-scale-Color="false" data-size="134" data-line-cap='butt' data-animate="1000">
                            <div class="thumb-lg">
                               <img <?php if ($this->options->logoUrl){ ?>src="<?php $this->options->logoUrl();?>"<?php }else{ ?>src="http://secure.gravatar.com/avatar/"<?php };?>  class="img-circle" alt="..."/>
                            </div>
                          </div>
                          <div class="h4 m-t m-b-xs"><?php $this->author() ?>  </div>
                         <!--  如果要修改下面small里面的内容,请固定在12字内,否则网站布局会乱哦~ -->
<small class="text-muted m-b"><span class="smalltxt">本博客已稳定运行<font color=red><strong><script language="JavaScript" type="text/javascript">
var urodz= new Date("11/11/2012");
var now = new Date();
var ile = now.getTime() - urodz.getTime();
var dni = Math.floor(ile / (1000 * 60 * 60 * 24));
document.write(+dni)
</script>
</strong></font>天
</small>
                        </div>                      
                      </div>
                    </div>
                    <footer class="panel-footer bg-info text-center"><?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
                      <div class="row pull-out">
                        <div class="col-xs-4">
                          <div class="padder-v">
                            <span class="m-b-xs h3 block text-white"><?php $stat->publishedPostsNum() ?></span>
                            <small class="text-muted">文章</small>
                          </div>
                        </div>
                        <div class="col-xs-4 dk">
                          <div class="padder-v">
                            <span class="m-b-xs h3 block text-white"><?php $stat->publishedCommentsNum() ?></span>
                            <small class="text-muted">评论</small>
                          </div>
                        </div>
                        <div class="col-xs-4">
                          <div class="padder-v">
                            <span class="m-b-xs h3 block text-white"> <?php $this->comments()->to($comments); ?>

	<?php $this->commentsNum(); ?>

</span>
                            <small class="text-muted">留言</small>
                          </div>
                        </div>
                      </div>
                    </footer>
                  </section>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <!-- chat -->
                  <section class="panel panel-default">
                    <header class="panel-heading">留言</header>
                    <section class="chat-list panel-body">
                      <article id="chat-id-1" class="chat-item left">
                        <a href="#" class="pull-left thumb-sm avatar"> <img <?php if ($this->options->logoUrl){ ?>src="<?php $this->options->logoUrl();?>"<?php }else{ ?>src="https://secure.gravatar.com/avatar/"<?php };?>  class="img-circle" alt="..."/></a>
                        <section class="chat-body">
                          <div class="panel b-light text-sm m-b-none">
                            <div class="panel-body">
                              <span class="arrow left"></span>
                              <p class="m-b-none">你有什么对我想说的吗?</p>
                            </div>
                          </div>
                          <small class="text-muted"><i class="fa fa-ok text-success"></i> 2秒前</small>
                        </section>
                      </article>
                      <article id="chat-id-2" class="chat-item right">
                        <a href="#" class="pull-right thumb-sm avatar"><img src="https://i.loli.net/2017/07/27/59797ffd726c4.jpg" class="img-circle" alt="..."></a>
                        <section class="chat-body">                      
                          <div class="panel bg-light text-sm m-b-none">
                            <div class="panel-body">
                              <span class="arrow right"></span>
                              <p class="m-b-none">请在下方留言！</p>
                            </div>
                          </div>
                          <small class="text-muted">1秒前</small>
                        </section>
                      </article>                          
                    </section>
                    <footer class="panel-footer">
                      <!-- chat form -->
                      <article class="chat-item" id="chat-form">
            
                       
<?php $this->need('liuyan.php'); ?>


                      </article>
                    </footer>
                  </section>
                  
                </div>
                <div class="col-lg-6">
                  <!-- .comment-list -->
                  <section class="comment-list block">

             <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true')->to($comments);//不含博主评论 ?>
        <?php //$this->widget('Widget_Comments_Recent')->to($comments);//包含博主评论版 ?>
        <?php while($comments->next()): ?>
                    <article id="comment-id-1" class="comment-item"> <?php
            //头像CDN by Rich
            $host = 'http://secure.gravatar.com'; //自定义头像CDN服务器
            $url = '/avatar/'; //自定义头像目录,一般保持默认即可
            $rating = Helper::options()->commentsAvatarRating;
            $hash = md5(strtolower($comments->mail));
            ?>


                      <a class="pull-left thumb-sm avatar">
                      <!--  <img src="<?php echo $avatar ?>"  class="img-circle" alt="..."/>  -->
<img <?php if ($this->options->logoUrl){ ?>src="<?php $this->options->logoUrl();?>"<?php }else{ ?>src="http://secure.gravatar.com/avatar/"<?php };?>  class="img-circle" alt="..."/>
                      </a>
                      <span class="arrow left"></span>
                      <section class="comment-body panel panel-default">
                        <header class="panel-heading bg-white">
                          <a href="#"></a>
                          <label class="label bg-info m-l-xs"><?php $comments->author(false); ?></label> 
                          <span class="text-muted m-l-sm pull-right">
                            <i class="fa fa-clock-o"></i>
                      <?php $comments->date('Y-m-d H:i'); ?>
                          </span>
                        </header>
                        <div class="panel-body">
                          <div style="font-size: 12px;"><a href="<?php $comments->permalink(); ?>" > <?php $comments->excerpt(100, '...'); ?></a>
                          <div class="comment-action m-t-sm">
                            <a href="#" data-toggle="class" class="btn btn-default btn-xs active">
                              <i class="fa fa-star-o text-muted text"></i>
                              <i class="fa fa-star text-danger text-active"></i> 
                              喜欢
                            </a>
                            <a target="_blank" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $comments->permalink(); ?>&title= <?php $comments->excerpt(35, '...'); ?>&summary=<?php $comments->excerpt(35, '...'); ?>" class="btn btn-default btn-xs">
                              <i class="fa fa-mail-reply text-muted"></i> 分享
                            </a>
		        
		               
		        
                          </div>
                        </div>
                      </section>
                    </article>
                 <?php endwhile; ?>

              
                    
                </div>
                
              </div>
              
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
      </section>
    </section>    
  </section>
<?php $this->need('baidu_js_push.php');?>
 <?php $this->need('footer.php');?>