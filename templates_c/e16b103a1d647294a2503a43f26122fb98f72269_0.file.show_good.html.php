<?php
/* Smarty version 3.1.30, created on 2018-01-23 19:01:02
  from "D:\wamp\www\goods_mvc\views\good\show_good.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a67785ebda1f1_57362113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e16b103a1d647294a2503a43f26122fb98f72269' => 
    array (
      0 => 'D:\\wamp\\www\\goods_mvc\\views\\good\\show_good.html',
      1 => 1516730462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.html' => 1,
  ),
),false)) {
function content_5a67785ebda1f1_57362113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32995a67785eb8fe61_21696575', 'title');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_222405a67785ebd6372_86909845', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_32995a67785eb8fe61_21696575 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
具体商品展示<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_222405a67785ebd6372_86909845 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	<h1 class="h1">商品预览</h1>
	<table class="table show_good">

		<tr>
			<th>商品类型</th>
			<td><?php echo $_smarty_tpl->tpl_vars['good']->value['good_type'];?>
</td>
		</tr>
		<tr>
			<th>商品名称</th>
			<td><?php echo $_smarty_tpl->tpl_vars['good']->value['good_name'];?>
</td>
		</tr>
		<tr>
			<th>商品介绍</th>
			<td><?php echo $_smarty_tpl->tpl_vars['good']->value['good_desc'];?>
</td>
		</tr>
		<tr>
			<th>商品价格</th>
			<td><?php echo $_smarty_tpl->tpl_vars['good']->value['good_price'];?>
</td>
		</tr>
		<tr>
			<th>商品图片</th>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['good']->value['good_photos']) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['good']->value['good_photos'], 'good_photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['good_photo']->value) {
?>
						<img style='width:200px;' src='<?php echo $_smarty_tpl->tpl_vars['good_photo']->value;?>
' />
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<?php }?>
			
			</td>
		</tr>

	</table>
	<a href="index.php" class="btn btn-info">返回</a>
</div>
<?php
}
}
/* {/block 'body'} */
}
