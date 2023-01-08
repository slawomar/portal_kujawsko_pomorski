@extends('admin.layout.app')

@section('heading', 'Tworzenie Kategorii')

@section('button')
<a href="{{ route('admin_category_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i>Widok</a>
@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_category_store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">  
                    <div class="form-group mb-3">
                        <label>Nazwa kategorii *</label>
                        <input type="text" class="form-control" name="category_name" value="">
                    </div>
                    <div class="form-group mb-3">
                        <label>Pokaż w menu</label>
                        <select name="show_on_menu" class="form-control">
                            <option value="Show">Pokaż</option>
                            <option value="Hide">Ukryj</option>
                        </select>
                    </div> 
                    <div class="form-group mb-3">
                        <label>Kolejność kategorii *</label>
                        <input type="text" class="form-control" name="category_order" value="">
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