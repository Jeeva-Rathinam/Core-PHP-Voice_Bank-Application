<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
session_regenerate_id();

if (array_key_exists('playlist_action', $_POST)) {
	switch ($_POST['playlist_action']) {
		case 'delete':
            if (array_key_exists($_POST['delete'], $_SESSION['playlist'])) {
				unset($_SESSION['playlist'][$_POST['delete']]);
				// notify user of successful delete
			} else {
				// notify user of non-existent key in the playlist
			}	
		default:
			// handle invalid/unknown action here.
	}
}