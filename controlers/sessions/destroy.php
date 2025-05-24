<?php

session_destroy();

logOut();


header("Location: " . $_SERVER["HTTP_REFERER"]);
exit;

die();
