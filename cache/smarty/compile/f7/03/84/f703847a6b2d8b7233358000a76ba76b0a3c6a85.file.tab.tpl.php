<?php /* Smarty version Smarty-3.1.14, created on 2014-06-02 11:51:55
         compiled from "/home/ubuntu/prestashop/themes/default-bootstrap/modules/blockbestsellers/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192925209538c655b017d77-78840971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f703847a6b2d8b7233358000a76ba76b0a3c6a85' => 
    array (
      0 => '/home/ubuntu/prestashop/themes/default-bootstrap/modules/blockbestsellers/tab.tpl',
      1 => 1401709260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192925209538c655b017d77-78840971',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_538c655b02a4e6_91740317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538c655b02a4e6_91740317')) {function content_538c655b02a4e6_91740317($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/ubuntu/prestashop/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers"><?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></li><?php }} ?>