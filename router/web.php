<?php

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../utils/functions.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'basico':
            require __DIR__ . '/../app/controllers/basico/index.php';
            break;
    }
} else {
    __("Rota não encontrada");
}
