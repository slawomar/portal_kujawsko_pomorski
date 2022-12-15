@extends('admin.layout.app')

@section('heading', 'Edytuj Sondę Online')

@section('button')
<a href="{{ route('admin_online_poll_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i>Widok</a>
@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_online_poll_update',$online_poll_data->id) }}" method="post">
        @csrf
        <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body"> 
                    <div class="form-group mb-3">
                        <label>Pytanie *</label>
                        <textarea name="question" class="form-control" cols="30" rows="10" style="height:150px;">{{ $online_poll_data->question }}</textarea>
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