<?php
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST') {
    
    $voice_sku = $_POST['voice_sku'] ?? 0;
    $action = $_POST['action'] ?? '';
    
    if ($action == 'Delete')  {
        // we are deleting the item from the session array
        if ($voice_sku) {
            unset($_SESSION['playlist'][$voice_sku]);
            exit(json_encode($_SESSION['playlist'])) ;
        }
    }
    elseif ($action == 'Add')  {
        // we are adding the item
        $voice_name = $_POST['voice_name'] ?? '';
        if ($voice_sku && $voice_name) {
            $_SESSION['playlist'][$voice_sku] = $voice_name;
            exit(json_encode($_SESSION['playlist'])) ;
        }
    }
    else {
        exit("ERROR")  ; 
    }
}
exit("ERROR")  ; 
?>