 <div class="col-sm-3">

    <?php if (!empty($this->options->sidebarBlock) && in_array('gg', $this->options->sidebarBlock)): ?>
  <!--  公告 -->
<div class="alert alert-warning alert-block"> <button type="button" class="close" data-dismiss="alert">×</button> <h4><i class="fa fa-bell-alt"></i>随想：</h4><p><?php $this->options->gg(); ?> </p></div>

  <!--  公告 -->
   <?php endif; ?> <form id="search" method="post" action="./" class="" role="search"> <div class="form-group clearfix m-b-none"> <div class="input-group m-t m-b"> <span class="input-group-btn"> <button type="submit" name="search" class="btn btn-sm bg-empty text-muted btn-icon"><i class="fa fa-search"></i></button> </span>

 <input type="text" name="s"  class="form-control input-sm bg-empty b-b b-dark no-border"
 placeholder="Search members"> </div> </div> </form>
                   <!--  最近评论 -->
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
                <div class="panel panel-success portlet-item">
                    <div class="panel-heading">最近评论</div>
                    <div class="panel-body">
                   
                      <article class="media">
                     
                    <div class="media-body">   

<?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true')->to($comments);//不含博主评论 ?>
        <?php //$this->widget('Widget_Comments_Recent')->to($comments);//包含博主评论版 ?>
        <?php while($comments->next()): ?> <i class="fa fa-angle-right"></i>
           <a href="<?php $comments->permalink(); ?>" class="font-semibold"><?php $comments->author(false); ?>: <?php $comments->excerpt(35, '...'); ?></a><br>
        <?php endwhile; ?> 
                        </div>
                      </article>
                    
                    </div>
                  </div>    
                   <?php endif; ?> 

  <!--  最新文章 -->
               <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
                <div class="panel panel-info portlet-item">
                    <div class="panel-heading">最新文章</div>
                    <div class="panel-body">
              

                      <article class="media">
                       
            
                        <div class="media-body">                    
                          <?php $this->widget('Widget_Contents_Post_Recent')
 ->parse(' <a href="{permalink}" class="font-semibold">{title}</a><br>'); ?>
 </div>
                    
                      </article>
                    
               
                    </div>
                  </div>
                    <?php endif; ?>
                  <!-- ./ 最新文章 -->
    <!--  文章分类 -->
                 <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
              
                <div class="panel panel-success portlet-item"><div class="panel-heading">全部分类</div>
              <div class="panel-body"><div class="nav-primary"> <?php $this->widget('Widget_Metas_Category_List')
->parse('  <li class="list-group-item">  <span class="badge pull-right">{count} </span>  <a href="{permalink}" >{name}</a> </li>
                   '); ?>
           </div>  </div> </div>

                 <?php endif; ?>    
                  <!-- ./ 文章分类 --> <?php if (!empty($this->options->sidebarBlock) && in_array('tag', $this->options->sidebarBlock)): ?>
         <!-- 文章标签 -->
<div class="tags m-b-lg l-h-2x"> <?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=50')->to($tags); ?>
<?php if($tags->have()): ?>
    <?php while ($tags->next()): ?><span class="label bg-light">
    <a style="color:rgb(<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>,
           <?php echo(rand(0,255)); ?>)" href="<?php $tags->permalink();?>">
         <?php $tags->name(); ?></a></span>
    <?php endwhile; ?>
<?php endif; ?>

</div>
          <!-- ./ 文章标签 --><?php endif; ?>
          
                  <!--  友情链接 -->
       <?php if ($this->is('index')) : ?>
                <div class="panel panel-default">
                    <div class="panel-heading">友情链接</div>
                  <div class="panel-body">

       <?php $this->options->FriendLink() ?>
                 </div></div>
                   <?php else: ?>

<?php endif; ?>  
      
                  <!-- ./ 友情链接 -->
                  
									<!-- <div class="tags m-b-lg l-h-2x">
										<a href="#" class="label bg-primary">Bootstrap</a> <a href="#"
											class="label bg-primary">Application</a> <a href="#"
											class="label bg-primary">Apple</a> <a href="#"
											class="label bg-primary">Less</a> <a href="#"
											class="label bg-primary">Theme</a> <a href="#"
											class="label bg-primary">Wordpress</a>
									</div> -->
									                                    
 
                    
                    <!--  结束循环 -->
<?php include_once("baidu_js_push.php") ?>
                   <!--  <div class="line"></div>
                    <article class="media m-t-none">
                      <a class="pull-left thumb thumb-wrapper m-t-xs">
                        <img src="<?php $this->options->themeUrl('images/m2.jpg'); ?>">
                      </a>
                      <div class="media-body">                        
                        <a href="#" class="font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                        <div class="text-xs block m-t-xs"><a href="#">Design</a> 2 hours ago</div>
                      </div>
                    </article>
                    <div class="line"></div>
                    <article class="media m-t-none">
                      <a class="pull-left thumb thumb-wrapper m-t-xs">
                        <img src="<?php $this->options->themeUrl('images/m3.jpg'); ?>">
                      </a>
                      <div class="media-body">                        
                        <a href="#" class="font-semibold">Sed diam nonummy nibh euismod tincidunt ut laoreet</a>
                        <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago</div>
                      </div> 
                    </article>-->
                  </div>
                </div>
              </div>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
      </section>
    </section>    
  </section>