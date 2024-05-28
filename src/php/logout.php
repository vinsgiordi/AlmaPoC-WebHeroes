<?php
session_start();
session_unset(); // Libera tutte le variabili di sessione
session_destroy(); // Distrugge la sessione
header('Location: login.html'); // Reindirizza alla pagina di login
exit;
