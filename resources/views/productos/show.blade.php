@extends('layouts.master')

@section('content')

    <div class="row">

	    <div class="col-sm-4">

	        {{-- TODO: Imagen genérica de los productos --}}
	        <img src="https://picsum.photos/200/300/?random" style="height:200px"/>

	    </div>
	    <div class="col-sm-8">



	        {{ $producto->nombre }} <br />
	        {{ $producto->categoria }} <br />

	        @if($producto->pendiente)
                <button type="button" class="btn btn-info">Producto actualmente comprado</button>
            @else
            	 <button type="button" class="btn btn-danger">Pendiente de compra</button>
            @endif

	    </div>
	</div>


@stop