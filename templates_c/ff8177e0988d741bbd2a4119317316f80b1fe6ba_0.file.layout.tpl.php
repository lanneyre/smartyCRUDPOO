<?php
/* Smarty version 3.1.39, created on 2021-05-12 12:20:58
  from 'C:\laragon\www\PHP\Smarty\templates\layout\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609bc82a875f94_44291682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff8177e0988d741bbd2a4119317316f80b1fe6ba' => 
    array (
      0 => 'C:\\laragon\\www\\PHP\\Smarty\\templates\\layout\\layout.tpl',
      1 => 1620821949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609bc82a875f94_44291682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"><?php echo '</script'; ?>
>

</head>
<body>
    <main class="container">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77295777609bc82a873d78_50237584', 'content');
?>

    </main>
</body>
</html><?php }
/* {block 'content'} */
class Block_77295777609bc82a873d78_50237584 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_77295777609bc82a873d78_50237584',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}