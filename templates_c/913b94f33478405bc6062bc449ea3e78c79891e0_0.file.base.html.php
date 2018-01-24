<?php
/* Smarty version 3.1.30, created on 2018-01-23 20:19:06
  from "D:\wamp\www\goods_mvc\base.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a678aaade9244_27263127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '913b94f33478405bc6062bc449ea3e78c79891e0' => 
    array (
      0 => 'D:\\wamp\\www\\goods_mvc\\base.html',
      1 => 1516735131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a678aaade9244_27263127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155245a678aaadc5fb0_86871828', 'title');
?>
</title>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_312455a678aaadd1b47_84739221', 'public');
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76185a678aaadd9841_80730110', 'resources');
?>

	<style type="text/css">
		
		.manage-btn{
			margin: 10px auto;	
		}
		
		.table img, .img{
			margin: 5px;
			width: 100px;
		}
		
		.table{
			border: none;
		}
		
		input[type="button"]{
			display: inline-block;	
		}
		
	</style>
</head>
<body>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_306755a678aaade53c6_40504007', 'body');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_155245a678aaadc5fb0_86871828 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'public'} */
class Block_312455a678aaadd1b47_84739221 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<?php echo '<script'; ?>
 src="js/jquery.min.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/vue.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
	<?php
}
}
/* {/block 'public'} */
/* {block 'resources'} */
class Block_76185a678aaadd9841_80730110 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'resources'} */
/* {block 'body'} */
class Block_306755a678aaade53c6_40504007 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
