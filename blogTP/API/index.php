<?php
    if (!empty($_GET['demande'])) {
        echo "test ok ";
    } else {
        throw new Exception("Problème de récupération de données");
    }
