@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Team Work
@endsection

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Editar Equipo de Trabajo'])
    <section class="content container-fluid">
    <div class="container"> <!-- Agregar contenedor -->
            <div class="row justify-content-center"> 
            <div class="col-md-8">


                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} equipo de trabajo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('team-works.update', $teamWork->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('team-work.form')

                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    @include('layouts.footers.auth.footer')
@endsection