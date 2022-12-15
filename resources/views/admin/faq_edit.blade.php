@extends('admin.layout.app')

@section('heading', 'Edytuj FAQ')

@section('button')
<a href="{{ route('admin_faq_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i>Widok</a>
@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_faq_update',$faq_data->id) }}" method="post">
        @csrf
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">  
                    <div class="form-group mb-3">
                        <label>Tytuł FAQ*</label>
                        <input type="text" class="form-control" name="faq_title" value="{{ $faq_data->faq_title }}">
                    </div>
                    <div class="form-group mb-3">
                        <label>Treść FAQ *</label>
                        <textarea name="faq_detail" class="form-control snote" cols="30" rows="10">{{ $faq_data->faq_detail }}</textarea>
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