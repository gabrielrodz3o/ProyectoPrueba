<?php

function ConectarBD()
{
   $host="host=localhost";
   $port="port=84";
   $dbname="dbaname=Prueba";
   $user="user=postgres";
   $password="password=gabi2020";
   $db=pg_connect("$host $port $dbname $user $password");
if (!$db)
{
    echo "Error: ";
}

else
{
    echo "conexion exitosa";
    return $db;}
}

function conectarBd2()
{
    try{

        $myPDO= new PDO("pgsql:host=localhost;dbname=Prueba","postgres","gabi2020");
        echo "Conectado";
    }
    catch(PDOException $e)
    {

         echo   $e->getMessage();
    }


}

 
?>