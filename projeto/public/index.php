<?php 


//abrir a sessão

/*use core\classes\Database;
use core\classes\Functions;*/
//use core\classes\Database;

session_start();

//carregar o config
//require_once('../config.php');

//carrega todas  as classes do projeto
require_once('../vendor/autoload.php');

//carrega o sistema de rotas
require_once('../core/rotas.php');








/*$bd = new Database();
$clientes = $bd->select("SELECT * FROM clientes");
echo '<pre>';
print_r($clientes);
//$bd->statement("TRUNCATE clientes");*/

/*$a = new Database();
$b = new Functions();

$b->teste();

echo 'OK';

carregar o config
carregar as classes
carregar sistemas de rotas(mostrar loja, carrinho, backoffice)
*/