# Composer Tools

Install
-------
```
    $ composer require lukashron/composer-tools
```

Get all packages versions
---
```php
    $pv = new \LukasHron\Composer\Utils\PackagesVersions();
    var_dump($pv->getPackagesVersionsList());
```

www.lukashron.cz