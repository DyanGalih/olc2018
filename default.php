<?php

/**
 * sample configuration
 */
include_once 'config.php';

/**
 * include database class
 */

include_once "database.php";

$db = new Database($configuration);

/**
 * simple routing without login
 */
if(!empty($_GET) && isset($_GET['page'])){

    if($_GET['page'] == 'login_process'){
        include_once 'login_process.php';
    }
    
}

session_start();
if(!isset($_SESSION['user'])){

    include_once 'login.php';

}else{
    /**
     * default file to access
     */

    /**
     * if $_GET is not empty and there is page key in $_GET then true
    */
    if(!empty($_GET) && isset($_GET['page'])){
        // simple routing after login
        if($_GET['page']=='profile_input'){
            include_once 'profile_input.php';
        }
        if($_GET['page'] == 'save_profile'){
            include_once 'save_profile.php';
        }

    }else{

        /*
         * to insert / update / delete data use execute method from class Database
         *
         */

        /*
         * insert profile
         */
        
        $sql = "INSERT INTO profile(nama,alamat,tempat_lahir) VALUES (:nama,:alamat,:tempat_lahir)";
        
        $profile = array();
        $profile["nama"] = "Jono";
        $profile["alamat"] = "Jakarta";
        $profile["tempat_lahir"] = "Jogja";

        $db->execute($sql, $profile);
        

        /*
         *  query get all data profile
        */
        $sql = "SELECT * FROM profile";

        /*
         * get data profile use class database an method open. Send sql and empty array
        */
        $profile = $db->open($sql,array());

        /*
         *  display the formated data to browser
        */
        echo "<pre>";
        print_r($profile);
        echo "</pre>";

        // after login
    }
}