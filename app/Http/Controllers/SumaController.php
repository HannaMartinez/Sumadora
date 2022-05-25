<?php

namespace App\Http\Controllers;

use App\Models\Suma;
use Illuminate\Http\Request;

class SumaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('suma.operacion');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('suma.operacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            try {
            
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];

                $resultado = $numero1 + $numero2; 

                echo "<h1>Resultado es ".$resultado."</h1>";

            } catch (\Throwable $th) {
                
                $resultado = "Erroneo";
                echo "<h1> El resultado es ".$resultado."<h1/>";
            }


        $logFile = fopen("log.txt", 'a') or die("Error creando archivo");
        fwrite($logFile, "\n".date("d/m/Y H:i:s")." El Resultado es ".$resultado) or die("Error escribiendo en el archivo");fclose($logFile);
        
     

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suma  $suma
     * @return \Illuminate\Http\Response
     */
    public function show(Suma $suma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suma  $suma
     * @return \Illuminate\Http\Response
     */
    public function edit(Suma $suma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suma  $suma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suma $suma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suma  $suma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suma $suma)
    {
        //
    }
}
