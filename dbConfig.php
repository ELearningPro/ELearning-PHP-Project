<?php
    $isConnectToDb=new mysqli("localhost","root","","elearning");
    if($isConnectToDb->connect_errno){
        echo '<div id="server_alert" class="alert text-center alert-danger" role="alert">
                Server Not Conected
            </div>';
        // exit();
    }else{
        echo '<div id="server_alert" class="alert text-center alert-primary" role="alert">
                Server Conected
            </div>';
    }
    
?>