<?php
/* Smarty version 3.1.39, created on 2021-05-17 10:33:51
  from 'C:\laragon\www\PHP\Smarty\templates\pages\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a2468fcae9d2_36307247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a59ee2540419bbe07a038eb216e72c3896a49f5a' => 
    array (
      0 => 'C:\\laragon\\www\\PHP\\Smarty\\templates\\pages\\update.tpl',
      1 => 1621247628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a2468fcae9d2_36307247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92402278460a2468fca2729_74030599', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/layout.tpl");
}
/* {block 'content'} */
class Block_92402278460a2468fca2729_74030599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_92402278460a2468fca2729_74030599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <form name="AddJeuVideo" method="POST" action="update">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" placeholder="Nom" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['jeu']->value->nom;?>
">
        <label for="realisateur">Réalisateur</label>
        <input name="realisateur" id="realisateur" class="form-control" placeholder="Réalisateur" value="<?php echo $_smarty_tpl->tpl_vars['jeu']->value->realisateur;?>
">
        <label for="annee">Année</label>
        <input type="number" name="annee" id="annee" placeholder="Année" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['jeu']->value->annee;?>
">
        <label for="plateforme">Plateforme</label>
        <input type="text" name="plateforme" id="plateforme" placeholder="Plateforme" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['jeu']->value->plateforme;?>
">
        <hr>
        <input type="hidden" name="action" id="action" value="update">
        <input type="hidden" name="ID" id="ID" value="<?php echo $_smarty_tpl->tpl_vars['jeu']->value->ID;?>
">
        <a type="button" class="btn btn-secondary" href="accueil">Retour</a>
		<button type="Submit" class="btn btn-primary">Save data</button>
    </form>
<?php
}
}
/* {/block 'content'} */
}
