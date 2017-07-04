<?php
/* Smarty version 3.1.30, created on 2017-07-04 11:14:09
  from "C:\UniServerZ\www\signup\templates\bootstrap\tpl\foreach.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595b08012d39e8_53734760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '659986e7064392f535c7baf301b62284b46c8bd3' => 
    array (
      0 => 'C:\\UniServerZ\\www\\signup\\templates\\bootstrap\\tpl\\foreach.tpl',
      1 => 1499131841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595b08012d39e8_53734760 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <section>
      <div class="container">
        <h1>成績單</h1>
        <table class="table table-hover table-bordered">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row', true);
$_smarty_tpl->tpl_vars['row']->iteration = 0;
$_smarty_tpl->tpl_vars['row']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->iteration++;
$_smarty_tpl->tpl_vars['row']->index++;
$_smarty_tpl->tpl_vars['row']->first = !$_smarty_tpl->tpl_vars['row']->index;
$_smarty_tpl->tpl_vars['row']->last = $_smarty_tpl->tpl_vars['row']->iteration == $_smarty_tpl->tpl_vars['row']->total;
$__foreach_row_0_saved = $_smarty_tpl->tpl_vars['row'];
?>
            <?php if ($_smarty_tpl->tpl_vars['row']->first) {?>
              <tr>
                <th>序</th>
                <th>姓名</th>
                <th>國文</th> 
                <th>英文</th> 
                <th>社會</th>            
              </tr>
            <?php }?>
            <tr>
              <?php $_smarty_tpl->_assignInScope('conuter', $_smarty_tpl->tpl_vars['row']->index+1);
?>
              <td><?php echo $_smarty_tpl->tpl_vars['conuter']->value;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['row']->value['chinese'];?>
</td>  
              <td><?php echo $_smarty_tpl->tpl_vars['row']->value['english'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['row']->value['society'];?>
</td>          
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['row']->last) {?>
              <tr>
                <th colspan=5>總共有：<?php echo $_smarty_tpl->tpl_vars['row']->total;?>
人</th>
              </tr>
            <?php }?>
          <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
          
        </table>
      </div>
    </section><?php }
}
