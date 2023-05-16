<?php

namespace App\Http\Controllers;

// use Barryvdh\DomPDF\PDF;

use App\Models\Report;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PdfController extends Controller
{
   public function  index(){
    $reports= Report::all();
    return view('Pdf.view',compact('reports'));
    }
     public function viewPdf(){
         $reports= Report::all();
         $pdf = Pdf::loadView('Pdf.view2',compact('reports'))->setPaper('a1');
          return $pdf->stream();
        // $data["email"] = "aatmaninfotech@gmail.com";
        //  $data["title"] = "From ItSolutionStuff.com";
        //  $data["body"] = "This is Demo";

        // $files = [
        //     public_path('../files/true.png'),
        // ];
        // Mail::send('mail', $data, function($message)use($data, $pdf) {
        //     $message->to($data["email"], $data["email"])
        //             ->subject($data["title"]);
        //             $message->attach($pdf);

        // });

        // dd('Mail sent successfully');
    }


        // $pdf= PDF::loadHTML('<h1> Hello Nawar </h1>');
        // return $pdf->stream();


  public function test()
    {
         $data["email"] = "nanaoo12345kh@gmail.com";
        //  $data["email2"] = "nanaoo12345kh@gmail.com";
         $data["title"] = "Nawar Doctor";
         $data["body"] = "This is Demo";

        $files = [
            public_path('files/true.png'),
            public_path('files/Capture.png'),
        ];
        Mail::send('mail', $data, function($message)use($data, $files) {
             $message->from('hnanaoo12345566@gmail.com');
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"]);
                    foreach ($files as $file){
                        $message->attach($file);
                    }

                    // $message->to($data["email2"], $data["email2"])
                    // ->subject($data["title"]);
                    // foreach ($files as $file){
                    //     $message->attach($file);
                    // }



        });

        dd('Mail sent successfully');
    }
    public function nawar()
  {

return view('auth.lab');


  }
}
