<?php /* Smarty version Smarty-3.1.14, created on 2014-06-02 17:58:15
         compiled from "/home/ubuntu/prestashop/themes/default-bootstrap/modules/homefeatured/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:589354222538c6ddfa44654-01505316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8483b9d94c1c9f0e6790a467be9223c8f89a4f3e' => 
    array (
      0 => '/home/ubuntu/prestashop/themes/default-bootstrap/modules/homefeatured/tab.tpl',
      1 => 1401709260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '589354222538c6ddfa44654-01505316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_538c6ddfa52cb8_85111733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538c6ddfa52cb8_85111733')) {function content_538c6ddfa52cb8_85111733($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/ubuntu/prestashop/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>