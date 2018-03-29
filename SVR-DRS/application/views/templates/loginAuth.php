<?php
    
    if(isset($_SESSION['User_ID'])) {
        if($_SESSION['PermissionSet'] >= $authLevel){}
        else{redirect(site_url('main'));}
    }
    else{redirect(site_url('main'));}
?>