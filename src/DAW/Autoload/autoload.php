<?php

namespace Vendor\Autoload;


const ROOT_DIR = __DIR__ . "/../..";

function classDiscoverer()
{
    
}

spl_autoload_register(function () {
    require_once ROOT_DIR . "/App/Entities/Product.php";
    require_once ROOT_DIR . "/App/Entities/Patata/User.php";
});
echo "a\n";
