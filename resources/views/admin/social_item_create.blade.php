@extends('admin.layout.app')

@section('heading', 'Dodaj Serwis Społecznościowy')

@section('button')
<a href="{{ route('admin_social_item_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i>Widok</a>
@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_social_item_store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">  
                    <div class="form-group mb-3">
                        <label>Ikonka *</label>
                        <input type="text" class="form-control" name="icon">
                    </div>
                    <div class="form-group mb-3">
                        <label>URL *</label>
                        <input type="text" class="form-control" name="url">
                    </div>          
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Zatwierdź</button>
    </div>
    </form>
</div>

@endsection