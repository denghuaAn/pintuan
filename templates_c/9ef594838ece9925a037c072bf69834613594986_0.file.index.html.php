<?php
/* Smarty version 3.1.30, created on 2018-01-23 21:33:29
  from "D:\wamp\www\goods_mvc\views\good\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a679c19de2618_13214263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ef594838ece9925a037c072bf69834613594986' => 
    array (
      0 => 'D:\\wamp\\www\\goods_mvc\\views\\good\\index.html',
      1 => 1516739608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base.html' => 1,
  ),
),false)) {
function content_5a679c19de2618_13214263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_246495a679c19d6d2f9_15361092', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_279825a679c19d74ff1_66596537', 'resources');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_323675a679c19dda919_23947369', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_246495a679c19d6d2f9_15361092 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
商品后台管理<?php
}
}
/* {/block 'title'} */
/* {block 'resources'} */
class Block_279825a679c19d74ff1_66596537 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="js/index.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'resources'} */
/* {block 'body'} */
class Block_323675a679c19dda919_23947369 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" id="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">删除商品确认</h4>
			</div>
			<div class="modal-body">
				<p>是否确认删除所选商品？</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="sure_btn">确定</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
			</div>
		</div>
	</div>
</div>

<form class="modal fade" id="change_dialog" enctype="multipart/form-data">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">修改商品信息</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="change_good_type">商品类型</label>
					<input type="text" id="change_good_type" name="good_type" class="form-control"/>
				</div>	
				<div class="form-group">
					<label for="change_good_name">商品名称</label>
					<input type="text" id="change_good_name" name="good_name" class="form-control"/>
				</div>	
				<div class="form-group">
					<label for="change_good_desc">商品介绍</label>
					<input type="text" id="change_good_desc" name="good_desc" class="form-control" />
				</div>	
				<div class="form-group">
					<label for="change_good_price">商品价格</label>
					<input type="text" id="change_good_price" name="good_price" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="change_good_photo">照片修改</label>
					<div class="imgs">
						
					</div>
					<input type="file" id="change_good_photos" multiple="multiple" name="good_photos[]" class="form-control" />
				</div>	
				<input type="text" id="good_id" name="good_id" hidden="hidden" />
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" 
					id="sure-change" data-dismiss="modal">确定修改</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
			</div>
		</div>
	</div>
</form>

<div class="modal fade" id="add_dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">增加商品</h4>
			</div>
			<form class="modal-body" action="index.php?controller=good&action=add"
				 method="post" enctype="multipart/form-data">
				<div class="form-group">
				<label for="good_type">商品类型</label>
				<input type="text" id="good_type" placeholder="input good_type" name="good_type" class="form-control" />
			</div>
				<div class="form-group">
					<label for="good_name">商品名称</label>
					<input type="text" id="good_name" placeholder="input good_name" name="good_name" class="form-control" />
				</div>
				<div class="form-group">
					<label for="good_desc">商品介绍</label>
					<input type="text" id="good_desc" placeholder="input good_desc" name="good_desc" class="form-control" />
				</div>
				<div class="form-group">
					<label for="good_price">商品价格</label>
					<input type="text" id="good_price" placeholder="input good_price" name="good_price" class="form-control" />
				</div>
				<div class="form-group">
					<label for="good_photo">商品图片</label>
					<input type="file" multiple id="good_photo" 
						name="good_photos[]" class="form-control" />
				</div>
				<div class="modal-footer">
					<input type="submit" id="submit" value="submit" class="btn btn-primary" />
					<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				</div>
				<input type="text" name="order" value="add" hidden="hidden" />
			</form>
		</div>
	</div>
</div>
	
<div class="container">
	<div class="row">
		<h1 style="font-weight: 900;">商品后台管理</h1>
	</div>
	<div class="manage-btn">
		<input type="button" id="add" value="增加商品" class="btn btn-success" data-target="#add_dialog" data-toggle="modal"  />
		<input type="button" id="delete" value="删除所选商品" class="btn btn-danger" data-target="#dialog" data-toggle="modal"  />
	</div>

	<form action="index.php?controller=good&action=del" method="post" class="form" id="delete_form">
		<input type="text" name="order" value="del" hidden="hidden"/>
		<table class="table" border="" cellspacing="" cellpadding="">
			<tr>
				<th>
					<input type="checkbox" name="all_select" id="all_select" value="全选" />
					<label for="all_select">全选</label>
				</th>
				<th>商品类型</th>
				<th>商品名称</th>
				<th>商品介绍</th>
				<th>商品价格</th>
				<th>商品图片</th>
				<th>商品操作</th>
			</tr>
		
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'good', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['good']->value) {
?>
				<tr>
					<td><input class='selects' type='checkbox' 
						value='<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
' name='select_indexs[]' id='<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
' />
						<label for='<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
'>选择</label>
					</td>
					<td class='good_type'><?php echo $_smarty_tpl->tpl_vars['good']->value['good_type'];?>
</td>
					<td class='good_name'><?php echo $_smarty_tpl->tpl_vars['good']->value['good_name'];?>
</td>
					<td class='good_desc'><?php echo $_smarty_tpl->tpl_vars['good']->value['good_desc'];?>
</td>
					<td class='good_price'><?php echo $_smarty_tpl->tpl_vars['good']->value['good_price'];?>
</td>
					<td class='good_photos'>
					
					<?php if ($_smarty_tpl->tpl_vars['good']->value['good_photos']) {?>
						
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['good']->value['good_photos']), 'good_photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['good_photo']->value) {
?>
							<img src='<?php echo $_smarty_tpl->tpl_vars['good_photo']->value;?>
' />
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						
					<?php }?>
				
				
					</td>
					<td>
						<input type='button' class='show-btn btn btn-info' value='预览' />
						<input data-target='#change_dialog' 
							data-toggle='modal' type='button' class='change-btn btn btn-primary' 
							value='修改' />
						<input type='button' class='delete-btn btn btn-danger' value='删除' />
					</td>
				</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		
		
		</table>
	</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
