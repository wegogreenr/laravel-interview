<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PersonajeController extends Controller
{
    
    public function getPersonajes()
    {
        $personajes = Personaje::all();
    }

  
    public function addPersonajes(Request $request)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function getPersonajesExample(){
      
        $client = new Client();
        $response = $client->request('GET', 'https://rickandmortyapi.com/api/character');

        // Convierte el contenido de la respuesta a un array asociativo
        $data = json_decode($response->getBody(), true);

        // Muestra los datos en un formato legible
        dd($data);
    }
}
