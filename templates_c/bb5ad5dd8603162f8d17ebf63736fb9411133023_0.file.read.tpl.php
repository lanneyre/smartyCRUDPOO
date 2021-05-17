<?php
/* Smarty version 3.1.39, created on 2021-05-17 10:22:54
  from 'C:\laragon\www\PHP\Smarty\templates\pages\read.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a243fe24f9f0_95106844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb5ad5dd8603162f8d17ebf63736fb9411133023' => 
    array (
      0 => 'C:\\laragon\\www\\PHP\\Smarty\\templates\\pages\\read.tpl',
      1 => 1621246971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a243fe24f9f0_95106844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15193125860a243fe237919_36575937', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/layout.tpl");
}
/* {block 'content'} */
class Block_15193125860a243fe237919_36575937 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15193125860a243fe237919_36575937',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover" id="jeuxVideo">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Réalisateur</th>
                        <th>Année</th>
                        <th>Plateforme</th>
                        <th colspan="2" class="text-center"><a href="create" class="btn btn-outline-success btn-block"><i class="fas fa-plus"></i></a></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Réalisateur</th>
                    <th>Année</th>
                    <th>Plateforme</th>
                    <th colspan="2"></th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jeux']->value, 'jeu');
$_smarty_tpl->tpl_vars['jeu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jeu']->value) {
$_smarty_tpl->tpl_vars['jeu']->do_else = false;
?>
                    <tr>
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['jeu']->value->ID;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</td>
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['jeu']->value->nom;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</td>
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['jeu']->value->realisateur;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</td>
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['jeu']->value->annee;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</td>
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['jeu']->value->plateforme;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</td>
                        <td>
                            <a href="update/<?php ob_start();
echo $_smarty_tpl->tpl_vars['jeu']->value->ID;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" class="btn btn-outline-warning btn-block"><i class="far fa-edit"></i></a>
                        </td>
                        <td>
                            <a href="delete/<?php ob_start();
echo $_smarty_tpl->tpl_vars['jeu']->value->ID;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
" class="btn btn-outline-danger btn-block delete"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>

    <?php echo '<script'; ?>
>
    (function(){
        var itemsToDelete = document.querySelectorAll('.delete');
        itemsToDelete.forEach(function(item){
            // console.log(item);
            item.addEventListener("click", function(e) {
                if(!confirm("Are you sure you want to delete ?")){
                    e.preventDefault();
                }
            });
        });
    })();
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
