<?php
// Autoload libraries
require_once __DIR__ . '/vendor/autoload.php';

use tubalmartin\CssMin\Minifier as CSSmin;

// Extract the CSS code you want to compress from your CSS files

$pathCSS = __DIR__ . '/css/';
$minifiedCSS = buildCSS($pathCSS, 'styles.css');

echo $minifiedCSS;

function buildCSS($pathCSS, $fileCSS)
{
    $compressor = new CSSmin;
    $compressor->keepSourceMapComment();
    $compressor->removeImportantComments();
    // $compressor->setLineBreakPosition(1000);
    $compressor->setMemoryLimit('256M');
    $compressor->setMaxExecutionTime(120);
    $compressor->setPcreBacktrackLimit(3000000);
    $compressor->setPcreRecursionLimit(150000);
    $compressor->keepSourceMapComment(false);
    $compressor->setLineBreakPosition(0);
    $file = $pathCSS . $fileCSS;
    if (!file_exists($file) || is_dir($file)) {
        throw new Exception('File ' . $file . ' not found');
    }
    $css = $compressor->run(file_get_contents($file));
    preg_match_all('/@import\s+(\'|")([a-z0-9\-_\.\/]+?)(\'|")/ui', $css, $matches);
    if (empty($matches[2])) {
        throw new Exception('Imports not found');
    }
    $minifiedCSS = '';
    foreach ($matches[2] as $path) {
        $file = $pathCSS . $path;
        if (!file_exists($file) || is_dir($file)) {
            throw new Exception('File ' . $file . ' not found');
        }
        $minifiedCSS .= $compressor->run(file_get_contents($file));
    }
    return $minifiedCSS;
}