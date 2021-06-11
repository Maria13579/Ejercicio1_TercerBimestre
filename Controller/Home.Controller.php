<?php
    Class Home
    {
         public function Inicio()
        {
           $smarty=new Smarty();
           $vec=[
            
           ];
           $smarty->assign('nombre','otra pagina');
           $smarty->display('Home.tpl');
         }
    }
?>