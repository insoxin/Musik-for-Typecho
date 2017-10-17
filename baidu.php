<php>
    $post_href_1="$article->$this->permalink()";        
    $url='http://www.baidu.com/s?wd='.$post_href_1;
    $curl=curl_init();
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
    $rs=curl_exec($curl);
    curl_close($curl);

    if(!strpos($rs,'没有找到'))
        {    echo '<a target="_blank" title="点击查看" rel="external nofollow" href="http://www.baidu.com/s?wd='.$article->$this->permalink(). '">;百度已收录</a>';}
    else
        {    echo '<a target="_blank" title="点击提交，谢谢！" rel="external nofollow" style="color:red;" href="http://zhanzhang.baidu.com/sitesubmit/index?sitename=' . $post_href_1 . '">;百度未收录</a>';}
</php> 