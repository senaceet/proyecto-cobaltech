<!--
    PROYECTO COBALTECH
    Angie Lorena Clavijo Garcia
    Christian Alfredo León Rodriguez
    Leidy Patricia Quevedo Barreto
    ADSI 1786182
-->

<?php

class DB{

    public static function connect(){
        try{
           $pdo= new PDO('mysql:host=localhost;dbname=cobaltech;charset=utf8','root','');
           $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

           return $pdo;
        }catch (Exception $e){
            die($e->getMessage());
        }
    }
}