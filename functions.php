<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {

  //网站LOGO
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, 'https://ooo.0o0.ooo/2017/07/08/59602488569a1.png', _t('站点LOGO地址'), _t('logo头像地址，不填写默认调用博主邮箱头像（极有可能被墙的说），这个建议用正方形的图片如500*500，否则有些地方会显示的很奇怪√'));
    $form->addInput($logoUrl);

 $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('gg' => _t('打开公告'),'ShowRecentPosts' => _t('显示最新文章'),
'ShowCategory' => _t('显示分类'),
	'ShowRecentComments' => _t('显示最近回复'),'tag' => _t('显示文章标签'),
'Showt' => _t('显示文章缩略图'),),
    array('ShowRecentPosts','ShowCategory' , 'ShowRecentComments', 'tag', 'Showt'), _t('侧边栏显示'),_t('缩略图开启后会获取文章中第一个图片，如果没有图片则会显示下方设置的默认图片地址'));
    $form->addInput($sidebarBlock->multiMode());
//设置
$slimg = new Typecho_Widget_Helper_Form_Element_Select('slimg', array(
        'showon'=>'有图文章显示缩略图，无图文章随机显示缩略图',
        'Showimg' => '有图文章显示缩略图，无图文章只显示一张固定的缩略图',      
        'showoff' => '有图文章显示缩略图，无图文章则不显示缩略图',
        'allsj' => '所有文章一律显示随机缩略图',
        'guanbi' => '关闭所有缩略图显示'
    ), 'showon',
    _t('缩略图设置'), _t('默认选择“有图文章显示缩略图，无图文章随机显示缩略图”'));
    $form->addInput($slimg->multiMode());
//缩略图尺寸
    $cc = new Typecho_Widget_Helper_Form_Element_Text('cc', NULL, '20%', _t('缩略图大小%'), _t('缩略图有从上向下截取，推荐20%或者填入30%，手机电脑效果都很好，默认20%，提示：填100%你会后悔的（>V<）'));
 $form->addInput($cc);

//关于
    $ab = new Typecho_Widget_Helper_Form_Element_Text('ab', NULL, 'about.html', _t('关于独立页面地址'), _t('新建独立页面，引入about模板，这里就填加独立页面的后缀地址,如blog.isoyu.ccom/about.html就填about.html'));
 $form->addInput($ab);

//视频分类
    $sp = new Typecho_Widget_Helper_Form_Element_Text('sp', NULL, 'category/video', _t('视频分类页地址'), _t('这里添加视频分类的超链接后缀地址，网址如/index.php/category/video就在这里添加index.php/category/video即可'));
 $form->addInput($sp);
//归档
    $gd = new Typecho_Widget_Helper_Form_Element_Text('gd', NULL, '/guig.html', _t('归档页地址'), _t('新建独立页面，引入archives模板，这里添加归档独立页面的超链接后缀地址，网址如/index.php/guig.html就在这里添加index.php/guig.html即可'));
 $form->addInput($gd);

//公告
    $gg = new Typecho_Widget_Helper_Form_Element_Text('gg', NULL, '姬长信', _t('公告'), _t('写入全局公告内容'));
 $form->addInput($gg);

    //博主qq
    $qq = new Typecho_Widget_Helper_Form_Element_Text('qq', NULL, '192666378', _t('博主QQ'), _t('在这里填入博主的QQ号码如：192666378'));
    $form->addInput($qq);
  //博主微博
    $weiboz = new Typecho_Widget_Helper_Form_Element_Text('weiboz', NULL, '//weibo.com', _t('博主所属微博'), _t('在这里填入博主所属微博，新浪填写//weibo.com腾讯微博就填http://t.qq.com等，如我的微博地址是：//weibo.com/3461828744那么就填写//weibo.com'));
    $form->addInput($weiboz);
   //博主微博
    $weibo = new Typecho_Widget_Helper_Form_Element_Text('weibo', NULL, '3461828744', _t('博主微博'), _t('在这里填入博主的微博地址，如我的微博地址是：//weibo.com/3461828744那么就填写3461828744'));
    $form->addInput($weibo);
//qq空间签名档
    $qqqm = new Typecho_Widget_Helper_Form_Element_Text('qqqm', NULL, 'https://r.qzone.qq.com/cgi-bin/cgi_get_user_pic?openid=0000000000000000000000003AB0A22A&pic=8.jpg&key=f942d830b2433150389a5c77fd521e63', _t('QQ空间签名档
'), _t(' <a href="https://connect.qq.com/intro/signature" target="_blank">获取KEY地址</a> (src后双引号的全部内容)'));
    $form->addInput($qqqm);
//关于界面展示图
    $tt = new Typecho_Widget_Helper_Form_Element_Text('tt', NULL, 'https://api.isoyu.com/bing_images.php', _t('关于界面展示图
'), _t(' 填入图片地址，建议图片高度158px'));
    $form->addInput($tt);
 //建站时间
    $time = new Typecho_Widget_Helper_Form_Element_Text('time', NULL, '11,11,2012', _t('博客成立时间'), _t('在这里填入博客的成立时间,格式要求“月,日,年”，如填入“11,11,2012”,注意逗号是英文输入法下的逗号'));
    $form->addInput($time);
    //友情链接
    $FriendLink = new Typecho_Widget_Helper_Form_Element_Textarea('FriendLink', NULL,'<a style="margin-bottom: 5px;" href="https://blog.isoyu.com" class="btn btn-s-md btn-default"  target="_blank">姬长信</a>', _t('友情链接'), _t('每条一行，按照输入框里面格式。。'));
    $form->addInput($FriendLink);
   
   //统计代码
$tongji = new Typecho_Widget_Helper_Form_Element_Textarea('tongji', NULL, '统计代码', _t('统计代码'), _t(''));
$form->addInput($tongji);

}


function getFriendWall(){
   $period = time() - 99999999999999999999999; // 单位: 秒, 时间范围: 2592000为30天
   $db = Typecho_Db::get();
   $sql = $db->select('COUNT(author) AS cnt', 'author', 'url', 'mail')
   ->from('table.comments')
   ->where('created > ?', $period )
   ->where('status = ?', 'approved')
   ->where('type = ?', 'comment')          
   ->where('authorId = ?', '0')
   ->where('mail != ?', '')   //排除自己上墙
   ->group('author')
   ->order('cnt', Typecho_Db::SORT_DESC)
   ->limit('50');    //读取几位用户的信息
   $result = $db->fetchAll($sql);
$mostactive = "";
$my_array=array('www','0','1','2'); //我自定义的随机一个头像服务器,减少同时往一个服务器发起多次请求
   if (count($result) > 0) {
       foreach ($result as $value) {
           $mostactive .= '<li><a href="' . $value['url'] . '" title="' . $value['author'] . ':' . $value['cnt'] . '℃" target="_blank" rel="nofollow">';
           $mostactive .= '<img class="avatar" src="https://'.$my_array[rand(0,3)].'.gravatar.com/avatar/'.md5(strtolower($value['mail'])).'?s=40&d=&r=G"/></a></li>';
       }
       echo $mostactive;
   }
}
//判断内容页是否百度收录

function baidu_record() {
$url='https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 

if(checkBaidu($url)==1)
{echo "百度已收录";
}
else
{echo "<a style=\"color:red;\" rel=\"external nofollow\" title=\"点击提交收录！\" target=\"_blank\" href=\"http:////zhanzhang.baidu.com/sitesubmit/index?sitename=$url\">百度未收录</a>";}
}
  function checkBaidu($url) { 
    $url = 'http://www.baidu.com/s?wd=' . urlencode($url); 
    $curl = curl_init(); 
    curl_setopt($curl, CURLOPT_URL, $url); 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
    $rs = curl_exec($curl); 
    curl_close($curl); 
    if (!strpos($rs, '没有找到')) { //没有找到说明已被百度收录 
        return 1; 
    } else { 
        return -1; 
    } 
}
//统计子数
function  art_count ($cid){
$db=Typecho_Db::get ();
$rs=$db->fetchRow ($db->select ('table.contents.text')->from ('table.contents')->where ('table.contents.cid=?',$cid)->order ('table.contents.cid',Typecho_Db::SORT_ASC)->limit (1));
echo mb_strlen($rs['text'], 'UTF-8');
}
/**阅读量统计*/
function get_post_view($archive)
{
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
       $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 23))->where('cid = ?', $cid));
    }
    echo $row['views'];
}
/** 输出文章缩略图 */
function showThumbnail($widget)
{ 
    // 当文章无图片时的默认缩略图
    $dir = './usr/themes/isoyu/img/sj/';//随机缩略图目录
    $n=sizeof(scandir($dir))-2;
    if($n <= 0){
    $n=99;
    }// 异常处理，干掉自动判断图片数量的功能，切换至手动
    $rand = rand(1,$n); 
    // 随机 n张缩略图
 
    $random = $widget->widget('Widget_Options')->themeUrl . '/img/sj/' . $rand . '.jpg'; // 随机缩略图路径
if(Typecho_Widget::widget('Widget_Options')->slimg && 'Showimg'==Typecho_Widget::widget('Widget_Options')->slimg
){
  $random = $widget->widget('Widget_Options')->themeUrl . '/img/mr.png'; //无图时只显示固定一张缩略图
}

$cai = '';//这里可以添加图片后缀，例如七牛的缩略图裁剪规则，这里默认为空
    $attach = $widget->attachments(1)->attachment;
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i'; 
  $patternMD = '/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|png))/i';
    $patternMDfoot = '/\[.*?\]:\s*(http(s)?:\/\/.*?(jpg|png))/i';
if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }

//如果是内联式markdown格式的图片
  else   if (preg_match_all($patternMD, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }
    //如果是脚注式markdown格式的图片
    else if (preg_match_all($patternMDfoot, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }

 else
if ($attach && $attach->isImage) {

$ctu = $attach->url.$cai;
    } 
else 

if ($widget->tags) {
foreach ($widget->tags as $tag) {

    $ctu = './usr/themes/isoyu/img/tag/' . $tag['slug'] . '.jpg';

    if(is_file($ctu))
    { 
$ctu = $widget->widget('Widget_Options')->themeUrl . '/img/tag/' . $tag['slug'] . '.jpg';
    }
    else
 {
       $ctu = $random;
    }
break;
}
}
else {
$ctu = $random;
}
if(Typecho_Widget::widget('Widget_Options')->slimg && 'showoff'==Typecho_Widget::widget('Widget_Options')->slimg
){
if($widget->fields->thumb){$ctu = $widget->fields->thumb;}
if($ctu== $random)
echo '';
else
if($widget->is('post')||$widget->is('page')){
echo $ctu;
}else{
echo '<img src="'
.$ctu.
'">';
}
}else{
if($widget->fields->thumb){$ctu = $widget->fields->thumb;}
  if(!$widget->is('post')&&!$widget->is('page')){
if(Typecho_Widget::widget('Widget_Options')->slimg && 'allsj'==Typecho_Widget::widget('Widget_Options')->slimg
){$ctu = $random;}
}
echo $ctu;
}
}
// 自定义关键字
function themeFields($layout) {
    $thumb = new Typecho_Widget_Helper_Form_Element_Text('thumb', NULL, NULL, _t('自定义缩略图'), _t('输入缩略图地址(仅文章有效)'));
    $layout->addItem($thumb);
}
/** 输出文章缩略图 */
//自定义评论列表区域
function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }

    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>

<style>

#comments .page-navigator{text-align:center;}
#comments .page-navigator li{display:inline-block;margin:0 4px;}
#comments .page-navigator li a{background:#4cb6cb;color:#fff;display:block;padding:0 16px;line-height:42px;border-radius:4px;}
#comments .page-navigator .current a,#comments .page-navigator a:hover{background:#009ACD;}

.comment-list,.comment-list ol{margin:0;padding:0;list-style:none}
.comment-list{margin-top:-1px}
.respond p{margin:10px 0}
.respond h3{margin:12px 0 0 0}
.comment-list li{padding:15px 0 0}
.comment-list li .comment-reply{float:right;margin-top:-39px;padding:0 10px;border:1px solid #ccc;font-size:.92857em}
.comment-meta a{color:#999;font-size:.92857em}
.comment-author{display:block;margin-bottom:3px;color:#444}
.comment-author .avatar{float:left;margin:1px 10px 0 0;padding:1px;border:1px solid #ddd;border-radius:50%}
.comment-author .avatar:hover{float:left;margin:1px 10px 0 0;padding:1px;border:1px solid #3c3;border-radius:50%}
.comment-author cite{font-weight:700;font-style:normal}
.comment-list .respond{margin-top:15px;border-top:1px solid #aaa}
.comment-body .respond{margin:0 0 25px;border:0}
.respond .cancel-comment-reply{float:right;padding:0 10px;border:1px solid #ccc;border-top:0;border-bottom:0;background:#ddd;font-size:14px}
#comment-form label{position:absolute;display:block;margin:6px;color:#888}
#comment-form input{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:5px 6px 5px 45px;height:32px;border:solid 1px #d4d4d4;background:#fdfdfd;line-height:16px;-ms-box-sizing:border-box}
.comment-children{padding-left:30px}
.comment-children .comment-children{padding-left:0}
.comment-content{overflow:hidden;margin-right:50px}
</style>



<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php 
if ($comments->levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>">
    <div id="<?php $comments->theId(); ?>">
        <div class="comment-author">
            <?php
            //头像CDN by Rich
            $host = 'https://secure.gravatar.com'; //自定义头像CDN服务器
            $url = '/avatar/'; //自定义头像目录,一般保持默认即可
            $size = '32'; //自定义头像大小
            $rating = Helper::options()->commentsAvatarRating;
            $hash = md5(strtolower($comments->mail));
            $avatar = $host . $url . $hash . '?s=' . $size . '&r=' . $rating . '&d=';
            ?>
            <img class="avatar" src="<?php echo $avatar ?>" alt="<?php echo $comments->author; ?>" width="<?php echo $size ?>" height="<?php echo $size ?>" />
            <cite class="fn"><?php $comments->author(); ?></cite>
        </div>
        <div class="comment-meta">
            <a href="<?php $comments->permalink(); ?>"><?php $comments->date('Y-m-d H:i'); ?></a>
            <span class="comment-reply"><?php $comments->reply(); ?></span>
        </div>
        <?php $comments->content(); ?>
    </div>
<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
    </div>
<?php } ?>
</li>
<?php }