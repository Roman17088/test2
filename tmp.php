<?php
require_once __DIR__ . '/vendor/autoload.php';
use JShrink\Minifier;

$listJS = [
    'script.js',
    '2.js',
    '1.js',
];
$minifiedCode = '';
$pathJS = __DIR__ . '/js/';
$minifiedCode = buildJS($pathJS, $listJS);

file_put_contents($pathJS . $listJS[0] . '-tmp', $minifiedCode);

function buildJS($pathJS, $listJS)
{
    $minifiedCode = '';
    foreach ($listJS as $filename) {
        $file = $pathJS . $filename;
        if (!file_exists($file) || is_dir($file)) {
            throw new Exception('File ' . $file . ' not found');
        }
        try {
            // remove 'use strict';
            $js = preg_replace('/((\'|\")use\s+strict(\'|\")(;)*)/ui', '', file_get_contents($file));
            $minifiedCode .= Minifier::minify($js, ['flaggedComments' => false]);
            //$minifiedCode .= JSMin::minify($js);
        } catch (\Exception $e) {
            $msg = [
                'File: ' . $e->getFile(),
                'Line: ' . $e->getLine(),
                'Error: ' . $e->getMessage(),
            ];
            throw new Exception(implode(' ', $msg));
        }
    }
    return "use strict;" . $minifiedCode;
}