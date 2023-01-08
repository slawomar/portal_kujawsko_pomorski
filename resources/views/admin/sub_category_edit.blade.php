@extends('admin.layout.app')

@section('heading', 'Edycja Podkategorii')

@section('button')
<a href="{{ route('admin_sub_category_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i>Widok</a>
@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_sub_category_update',$sub_category_single->id) }}" method="post">
        @csrf
        <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">  
                    <div class="form-group mb-3">
                        <label>Nazwa podkategorii *</label>
                        <input type="text" class="form-control" name="sub_category_name" value="{{ $sub_category_single->sub_category_name }}">
                    </div>
                    <div class="form-group mb-3">
                        <label>Widoczność w menu</label>
                        <select name="show_on_menu" class="form-control">
                            <option value="Show" @if($sub_category_single->show_on_menu == 'Show') selected @endif>Pokaż</option>
                            <option value="Hide" @if($sub_category_single->show_on_menu == 'Hide') selected @endif>Ukryj</option>
                        </select>
                    </div> 
                    <div class="form-group mb-3">
                        <label>Widoczność w Start</label>
                        <select name="show_on_home" class="form-control">
                            <option value="Show" @if($sub_category_single->show_on_home == 'Show') selected @endif>Pokaż</option>
                            <option value="Hide" @if($sub_category_single->show_on_home == 'Hide') selected @endif>Ukryj</option>
                        </select>
                    </div> 
                    <div class="form-group mb-3">
                        <label>Kolejność podkategorii *</label>
                        <input type="text" class="form-control" name="sub_category_order" value="{{ $sub_category_single->sub_category_order }}">
                    </div>   
                    <div class="form-group mb-3">
                        <label>Wybierz kategorię *</label>
                        <select name="category_id" class="form-control">
                            @foreach($categories as $row)
                                <option value="{{  $row->id }}" @if($sub_category_single->category_id == $row->id) selected  @endif>{{ $row->category_name }}</option>
                            @endforeach
                        </select>
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