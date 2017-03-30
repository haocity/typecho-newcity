<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址'));
    $form->addInput($logoUrl);	
    $oneimgSet = new Typecho_Widget_Helper_Form_Element_Radio('oneimgSet',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'able', _t('一图开关设置'), _t('默认开启 oneimg.haotown.cn提供服务'));
    $form->addInput($oneimgSet);

    $srollSet = new Typecho_Widget_Helper_Form_Element_Radio('srollSet',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'able', _t('滚动加载设置'), _t('默认开启 页面到达底部时加载下一页'));
    $form->addInput($srollSet);

    $codeHighline = new Typecho_Widget_Helper_Form_Element_Radio('codeHighline',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('代码高亮设置'), _t('默认禁止，启用后用代码&lt;pre&gt;&lt;code data-language="JavaScript"&gt;&lt;/code&gt;&lt;/pre&gt;包裹的代码将会高亮 语言可支持 css, generic, html, javascript, json, php'));
    $form->addInput($codeHighline);

    $socialweibo = new Typecho_Widget_Helper_Form_Element_Text('socialweibo', NULL, NULL, _t('输入微博链接'), _t('在这里输入微博链接 留空则不显示'));
    $form->addInput($socialweibo);
    $socialqq = new Typecho_Widget_Helper_Form_Element_Text('socialqq', NULL, NULL, _t('输入QQ链接'), _t('在这里输入QQ链接例子:http://wpa.qq.com/msgrd?v=3&uin=123456&site=qq&menu=yes  123456为你的QQ'));
    $form->addInput($socialqq);
    $socialgithub = new Typecho_Widget_Helper_Form_Element_Text('socialgithub', NULL, NULL, _t('输入GitHub链接'), _t('在这里输入GitHub链接,留空则不显示'));
    $form->addInput($socialgithub);
    $socialsteam = new Typecho_Widget_Helper_Form_Element_Text('socialsteam', NULL, NULL, _t('输入Steam链接'), _t('在这里输入steam链接,留空则不显示'));
    $form->addInput($socialsteam);

}


function is_pjax(){   
    return array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'];   
}

