@extends('layouts.app')

@section('template_title')
    Productito
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Productito') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('productitos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Precio</th>
										<th>Descripcion</th>
										<th>Imagen</th>
										<th>Idcategoria</th>
										<th>Idmarca</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productitos as $productito)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $productito->nombre }}</td>
											<td>{{ $productito->precio }}</td>
											<td>{{ $productito->descripcion }}</td>
											<td>{{ $productito->imagen }}</td>
											<td>{{ $productito->idCategoria }}</td>
											<td>{{ $productito->idMarca }}</td>

                                            <td>
                                                <form action="{{ route('productitos.destroy',$productito->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productitos.show',$productito->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productitos.edit',$productito->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $productitos->links() !!}
            </div>
        </div>
    </div>
@endsection
