<?php
  include_once('Database.php');
  define('SS_DB_NAME', 'bd_unicom');
  define('SS_DB_USER', 'root');
  define('SS_DB_PASSWORD', '');
  define('SS_DB_HOST', 'localhost');
 
  $dsn  =   "mysql:dbname=".SS_DB_NAME.";host=".SS_DB_HOST."";
  $pdo  =   "";
  try {
    $pdo = new PDO($dsn, SS_DB_USER, SS_DB_PASSWORD);
	 
	
  }catch (PDOException $e) {
    echo "Echec de la Connexion à la base de données : " . $e->getMessage();
  }
  
  
 /* 
  $limit = (isset ($_GET['limit']))? $_GET['limit'] : 4;
  $page = (isset ($_GET['page']))? $_GET['page'] : 1;
  $links = (isset ($_GET['links']))? $_GET['links'] : 7;
  $query = "SELECT * FROM payment_request, payment_reponse";
  
  require_once'paginator.class.php';
  $paginator = new Paginator($pdo,$query);
  $results = $paginator->getData($limit,$page); */
  
  $db   =   new Database($pdo);
?>