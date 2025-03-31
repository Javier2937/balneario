<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalnearioController extends Controller
{
    private $zonas = [
        ['id' => 1, 'nombre' => 'Alberca infantil', 'imagen' => 'image.png', 'descripcion' => 'Piscina especial para niños con seguridad garantizada.'],
        ['id' => 2, 'nombre' => 'Alberca familiar', 'imagen' => 'familiar.jpg', 'descripcion' => 'Disfruta en familia en nuestra amplia alberca.'],
        ['id' => 3, 'nombre' => 'Alberca de olas', 'imagen' => 'olas.jpg', 'descripcion' => 'Piscina con olas artificiales y toboganes.'],
        ['id' => 4, 'nombre' => 'Lago natural', 'imagen' => 'lago_natural.jpg', 'descripcion' => 'Un hermoso lago natural para relajarse.'],
        ['id' => 5, 'nombre' => 'Cabaña para 4 personas', 'imagen' => 'cabana_4.jpg', 'descripcion' => 'Cabaña equipada para 4 personas. Precio: $2500'],
        ['id' => 6, 'nombre' => 'Cabaña para 6 personas', 'imagen' => 'cabana_6.jpg', 'descripcion' => 'Cabaña equipada para 6 personas. Precio: $3000'],
        ['id' => 7, 'nombre' => 'Áreas de camping', 'imagen' => 'camping.jpg', 'descripcion' => 'Espacio para acampar con seguridad. Precio: $350 por noche.'],
        ['id' => 8, 'nombre' => 'Renta de casa de campaña', 'imagen' => 'casa_campana.jpg', 'descripcion' => 'Casas de campaña en renta. Precios desde $150 hasta $220'],
    ];

    public function index()
    {
        return view('balneario.index', ['zonas' => $this->zonas]);
    }

    public function detalle($id)
    {
        $zona = collect($this->zonas)->firstWhere('id', $id);
        return view('balneario.detalle', ['zona' => $zona]);
    }
}

