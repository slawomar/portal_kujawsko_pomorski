@extends('admin.layout.app')

@section('heading', 'Edytuj Foto Galerię')

@section('button')
<a href="{{ route('admin_photo_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i>View</a>
@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_photo_update',$photo_data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body"> 
                    <div class="form-group mb-3">
                        <label>Aktualne Zdjęcie *</label>
                        <img src="{{ asset('uploads/'.$photo_data->photo) }}" alt="" style="width:200px;">
                    </div> 
                    <div class="form-group mb-3">
                        <label>Zmień Zdjęcie *</label>
                        <div><input type="file" name="photo"></div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Tytuł *</label>
                        <input type="text" class="form-control" name="caption" value="{{ $photo_data->caption }}">
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