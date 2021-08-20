<?php

use dipl\Loader\CompatLoader;

require_once __DIR__ . '/src/dipl/Loader/CompatLoader.php';
CompatLoader::delegateLoadingToIcingaWeb($this->app);
