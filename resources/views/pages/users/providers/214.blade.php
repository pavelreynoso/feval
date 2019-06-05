@extends('layouts.register')
@section('content')

<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <form method="POST">
                    <!--here is the code for the loop through Catering categories-->
                    <div class="questions">Elige la categoría de tu servicio banquetes y bebidas</div>
                    <select name="catering_categories" id="cateringCetegories" class="select_register_medium"
                        style="color:black">
                        <option selected disabled>Selecciona...</option>
                        <!-- here is the list from laravel of the Music categories table with select2 -->
                        @foreach ($cateringcategories as $cateringcategory)
                        <option value="{{ $cateringcategory->id }}">{{$cateringcategory->type}}</option>
                        @endforeach
                    </select>
                    <!--here is the code for the loop through Catering type-->
                    <div class="questions">Como se ofrece tu servicio?</div>
                    <select name="catering_offer_type" id="cateringOfferType" class="select_register_medium"
                        style="color:black">
                        <option selected disabled>Selecciona..</option>
                        <!-- here is the list from laravel of the catering offer type table with select2 -->
                        @foreach ($cateringoffertypes as $cateringoffertype)
                        <option value="{{ $cateringoffertype->id }}">{{$cateringoffertype->type}}</option>
                        @endforeach
                    </select>
                    <!--here is the code for the loop through Catering services-->
                    <div class="questions">Elige todos los servicios que se incluyen</div>
                    <div class="questions">
                        @foreach ($cateringservices as $cateringservice)
                        <div class="checkbox checkbox-primary">
                            <input id="cateringservice" type="checkbox">
                            <label for="cateringservice">
                                <h6>
                                    <option value=>{{$cateringservice->type}} </option>
                                </h6>
                            </label>
                        </div>
                        @endforeach
                    </div>
                    <div class="p-b-15 center">
                        <a href="{{ route('100') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Regresar</button>
                        </a>
                        <a href="{{ route('201') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button" onclick="validate()" href=#>Continuar</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection


@section('scripts')
    <script type="text/javascript" src="{{asset('../js/214.js')}}"></script>
@endsection
