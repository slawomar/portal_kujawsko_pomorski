@extends('admin.layout.app')

@section('heading', 'Edytowanie Autora')

@section('button')
<a href="{{ route('admin_author_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i>View</a>
@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_author_update',$author_data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">  
                    <div class="form-group mb-3">
                        <label>Istniejące Zdjęcie</label>
                        <div>
                            <img src="{{ asset('uploads/'.$author_data->photo) }}" alt="" style="width:150px;">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Zmień Zdjęcie</label>
                        <div><input type="file" name="photo"></div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Nazwisko *</label>
                        <input type="text" class="form-control" name="name" value="{{ $author_data->name }}">
                    </div>
                    <div class="form-group mb-3">
                        <label>Email *</label>
                        <input type="text" class="form-control" name="email" value="{{ $author_data->email }}">
                    </div> 
                    <div class="form-group mb-3">
                        <label>Hasło</label>
                        <input type="password" class="form-control" name="password" value="">
                    </div>   
                    <div class="form-group mb-3">
                        <label>Powtórz Hasło</label>
                        <input type="password" class="form-control" name="retype_password" value="">
                    </div>          
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Aktualizuj</button>
    </div>
    </form>
</div>

@endsection