@extends('admin.layout.app')

@section('heading', 'Dodawanie Autora')

@section('button')
<a href="{{ route('admin_author_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i>View</a>
@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_author_store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">  
                    <div class="form-group mb-3">
                        <label>Zdjęcie</label>
                        <div><input type="file" name="photo"></div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Nazwisko *</label>
                        <input type="text" class="form-control" name="name" value="">
                    </div>
                    <div class="form-group mb-3">
                        <label>Email *</label>
                        <input type="text" class="form-control" name="email" value="">
                    </div> 
                    <div class="form-group mb-3">
                        <label>Hasło *</label>
                        <input type="password" class="form-control" name="password" value="">
                    </div>   
                    <div class="form-group mb-3">
                        <label>Powtórz Hasło *</label>
                        <input type="password" class="form-control" name="retype_password" value="">
                    </div>          
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>

@endsection