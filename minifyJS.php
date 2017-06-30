<?php
require_once __DIR__ . '/vendor/autoload.php';
use JShrink\Minifier;

$pathJS = __DIR__ . '/js/';
$filenameJS = 'script.js';
file_put_contents($pathJS . $filenameJS . '-tmp', buildJS($pathJS, $filenameJS));

function buildJS($pathJS, $filenameJS)
{
    $file = $pathJS . $filenameJS;
    if (!file_exists($file) || is_dir($file)) {
        throw new \Exception('File ' . $file . ' not found');
    }
    $js = Minifier::minify($file, ['flaggedComments' => false]);
    if (!preg_match('/listScripts=\[(.+?)\]/ui', $js, $match)) {
        throw new \Exception('listScripts not found');
    }
    preg_match_all('/(\'|")(.+?)(\'|")/ui', $match[1], $matches);
    if (empty($matches[2])) {
        throw new \Exception('Empty listScripts');
    }
    $minifiedJS = '';
    foreach ($matches[2] as $path) {
        $file = $pathJS . $path;
        if (!file_exists($file) || is_dir($file)) {
            throw new \Exception('File ' . $file . ' not found');
        }
        // уберем везде 'use strict';
        $file = preg_replace(
            '/((\'|\")use\s+strict(\'|\")(;)*)/ui',
            '',
            file_get_contents($file)
        );
        $minifiedJS .= Minifier::minify($file, ['flaggedComments' => false]);
    }
    return 'use strict;' . $minifiedJS;
}