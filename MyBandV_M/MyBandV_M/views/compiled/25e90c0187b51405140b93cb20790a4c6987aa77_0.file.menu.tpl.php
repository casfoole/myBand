<?php
/* Smarty version 3.1.30, created on 2017-06-28 12:20:31
  from "C:\MAMP\htdocs\bovi\MVCFramework_MyBand\MyBandV_M\MyBandV_M\views\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59539f0fc92510_44579285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25e90c0187b51405140b93cb20790a4c6987aa77' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\bovi\\MVCFramework_MyBand\\MyBandV_M\\MyBandV_M\\views\\menu.tpl',
      1 => 1498652428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59539f0fc92510_44579285 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="margin">
<nav class="wrap">
    <ul>

        <li><a id="menuhome" href="?url=home">Home</a></li>
        <li><a id="menumusic" href="?url=articles">Music</a></li>
        <li><a id="menuschema" href="?url=tourschema">Tours</a></li>
        <li><a id="menuabout" href="?url=about">About</a></li>

    </ul>
</div>
        <?php if ($_GET['url'] == 'home') {?>
            <?php echo '<script'; ?>
>
                document.getElementById("menuhome").style.textDecoration = "line-through"
            <?php echo '</script'; ?>
>
        <?php } elseif ($_GET['url'] == 'articles') {?>
            <?php echo '<script'; ?>
>
                document.getElementById("menumusic").style.textDecoration = "line-through"
            <?php echo '</script'; ?>
>
        <?php } elseif ($_GET['url'] == 'about') {?>
            <?php echo '<script'; ?>
>
                document.getElementById("menuabout").style.textDecoration = "line-through"
            <?php echo '</script'; ?>
>
        <?php } elseif ($_GET['url'] == 'tourschema') {?>
            <?php echo '<script'; ?>
>
                document.getElementById("menuschema").style.textDecoration = "line-through"
            <?php echo '</script'; ?>
>
        <?php }?>


            </nav>
<?php }
}
