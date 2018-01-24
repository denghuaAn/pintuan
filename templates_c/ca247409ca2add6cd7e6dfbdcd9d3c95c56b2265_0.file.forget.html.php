<?php
/* Smarty version 3.1.30, created on 2018-01-23 20:11:29
  from "D:\wamp\www\goods_mvc\views\admin\forget.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6788e101d257_12069837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca247409ca2add6cd7e6dfbdcd9d3c95c56b2265' => 
    array (
      0 => 'D:\\wamp\\www\\goods_mvc\\views\\admin\\forget.html',
      1 => 1516734687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.html' => 1,
  ),
),false)) {
function content_5a6788e101d257_12069837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110835a6788e0f24cc8_80549144', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_310165a6788e0f2c9d6_89920666', 'resources');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_302735a6788e10193d7_54037903', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_110835a6788e0f24cc8_80549144 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
找回密码<?php
}
}
/* {/block 'title'} */
/* {block 'resources'} */
class Block_310165a6788e0f2c9d6_89920666 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" type="text/css" href="css/login.css"/>
<?php
}
}
/* {/block 'resources'} */
/* {block 'body'} */
class Block_302735a6788e10193d7_54037903 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1 class="text-center" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
<div id="forget">
	<h1>密码找回</h1>
	
	<?php if ($_smarty_tpl->tpl_vars['password']->value) {?>
	<h1>您的密码是：<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
</h1>
	<?php }?>
	
	<?php if (!$_smarty_tpl->tpl_vars['input_username']->value) {?>
	<form action="index.php?controller=admin&action=forget" method="post">
		<span>你的用户名是啥：</span><input class="bir" type="text" required="required" placeholder="请慎重输入" name="username"><br />
		<button class="but" type="submit">获取密保问题</button>
	</form>
	<?php } else { ?>
	<form method="post" action="index.php?controller=admin&action=forget">
		<span>你的用户名是啥：</span>
		<input class="bir" type="text" 
			required="required" contenteditable="false" name="username" value="<?php echo $_smarty_tpl->tpl_vars['input_username']->value;?>
">
			<br />
			
		<span><strong>问题：</strong><?php echo $_smarty_tpl->tpl_vars['question']->value;?>
：</span>
		<input class="hei" 
			type="password" required="required" placeholder="请输入你的密保答案" name="answer">

		<button class="but" type="submit">提交</button>
	</form>
	<?php }?>
</div>


<?php
}
}
/* {/block 'body'} */
}
