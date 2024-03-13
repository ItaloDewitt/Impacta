<?php


   $dbHost = 'Localhost';
   $dbUsername = 'root';
   $dbPassword = '2212';
   $dbName = 'livraria';

   $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

   // if($conexao->connect_errno)
   // {
   //  echo "não foi";
   // }
   // else
   // {
   //  echo "Foi";
   // }

?>