@extends('layouts.app')

@section('template_title')
    Update Institucion
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Institucion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('institucions.update', $institucion->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('institucion.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
