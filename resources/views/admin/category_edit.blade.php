@extends('admin.layout.app')

@section('heading', 'Edycja Kategorii')

@section('button')
<a href="{{ route('admin_category_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i>Widok</a>
@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_category_update',$category_single->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">  
                    <div class="form-group mb-3">
                        <label>Nazwa kategorii *</label>
                        <input type="text" class="form-control" name="category_name" value="{{ $category_single->category_name }}">
                    </div>
                    <div class="form-group mb-3">
                        <label>Pokaż w menu</label>
                        <select name="show_on_menu" class="form-control">
                            <option value="Show" @if($category_single->show_on_menu == 'Show') selected @endif>Pokaż</option>
                            <option value="Hide" @if($category_single->show_on_menu == 'Hide') selected @endif>Ukryj</option>
                        </select>
                    </div> 
                    <div class="form-group mb-3">
                        <label>Kolejność kategorii *</label>
                        <input type="text" class="form-control" name="category_order" value="{{ $category_single->category_order }}">
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