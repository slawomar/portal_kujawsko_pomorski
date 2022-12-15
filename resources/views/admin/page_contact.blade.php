@extends('admin.layout.app')

@section('heading', 'Edycja Strony Kontakt')

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_page_contact_update') }}" method="post">
        @csrf
        <div class="row">
            {{-- klasa col-12 szerokie okno na całą stronę --}}
        <div class="col-12">
            <div class="card">
                <div class="card-body">  
                    <div class="form-group mb-3">
                        <label>Tytuł *</label>
                        <input type="text" class="form-control" name="contact_title" value="{{ $page_data->contact_title}}">
                    </div>
                    <div class="form-group mb-3">
                        <label>Szczegóły</label>
                        <textarea name="contact_detail" class="form-control snote" id="" cols="30" rows="10">{{ $page_data->contact_detail }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label>Mapa (iFrame Code)</label>
                        <textarea name="contact_map" class="form-control" id="" cols="30" rows="10" style="height:120px;">{{ $page_data->contact_map }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label>Status?</label>
                        <select name="contact_status" class="form-control">
                            <option value="Show" @if($page_data->contact_status == 'Show') selected @endif>Show</option>
                            <option value="Hide" @if($page_data->contact_status == 'Hide') selected @endif>Hide</option>
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