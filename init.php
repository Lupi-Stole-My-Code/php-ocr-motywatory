<?php
require_once 'lib/tesseract-php/TesseractOCR/TesseractOCR.php';
//valid file
?>
<h1> This's valid process initialization file </h1>

<?php
$files = glob('images/*.{jpg,png,gif}', GLOB_BRACE);
foreach ($files as $file)
{
    $tesseract = new TesseractOCR($file);
    $tesseract->setLanguage('pol');
    $tesseract->setTempDir('./temp');
    //$tesseract->setWhitelist(range('A','Z'));
    echo "Begin " . $file . "<br/><br/>";
    echo "IMAGE : " . "<img src='" . $file . "'/><br/><br/>";
    echo $tesseract->recognize();
    echo "<br/><br/>Done " . $file . "<br/><br/>";
}

