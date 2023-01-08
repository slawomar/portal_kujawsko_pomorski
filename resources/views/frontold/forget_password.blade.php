@extends('front.layout.app')

@section('main_content')

<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Zapomniałeś hasło</h2>
                <nav class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Start</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Zapomniałeś hasło</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('forget_password_submit') }}" method="post">
                    @csrf
                <div class="login-form">
                    <div class="mb-3">
                        <label for="" class="form-label">Adres Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary bg-website">Zatwierdź</button>
                        <a href="{{ route('login') }}">Powrót do strony logowania</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection