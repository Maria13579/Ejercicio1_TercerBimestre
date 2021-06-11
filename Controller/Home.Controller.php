<?php
    Class Home
    {
         public function Inicio()
        {
           $smarty=new Smarty();
           $smarty->display('Home.tpl');
         }
    }
?>