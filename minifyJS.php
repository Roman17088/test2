<?php
require_once __DIR__ . '/vendor/autoload.php';
use JShrink\Minifier;
/**
 * Указываем на стартовый js-файл
 * В нем должна быть строка со списком скриптов
 * listScripts = ['base.js', 'auth/index.js', 'super.js']
 * в порядке загрузки
 * В production он заменится на собранный минифицированный файл js
 */
$pathJS = __DIR__ . '/js/';
$filenameJS = 'script.js';
file_put_contents($pathJS . $filenameJS, buildJS($pathJS, $filenameJS));
//exec('rm ' . __FILE__);

function buildJS($pathJS, $filenameJS)
{
    $file = $pathJS . $filenameJS;
    if (!file_exists($file) || is_dir($file)) {
        throw new \Exception('File ' . $file . ' not found');
    }
    $js = Minifier::minify(file_get_contents($file), ['flaggedComments' => false]);
    file_put_contents(__DIR__ . '/1', $js);
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