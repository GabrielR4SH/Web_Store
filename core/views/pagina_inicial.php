<?php 
use core\classes\Store;
?>

<div>

   <?php if(store::clienteLogado()):?>
   <p> SIM </p>
   <?php else:?>
   <p>Nao</p>

   <?php endif;?>
</div>