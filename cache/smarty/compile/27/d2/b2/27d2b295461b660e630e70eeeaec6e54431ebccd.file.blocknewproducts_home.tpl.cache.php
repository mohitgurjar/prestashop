<?php /* Smarty version Smarty-3.1.14, created on 2014-06-02 17:58:15
         compiled from "/home/ubuntu/prestashop/themes/default-bootstrap/modules/blocknewproducts/blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:800135804538c6ddfb122c5-89385293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27d2b295461b660e630e70eeeaec6e54431ebccd' => 
    array (
      0 => '/home/ubuntu/prestashop/themes/default-bootstrap/modules/blocknewproducts/blocknewproducts_home.tpl',
      1 => 1401709260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '800135804538c6ddfb122c5-89385293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
    'active_ul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_538c6ddfb39369_14795587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538c6ddfb39369_14795587')) {function content_538c6ddfb39369_14795587($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/ubuntu/prestashop/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_ul','assign'=>'active_ul'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts','active'=>$_smarty_tpl->tpl_vars['active_ul']->value), 0);?>

<?php }else{ ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane<?php if (isset($_smarty_tpl->tpl_vars['active_ul']->value)&&$_smarty_tpl->tpl_vars['active_ul']->value==1){?> active<?php }?>">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>