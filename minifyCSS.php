<?php
require_once __DIR__ . '/vendor/autoload.php';
use tubalmartin\CssMin\Minifier as CSSmin;
/**
 * Указываем на стартовый css-файл
 * В нем должны быть только @import на другие css файлы
 * В production он заменится на собранный минифицированный файл css
 */
$pathCSS = __DIR__ . '/css/';
$filenameCSS = 'styles.css';
file_put_contents($pathCSS . $filenameCSS, buildCSS($pathCSS, $filenameCSS));
exec('rm ' . __FILE__);

function buildCSS($pathCSS, $filenameCSS)
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
    $file = $pathCSS . $filenameCSS;
    if (!file_exists($file) || is_dir($file)) {
        throw new \Exception('File ' . $file . ' not found');
    }
    $css = $compressor->run(file_get_contents($file));
    preg_match_all('/@import\s+(\'|")([a-z0-9\-_\.\/]+?)(\'|")/ui', $css, $matches);
    if (empty($matches[2])) {
        throw new \Exception('Imports not found');
    }
    $minifiedCSS = '';
    foreach ($matches[2] as $path) {
        $file = $pathCSS . $path;
        if (!file_exists($file) || is_dir($file)) {
            throw new \Exception('File ' . $file . ' not found');
        }
        $minifiedCSS .= $compressor->run(file_get_contents($file));
    }
    return $minifiedCSS;
}