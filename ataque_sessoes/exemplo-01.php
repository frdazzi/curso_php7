<?php

session_start();

// Depois de verificar login e senha
// reinicia o id da sessaco
echo session_id();

session_destroy();

echo "<hr>";

session_start();
session_regenerate_id();
echo session_id();
?>
