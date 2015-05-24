<?php
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
	if (session_id() == '') {session_start();
	}
} else {
	if (session_status() == PHP_SESSION_NONE) {session_start();
	}
}
?>