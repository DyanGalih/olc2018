<?php

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

        //include profile php
        include_once 'profile.php';
        //include sekolah
        include_once 'sekolah.php';
        //include orang tua
        include_once 'orangtua.php';


        $objKtp = new Profile();
        $objKtp->setNama('Dyan Galih Nugroho');
        //$objKtp->setNamaSekolah('TK');

        $objKtpTeman = new Profile();
        $objKtpTeman->setNama('Nama teman');

        echo $objKtpTeman->getNama();
        echo '<br />';
        echo $objKtp->getNama();
        //echo $objKtp->getNamaSekolah();
    }
}