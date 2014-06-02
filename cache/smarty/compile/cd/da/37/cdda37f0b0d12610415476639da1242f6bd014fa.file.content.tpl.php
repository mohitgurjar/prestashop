<?php /* Smarty version Smarty-3.1.14, created on 2014-06-02 11:51:56
         compiled from "/home/ubuntu/prestashop/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1222861398538c655c6fa4b4-47855244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdda37f0b0d12610415476639da1242f6bd014fa' => 
    array (
      0 => '/home/ubuntu/prestashop/admin/themes/default/template/content.tpl',
      1 => 1401709259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1222861398538c655c6fa4b4-47855244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_538c655c7055a3_88077177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538c655c7055a3_88077177')) {function content_538c655c7055a3_88077177($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>