# PigLatin
Test task PigLatin php package  
by Andriy


#Install package
composer.json:
```
{
    "require" : {
        "andriytest/piglatin":"dev-master"
    }
}
```

Or command line:
```
composer require andriytest/piglatin
```

#Usadge

Create index.php in root of your project and add content:
```
<?php
require_once __DIR__ . '/vendor/autoload.php';

use phpsoft\piglatin\PigLatin;

$pl = new PigLatin();

echo $pl->translateFraze('banana');

```
