@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? 'Show Libro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secondary" href="{{ route('libros.index') }}">Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $libro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $libro->categoria->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Editorial:</strong>
                            {{ $libro->editoriales->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
