@extends('layouts.app')

@section('template_title')
    {{ $editoriale->name ?? 'Show Editoriale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secondary" href="{{ route('editoriales.index') }}">Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $editoriale->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
