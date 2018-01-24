<?php
/* Smarty version 3.1.30, created on 2018-01-24 02:16:18
  from "D:\wamp\www\goods_mvc\views\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a67de620cbe67_40088710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d691274d6d899a044e52c368ea658feb89998e2' => 
    array (
      0 => 'D:\\wamp\\www\\goods_mvc\\views\\admin\\login.html',
      1 => 1516756575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.html' => 1,
  ),
),false)) {
function content_5a67de620cbe67_40088710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_278245a67de61f33634_04475320', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59295a67de61f3b339_86383159', 'public');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27345a67de62000c33_44559772', 'resources');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164635a67de620c4160_51852826', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_278245a67de61f33634_04475320 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
找回密码<?php
}
}
/* {/block 'title'} */
/* {block 'public'} */
class Block_59295a67de61f3b339_86383159 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'public'} */
/* {block 'resources'} */
class Block_27345a67de62000c33_44559772 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" type="text/css" href="css/login.css"/>
<?php echo '<script'; ?>
 src="js/tankuang.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'resources'} */
/* {block 'body'} */
class Block_164635a67de620c4160_51852826 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div>
		<div id="login">
			<h1 style="color: red;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
			<h1>Login</h1>
			<form action="index.php?controller=admin&action=login" method="post">
				<input type="text" class="yhm" placeholder="用户名" name="username" />
				<input type="password" class="mm"placeholder="密码" name="password" />
				<a href="index.php?controller=admin&action=register">注册</a>
				<a href="index.php?controller=admin&action=forget">忘记密码?</a>
				<button class="but" type="submit">登录</button>
			</form>
		</div>
		<!--弹出框-->
		<!--<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
		<div id="box">
			<div class="cuowu" style="">
				<h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
				<input type="button" value="点击确定退出" class="but" id="btn1">
			</div>
			<div class="zz"></div>
			<?php echo '<script'; ?>
 src="js/tankuang.js" type="text/javascript" charset="utf-8">
				
			<?php echo '</script'; ?>
>
		</div>
		<?php }?>-->
	</div>
<?php
}
}
/* {/block 'body'} */
}
