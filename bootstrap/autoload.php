<?php
/**
 * Created by PhpStorm.
 * User: lucabrandt
 * Date: 2019-01-19
 * Time: 15:54
 */

define('LARAVEL_START', microtime(true));

require __DIR_.'_/../vendor/autoload.php';


$compiledPath = __DIR__.'/cache/compiled.php';

if (file_exists($compiledPath)) {
    require $compiledPath;
}
