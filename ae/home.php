
<?php

$smarty = new Template();

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());


$smarty->display('adm_home.tpl');


?>