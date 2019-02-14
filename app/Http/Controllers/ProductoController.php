<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    //
    public function getIndex()
    {
    	# code...
      $arrayProductos = Producto::all();
    	return view('productos', array('arrayProductos' => $arrayProductos));
    }

   	public function getShow($id)
   	{
   		# code...
      $producto = Producto::findOrFail($id);
   		return view('productos.show', array('producto'=>$producto));
   	}

   	public function getCreate()
   	{
   		# code...
   		return view('productos.create');
   	}

   	public function getEdit($id)
   	{
   		# code...
   		return view('productos.edit', array('id'=>$id));
   	}




	

}