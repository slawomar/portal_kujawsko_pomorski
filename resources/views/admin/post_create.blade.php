@extends('admin.layout.app')

@section('heading', 'Tworzenie Postu')

@section('button')
<a href="{{ route('admin_post_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i>Widok</a>
@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_post_store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">  
                    <div class="form-group mb-3">
                        <label>Tytuł Artykułu *</label>
                        <input type="text" class="form-control" name="post_title" value="">
                    </div>
                    <div class="form-group mb-3">
                        <label>Treść Artykułu *</label>
                        <textarea name="post_detail" class="form-control snote" cols="30" rows="10">
                        </textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label>Zdjęcie Artykułu *</label>
                       <div><input type="file" name="post_photo"></div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Wybierz Kategorię/Podkategorię *</label>
                        <select name="sub_category_id" class="form-control" select2>
                            @foreach($sub_categories as $item)
                                <option value="{{ $item->id }}">{{ $item->sub_category_name }} ({{ $item->rCategory->category_name }})</option>
                            @endforeach      
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Czy jest udostępniony?</label>
                        <select name="is_share" class="form-control">
                            <option value="1">Tak</option>
                            <option value="0">Nie</option>
                        </select>
                    </div> 
                    <div class="form-group mb-3">
                        <label>Czy jest komentowany?</label>
                        <select name="is_comment" class="form-control">
                            <option value="1">Tak</option>
                            <option value="0">Nie</option>
                        </select>
                    </div> 
                    <div class="form-group mb-3">
                        <label>Tagi</label>
                        <input type="text" class="form-control" name="tags" value="">
                    </div>
                    <div class="form-group mb-3">
                        <label>Czy chcesz wysłać do subskrybentów?</label>
                        <select name="subscriber_send_option" class="form-control">
                            <option value="1">Tak</option>
                            <option value="0">Nie</option>
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