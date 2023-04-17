<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION['id'])) {
        die("Você não pode acessar esta página pois não está logado.");
        // criar pagina de erro por falta de login com link para index 
    }
?>