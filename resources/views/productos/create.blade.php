@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Añadir nuevo producto
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('productos/create') }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <label for="title">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="number"name="precio" placeholder="precio €">
                        </div>

                        <div class="form-group">
                            <input type="text" name="categoria" placeholder="Categoría">
                        </div>

                        <div class="form-group">
                            <input type="url" name="imagen" placeholder="url de la imagen">
                        </div>

                        <div class="form-group">
                            <label for="synopsis">Descripción</label>
                            <textarea name="descripcion" id="synopsis" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Añadir producto
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


@stop
