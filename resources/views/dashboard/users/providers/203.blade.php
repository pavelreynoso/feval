@extends('layouts.register')

@section('content')

<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                    <h2 class="title">Área de Cobertura</h2>
                <form method="POST">
                        <div class="questions">¿Cuál es el área de cobertura para brindar tus servicios?

                            </div>
                            <div>
                                    <h6 class="explanations">Agrega todas las ciudades a las que podrías ofrecer tus servicios </h6>
                                </div>

                        <div class="p-b-100">
                            <!--Dual list va aqui-->
                        </div>
                        <div class="p-b-15 center">
                            <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Regresar</button>
                            <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Continuar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
