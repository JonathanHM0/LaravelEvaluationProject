<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
   
    public function index()
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon?limit=1300');
        $pokemones = $response->json()['results'];

        $pokemonData = [];

        foreach ($pokemones as $pokemon) {
      
            $urlParts = explode('/', rtrim($pokemon['url'], '/'));
            $id = end($urlParts);

         
            $sprite = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{$id}.png";

            $pokemonData[] = [
                'name' => $pokemon['name'],
                'sprite' => $sprite,
            ];
        }

        return view('pokemones.index', ['pokemones' => $pokemonData]);
    }
  

}
