<?php
/* Smarty version 3.1.39, created on 2021-05-17 10:25:34
  from 'C:\laragon\www\PHP\Smarty\templates\pages\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a2449e4be492_82746004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b12b516a881dc9486d47b7971953caec41308172' => 
    array (
      0 => 'C:\\laragon\\www\\PHP\\Smarty\\templates\\pages\\create.tpl',
      1 => 1621246953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a2449e4be492_82746004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1398092860a2449e4bd936_54015421', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/layout.tpl");
}
/* {block 'content'} */
class Block_1398092860a2449e4bd936_54015421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1398092860a2449e4bd936_54015421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form name="AddJeuVideo" method="POST" action="add">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" placeholder="Nom" class="form-control">
        <label for="realisateur">Réalisateur</label>
        <textarea name="realisateur" id="realisateur" class="form-control" placeholder="Réalisateur"></textarea>
        <label for="annee">Année</label>
        <input type="number" name="annee" id="annee" placeholder="Année" class="form-control">
        <label for="plateforme">Plateforme</label>
        <input type="text" name="plateforme" id="plateforme" placeholder="Plateforme" class="form-control">
        <hr>
        <input type="hidden" name="action" id="action" value="add">
        <a type="button" class="btn btn-secondary" href="accueil">Retour</a>
		<button type="Submit" class="btn btn-primary">Save data</button>
    </form>
<?php
}
}
/* {/block 'content'} */
}
