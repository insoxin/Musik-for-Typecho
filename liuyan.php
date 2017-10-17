 <?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
           
                   <div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h4 class="m-t-lg m-b"><?php $this->commentsNum(_t('暂无留言'), _t('仅有一条留言'), _t('已有 %d 条留言')); ?></h4>

   <?php $comments->listComments(); ?>
    <?php $comments->pageNav('&laquo; ', '&raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h4 class="m-t-lg m-b"><?php _e('添加新留言'); ?></h4>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
  <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
                    <div class="form-group pull-in clearfix">
                      <div class="col-sm-6">
                        <label>称呼</label>
                        <input type="text" name="author" id="author"  class="form-control">
                      </div>
                      <div class="col-sm-6">
                        <label >邮箱</label>
                        <input type="email" name="mail" id="mail"  class="form-control" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>>
                      </div>
                    

                      </div>
<?php endif; ?>
                    <div class="form-group">
                   
                      <textarea class="form-control" rows="5"cols="50" name="text" id="textarea" class="textarea" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('misubmit').click();return false};" required ><?php $this->remember('text'); ?></textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success">提交</button>
                    </div>
                  </form>
                </div>
  
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?> 


</div>