<?php
/* Smarty version 3.1.30, created on 2018-01-23 22:01:25
  from "D:\wamp\www\goods_mvc\views\admin\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a67a2a5dca668_74686785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0267cc16e08f409b944d07c1ff85d086013cf47c' => 
    array (
      0 => 'D:\\wamp\\www\\goods_mvc\\views\\admin\\register.html',
      1 => 1516741037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a67a2a5dca668_74686785 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>
        <meta charset="utf-8">
        <title>注册</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/supersized.css">
        <link rel="stylesheet" href="css/style.css">

    </head>

    <body>

        <div class="page-container">
        	<h1 style="color: red;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
            <h1>注册账号</h1>
            <form action="" method="post">
                <input type="text" name="username" class="username" placeholder="请输入您的用户名！">
                <input type="password" name="password" class="password" placeholder="请输入您的用户密码！">
                <input type="password" name="password" class="password" placeholder="请确认您的用户密码！">
                <input type="text" name="question" id="question" placeholder="请输入您的密保问题" />
                <input type="text" name="answer" id="answer" placeholder="请输入您的密保答案" />
                <input type="text" name="check_code" id="answer" placeholder="请输入验证码" /><img src="index.php?controller=admin&action=check_code"/>
                <button type="submit" class="submit_button">注册</button>
                <div class="error"><span>+</span></div>
            </form>
        </div>
		
        <!-- Javascript -->
        <?php echo '<script'; ?>
 src="js/jquery-1.8.2.min.js" ><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/supersized.3.2.7.min.js" ><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/supersized-init.js" ><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/scripts.js" ><?php echo '</script'; ?>
>

    </body>
</html>

<?php }
}
