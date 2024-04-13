<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ReflectionClass;
use thiagoalessio\TesseractOCR\TesseractOCR;

class ClassificationController extends Controller
{

    public function classification()
    {
        $imagePath='C:/xampp/htdocs/mermoire_back/public/ClasserImages/fag.jpg';
        // $ocr = new TesseractOCR($imagePath);

        // $text= $ocr->run();

        // echo $text;
        $class = new ReflectionClass('thiagoalessio\TesseractOCR\TesseractOCR');
        $infoImg = $class->newInstanceArgs();
        $infoImg->lang('eng','jpn','spa','fr');
        $infoImg->image($imagePath);
        $infoImg->withoutTempFiles();
        $resultat = $infoImg->run();
        var_dump($resultat);
    }


}
