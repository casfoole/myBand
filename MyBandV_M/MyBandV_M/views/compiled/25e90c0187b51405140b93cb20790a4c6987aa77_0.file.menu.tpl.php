<?php
/* Smarty version 3.1.30, created on 2017-06-22 08:52:59
  from "C:\MAMP\htdocs\bovi\MVCFramework_MyBand\MyBandV_M\MyBandV_M\views\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594b856b288d04_38835893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25e90c0187b51405140b93cb20790a4c6987aa77' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\bovi\\MVCFramework_MyBand\\MyBandV_M\\MyBandV_M\\views\\menu.tpl',
      1 => 1498121557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594b856b288d04_38835893 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="margin">
<nav class="wrap">
    <ul>

        <li><a id="menuhome" href="?page=home">Home</a></li>
        <li><a id="menumusic" href="?page=articles">Music</a></li>
        <li><a id="menuschema" href="?page=tourschema">Tours</a></li>
        <li><a id="menuabout" href="?page=about">About</a></li>

    </ul>
</div>
        <?php if ($_GET['page'] == 'home') {?>
            <?php echo '<script'; ?>
>
                document.getElementById("menuhome").style.textDecoration = "line-through"
            <?php echo '</script'; ?>
>
        <?php } elseif ($_GET['page'] == 'articles') {?>
            <?php echo '<script'; ?>
>
                document.getElementById("menumusic").style.textDecoration = "line-through"
            <?php echo '</script'; ?>
>
        <?php } elseif ($_GET['page'] == 'about') {?>
            <?php echo '<script'; ?>
>
                document.getElementById("menuabout").style.textDecoration = "line-through"
            <?php echo '</script'; ?>
>
        <?php } elseif ($_GET['page'] == 'tourschema') {?>
            <?php echo '<script'; ?>
>
                document.getElementById("menuschema").style.textDecoration = "line-through"
            <?php echo '</script'; ?>
>
        <?php }?>


            </nav>
<?php }
}
