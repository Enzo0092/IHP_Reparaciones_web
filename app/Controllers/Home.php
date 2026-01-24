<?php
namespace App\Controllers;

class Home extends BaseController
{
 
    public function index()
    {
        $data['titulo'] = 'IHP Reparaciones | Servicio Técnico';
        return view('home', $data);
    }

    public function celulares()
    {
        $data['titulo'] = 'Reparación de Celulares | IHP Reparaciones';
        return view('celulares', $data);
    }

    public function pcs()
    {
        $data['titulo'] = 'Reparación de Computadoras | IHP Reparaciones';
        return view('pcs', $data);
    }

    public function consolas()
    {
        $data['titulo'] = 'Reparación de Consolas | IHP Reparaciones';
        return view('consolas', $data);
    }

    public function desarrollo()
    {
        $data['titulo'] = 'Desarrollo de Software | IHP Reparaciones';
        return view('desarrollo', $data);
    }

    public function piezas()
    {
        $data['titulo'] = 'Venta de Piezas | IHP Reparaciones';
        return view('piezas', $data);
    }

    public function youtube()
{
    $data['titulo'] = 'YouTube | IHP Reparaciones';
    return view('youtube', $data);
}
}