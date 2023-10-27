<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;


// personajes favoritos : 
//              1 - Rick
//              2 - Morthy
//              3 - Meesik 
 


class PersonajeController extends Controller
{
    
    // Retornar un listado de personajes guardados en la base de datos como favoritos.

    public function getPersonajes()
    {
        $personajes = Personaje::all();
        
    }

    // Esta ruta va a recibir el ID de un personaje de Rick and Morty 
    // Hacer las validaciones necesarias.
    
    public function addPersonajes(Request $request)
    {
 
    }

    // Esta ruta va a recibir el ID de un personaje de la DB  y su orden nuevo. 
    // En esta ruta solo se modificara el orden
    // Hacer las validaciones necesarias.
    public function update(Request $request, string $id)
    {
        //
    }

    // Esta ruta va a eliminar el personaje de la lista, dejando el orden sin personaje. 
    // Hacer las validaciones necesarias.
    public function destroy($id)
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
