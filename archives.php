<?php 
/**
 * archives
 * 
 * @package custom 
 * 
 */
 $this->need('header.php'); 
?> 


<section class="vbox"> 
 <section class="scrollable wrapper"> <div class="timeline">
<article class="timeline-item active"> <div class="timeline-caption"> <div class="panel bg-primary lt no-borders"> <div class="panel-body">  

<span class="h3 pull-left m-r-sm">归档</span><br><p>因为很重要所以要发两遍</p>
</div> </div> </div> </article>

<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->parse('
<article class="timeline-item"> <div class="timeline-caption"> <div class="panel panel-default"> <div class="panel-body"> <span class="arrow left"></span> <span class="timeline-icon"><i class="fa fa-file-text time-icon bg-info"></i></span> <span class="timeline-date">{year}-{month}-{day} </span> <div class="text-sm"><a href="{permalink}">{title}</a></div>  </div> </div> </div> </article>

<article class="timeline-item alt"> <div class="timeline-caption"> <div class="panel panel-default"> <div class="panel-body"> <span class="arrow right"></span> <span class="timeline-icon"><i class="fa fa-male time-icon bg-success"></i></span> <span class="timeline-date">{year}-{month}-{day}</span>  <h5><a href="{permalink}">{title}</a> </h5> </div> </div> </div> </article>

'); ?>

 <div class="timeline-footer"><a href="#"><i class="fa fa-plus time-icon inline-block bg-dark"></i> </a></div></article>
<div>

</section>

 <?php $this->need('footer.php');?>