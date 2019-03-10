<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
// 字数统计
function  art_count ($cid){
    $db=Typecho_Db::get ();
    $rs=$db->fetchRow ($db->select ('table.contents.text')->from ('table.contents')->where ('table.contents.cid=?',$cid)->order ('table.contents.cid',Typecho_Db::SORT_ASC)->limit (1));
    $text = preg_replace("/[^\x{4e00}-\x{9fa5}]/u", "", $rs['text']);
    echo mb_strlen($text,'UTF-8');
}
// 自动给链接加上blank标签
function themeInit($archive)
{
    if ($archive->is('single'))
    {
        $archive->content = image_class_replace($archive->content);
    }
}
function image_class_replace($content)
{ 
  $content = preg_replace('#<a(.*?) href="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)>#',
        '<a$1 href="$2$3"$5 target="_blank">', $content);
    return $content;
}
// 文章阅读次数含cookie
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
 $views = Typecho_Cookie::get('extend_contents_views');
        if(empty($views)){
            $views = array();
        }else{
            $views = explode(',', $views);
        }
if(!in_array($cid,$views)){
       $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
        }
    }
    echo $row['views'];
}

/* 后台配置 */
function themeConfig($form) {
    echo "<h2 style='text-align: center'>主题配置</h2>";

    // 自定义站点图标
    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('站点图标'), _t('填入 png 图片地址（<a>192x192px</a>），不填则使用默认图标'));
    $form -> addInput($favicon);

    // 自定义头像
    $avatar = new Typecho_Widget_Helper_Form_Element_Text('avatar', NULL, NULL, _t('头像'), _t('填入图片地址，不填则默认使用gravatar'));
    $form -> addInput($avatar);
    
    // ICP备案
    $icp = new Typecho_Widget_Helper_Form_Element_Text('icp', NULL, NULL, _t('ICP备案号') , _t('如网站已备案，请输入备案号'));
    $form->addInput($icp);

    // 公安备案
    $beian = new Typecho_Widget_Helper_Form_Element_Text('beian', NULL, NULL, _t('公安备案号') , _t('如网站已备案，请输入备案号'));
    $form->addInput($beian);

    $beianurl = new Typecho_Widget_Helper_Form_Element_Text('beianurl', NULL, NULL, _t('公安备案链接') , _t('请输入备案信息页面链接'));
    $form->addInput($beianurl);

    // 自定义JavaScript
    $tongji = new Typecho_Widget_Helper_Form_Element_Textarea('tongji', NULL,'统计代码', _t('统计代码'), _t('填入第三方统计代码或其它JavaScript代码'));
    $form->addInput($tongji);

    // 社交链接
    $social = new Typecho_Widget_Helper_Form_Element_Textarea('social', NULL,'社交链接', _t('社交链接'), _t('填入你的社交链接，使用font-awesome图标'));
    $form->addInput($social);
}
?>