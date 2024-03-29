@extends('layouts.register')

@section('content')


<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Indica los datos para que tus clientes te puedan contactar</h2>
                    <form method="POST">

                        <div class="questions">Teléfono
                                <div class="p-b-15"></div>
                                <input type="tel" class="input_text" id="phone" name="phone"
                                       pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
                                       required>
                                
                                <div class="text-besides">Formato: 1234567890</div>
                            <div class="p-b-15"></div>
                        </div>
                        <div class="questions">E-Mail 
                                <div class="p-b-15"></div>


                                        <input id="email" type="email"
                                            class="input_text{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="p-b-100"></div>
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
