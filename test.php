<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    if (mail("youran198824@gmail.com", "Test mail", "�������� �������� �����")) {
          echo "ok";
    } else {
           echo "error";}
    ?>