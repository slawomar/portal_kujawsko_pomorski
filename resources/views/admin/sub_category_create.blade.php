@extends('admin.layout.app')

@section('heading', 'Tworzenie Podkategorii')

@section('button')
<a href="{{ route('admin_sub_category_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i>Widok</a>
@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_sub_category_store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">  
                    <div class="form-group mb-3">
                        <label>Nazwa podkategorii *</label>
                        <input type="text" class="form-control" name="sub_category_name" value="">
                    </div>
                    <div class="form-group mb-3">
                        <label>Widoczność w menu</label>
                        <select name="show_on_menu" class="form-control">
                            <option value="Show">Pokaż</option>
                            <option value="Hide">Ukryj</option>
                        </select>
                    </div> 
                    <div class="form-group mb-3">
                        <label>Widoczność w Start</label>
                        <select name="show_on_home" class="form-control">
                            <option value="Show">Pokaż</option>
                            <option value="Hide">Ukryj</option>
                        </select>
                    </div> 
                    <div class="form-group mb-3">
                        <label>Kolejność podkategorii *</label>
                        <input type="text" class="form-control" name="sub_category_order" value="">
                    </div>   
                    <div class="form-group mb-3">
                        <label>Wybierz kategorię *</label>
                        <select name="category_id" class="form-control">
                            @foreach($categories as $row)
                                <option value="{{  $row->id }}">{{ $row->category_name }}</option>
                            @endforeach
                        </select>
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