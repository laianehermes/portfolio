<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CurriculumControler extends Controller
{
    public function download(){
            //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "\\download\\curriculum.pdf";
        \Log::debug($file);
        $headers = [
            //'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'Content-Type' => 'application/pdf',            
        ];

        return response()->download($file, 'curriculum-laiane-hermes.pdf', $headers);
    }
}
