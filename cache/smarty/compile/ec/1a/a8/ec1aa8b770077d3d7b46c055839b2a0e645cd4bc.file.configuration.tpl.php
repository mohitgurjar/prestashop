<?php /* Smarty version Smarty-3.1.14, created on 2014-06-02 11:51:51
         compiled from "/home/ubuntu/prestashop/themes/default-bootstrap/modules/carriercompare/template/configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227061673538c6557be7b56-24748996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec1aa8b770077d3d7b46c055839b2a0e645cd4bc' => 
    array (
      0 => '/home/ubuntu/prestashop/themes/default-bootstrap/modules/carriercompare/template/configuration.tpl',
      1 => 1401709260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227061673538c6557be7b56-24748996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_error' => 0,
    'refresh_method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_538c6557c2b301_33028070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538c6557c2b301_33028070')) {function content_538c6557c2b301_33028070($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['display_error']->value)){?>
	<?php if ($_smarty_tpl->tpl_vars['display_error']->value){?>
		<div class="error"><?php echo smartyTranslate(array('s'=>'An error occured during form validation.','mod'=>'carriercompare'),$_smarty_tpl);?>
</div>
	<?php }else{ ?>
		<div class="conf"><?php echo smartyTranslate(array('s'=>'Configuration updated','mod'=>'carriercompare'),$_smarty_tpl);?>
</div>
	<?php }?>
<?php }?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8', true);?>
">
	<fieldset>
		<div class="warn">
			<?php echo smartyTranslate(array('s'=>'This module is only available during the standard five-step checkout process. The carrier list has already been defined for one-page checkout. ','mod'=>'carriercompare'),$_smarty_tpl);?>
.
		</div>
		<legend><?php echo smartyTranslate(array('s'=>'Global Configuration','mod'=>'carriercompare'),$_smarty_tpl);?>
</legend>
		
		<label for="refresh_method">Refresh carrier list method</label>
		<div class="margin-form">
			<select id="refresh_method" name="refresh_method">
				<option value="0" <?php if ($_smarty_tpl->tpl_vars['refresh_method']->value==0){?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Anytime','mod'=>'carriercompare'),$_smarty_tpl);?>
</option>
				<option value="1" <?php if ($_smarty_tpl->tpl_vars['refresh_method']->value==1){?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'The required information is set.','mod'=>'carriercompare'),$_smarty_tpl);?>
</option>
			</select>
			<p><?php echo smartyTranslate(array('s'=>'How would you like to refresh information for a customer?','mod'=>'carriercompare'),$_smarty_tpl);?>
</p>
		</div>
		
		<div class="margin-form">
			<input name="setGlobalConfiguration" type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'Submit','mod'=>'carriercompare'),$_smarty_tpl);?>
">
		</div>
	</fieldset>
</form><?php }} ?>