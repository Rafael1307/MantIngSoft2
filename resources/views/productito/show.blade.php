@extends('layouts.app')

@section('template_title')
    {{ $productito->name ?? 'Show Productito' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Productito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productitos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $productito->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $productito->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $productito->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $productito->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Idcategoria:</strong>
                            {{ $productito->idCategoria }}
                        </div>
                        <div class="form-group">
                            <strong>Idmarca:</strong>
                            {{ $productito->idMarca }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
