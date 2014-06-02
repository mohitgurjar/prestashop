<?php /* Smarty version Smarty-3.1.14, created on 2014-06-02 11:51:58
         compiled from "/home/ubuntu/prestashop/admin/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1432289165538c655e2046d3-25074938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88e393740f0a3b5474bee25874f81517f5f4b10d' => 
    array (
      0 => '/home/ubuntu/prestashop/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1401709259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1432289165538c655e2046d3-25074938',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_538c655e2092f6_09818034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538c655e2092f6_09818034')) {function content_538c655e2092f6_09818034($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>