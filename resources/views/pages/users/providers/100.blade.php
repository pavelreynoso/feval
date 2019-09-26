@extends('layouts.register')

@section('content')
<input id="progress_percentage" value="" />
<!--Value for the progress on the registration (%)-->
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-title">
                <h2 class="title">Welcome</h2>
            </div>
            <div class="card-body questions">
                Thank you for applying to join our team!
                <br>
                To form part of Feval's affiliate program, you have to register first. If you fill this information first, you are accepting that we may use your information to enhance Feval's network of contacts.
                <br>If you need to create a new user, you can create it now.
                <div class="p-b-15 center p-t-30">
                    <a href="{{ route('register',[2]) }}">
                        <br>{{ __('If you don\'t have a user,')}}
                        <button class="btn2 btn--radius-2 btn-feval" type="button"
                            onclick="validate()">Register Now!</button>
                    </a>
                    <br>
                    <a href="{{ route('login') }}">
                        <br>{{ __('If you\'re already an affiliate,')}}
                        <button class="btn2 btn--radius-2 btn-feval" type="button"
                            onclick="validate()">Log In!</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('../js/100.js')}}"></script>
@endsection
