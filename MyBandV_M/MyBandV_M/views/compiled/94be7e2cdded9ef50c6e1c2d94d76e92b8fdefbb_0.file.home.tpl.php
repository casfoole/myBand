<?php
/* Smarty version 3.1.30, created on 2017-06-22 06:59:19
  from "C:\MAMP\htdocs\bovi\MVCFramework_MyBand\MyBandV_M\MyBandV_M\views\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594b6ac7e49131_71093255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94be7e2cdded9ef50c6e1c2d94d76e92b8fdefbb' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\bovi\\MVCFramework_MyBand\\MyBandV_M\\MyBandV_M\\views\\home.tpl',
      1 => 1498114520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594b6ac7e49131_71093255 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\MAMP\\htdocs\\bovi\\MVCFramework_MyBand\\MyBandV_M\\MyBandV_M\\libs\\plugins\\modifier.date_format.php';
?>
<content class="wrap">
    <div id="banner">
        <img src="" id="bannerimg">
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['home_list']->value, 'new');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new']->value) {
?>
        <div id="newsDiv">
            <img id="newsImage" src="<?php echo $_smarty_tpl->tpl_vars['new']->value['image'];?>
">

            <h3 id="newsTitel"><?php echo $_smarty_tpl->tpl_vars['new']->value['titel'];?>
</h3>

            <p id="content"><?php echo $_smarty_tpl->tpl_vars['new']->value['content'];?>
</p>

        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</content>
<p id="pagenumber">Page <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</p>
<table id="pagechanger">
    <tr><td id="left">
            <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
                <a href="?url=home&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Previous</a>
            <?php }?>
        </td>
        <td id="right">
            <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
                <a href="?url=home&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Next</a>
            <?php }?>
        </td>
    </tr>
</table>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'oneItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->value) {
?>
    <table class="content">
        <tr><td><h3><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
</h3></td></tr>
        <tr><td><h3><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h3></td></tr>
        <tr><td><h3><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</h3></td></tr>
        <tr><td><h3><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%e %B %Y");?>
</h3></td></tr>

    </table><br>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
