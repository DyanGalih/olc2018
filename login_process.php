<?php
/**
 * Tugas, tambahkan empty check
 */
if($_POST['username']=='admin' && $_POST['password']=='tanya panitia'){
    //jika benar
    session_start();
    $_SESSION['user'] = $_POST['username'];
    header('Location: http://localhost/olc/default.php?page=profile_input');
}{
    //jika salah
    die('user / password salah');
}