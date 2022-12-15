@extends('admin.layout.app')

@section('heading', 'Edycja Strony O Nas')

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_page_about_update') }}" method="post">
        @csrf
        <div class="row">
            {{-- klasa col-12 szerokie okno na całą stronę --}}
        <div class="col-12">
            <div class="card">
                <div class="card-body">  
                    <div class="form-group mb-3">
                        <label>Tytuł *</label>
                        <input type="text" class="form-control" name="about_title" value="{{ $page_data->about_title}}">
                    </div>
                    <div class="form-group mb-3">
                        <label>Szczegóły *</label>
                        <textarea name="about_detail" class="form-control snote" id="" cols="30" rows="10">{{ $page_data->about_detail }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label>Status?</label>
                        <select name="about_status" class="form-control">
                            <option value="Show" @if($page_data->about_status == 'Show') selected @endif>Show</option>
                            <option value="Hide" @if($page_data->about_status == 'Hide') selected @endif>Hide</option>
                        </select>
                    </div>           
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
</div>

@endsection