<?php
   session_start();
    if(isset($_SESSION['kyatadmin'])){

      unset($_SESSION['kyatadmin']);

             echo'<script>location.replace("login")</script>';

  
        }else{
             echo'<script>location.replace("login")</script>';
        }
