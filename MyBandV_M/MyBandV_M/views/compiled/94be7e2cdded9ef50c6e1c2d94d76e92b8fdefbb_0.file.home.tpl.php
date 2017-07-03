<?php
/* Smarty version 3.1.30, created on 2017-06-29 07:19:29
  from "C:\MAMP\htdocs\bovi\MVCFramework_MyBand\MyBandV_M\MyBandV_M\views\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5954aa0137ee78_84553112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94be7e2cdded9ef50c6e1c2d94d76e92b8fdefbb' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\bovi\\MVCFramework_MyBand\\MyBandV_M\\MyBandV_M\\views\\home.tpl',
      1 => 1498720654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5954aa0137ee78_84553112 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrap">
    <div id="banner">
        <img src="" id="bannerimg">
    </div>

</content>

<content class="wrap">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'oneItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->value) {
?>
    <div id="newsDiv">
       <img id="newsImage" src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">

        <h3 id="newsTitel"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
</h3>

        <p id="content"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</p>

    </div><br>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<center>

<table id="pagechanger">
    <tr><td id="left">
            <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
                <a href="?url=home&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" style="margin-right: 2px" id="left" >Previous</a>
            <?php }?>
        </td>
        <p id="pagenumber" style="font-family: 'Abel', sans-serif">Page <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</p>
        <td id="right">
            <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
                <a href="?url=home&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" style="margin-left: 2px" id="right">Next</a>
            <?php }?>
        </td>
    </tr>
</table>
</center>
</content><?php }
}
