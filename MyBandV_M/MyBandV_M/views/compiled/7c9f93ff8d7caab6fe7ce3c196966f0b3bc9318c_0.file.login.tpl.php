<?php
/* Smarty version 3.1.30, created on 2017-07-02 13:08:08
  from "C:\MAMP\htdocs\bovi\MVCFramework_MyBand\MyBandV_M\MyBandV_M\views\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5958f0384f2fd6_53063356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c9f93ff8d7caab6fe7ce3c196966f0b3bc9318c' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\bovi\\MVCFramework_MyBand\\MyBandV_M\\MyBandV_M\\views\\login.tpl',
      1 => 1499000885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5958f0384f2fd6_53063356 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>
    <center>
        <form method="post">
        <div class="container">
            <br>
            <label><b>Username</b></label>
            <input type="text" placeholder="Username" name="username" required>
            <br><br>
            <label><b>Password</b></label>
            <input type="password" placeholder="Password" name="password" required>
            <br><br>
            <button type="submit">Login</button>
        </div>
        </form>
        <a href="registration.tpl">If you do not have a account yet click here.</a>
    </center>
</body>
<?php }
}
