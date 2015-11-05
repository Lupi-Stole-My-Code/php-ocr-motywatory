<?php
require_once 'lib/tesseract-php/TesseractOCR/TesseractOCR.php';
//valid file
?>
<h1> This's valid process initialization file </h1>
Let's do this!
<br/>

<?php
//min id = 102

function goOCR($id)
{
    $content = file_get_contents('http://www.fabrykasily.pl/upload/motivation/id_'.$id.'_next_1500x2000.jpg');
    $file = './temp/temp'.$id.'.jpg';
    file_put_contents($file, $content);
    if(filesize($file) > 0)
    {
        $tesseract = new TesseractOCR($file);
        $tesseract->setLanguage('pol');
        $tesseract->setTempDir('./temp');
        //$tesseract->setWhitelist(range('A','Z'));
        return $tesseract->recognize();
        unlink($file);
    }
    else   
    {
        return '___________________INVALID MEME_____________________';
    }
}

$start = 10000;
$stop  = 10050;

for($i = $start; $i <= $stop; $i++)
{
    echo 'ID : ' . $i . ' : ' . '<a href="http://www.fabrykasily.pl/upload/motivation/id_'.$i.'_next_1500x2000.jpg">[LINK]</a>&nbsp; OCR: '. goOCR($i) . '<br/>';
}