@extends('admin.layout.app')

@section('heading', 'Dodaj Kanał Live')

@section('button')
<a href="{{ route('admin_live_channel_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i>View</a>
@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_live_channel_store') }}" method="post">
        @csrf
        <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">  
                    <div class="form-group mb-3">
                        <label>Film Id*</label>
                        <input type="text" class="form-control" name="video_id">
                    </div>
                    <div class="form-group mb-3">
                        <label>Tytuł *</label>
                        <input type="text" class="form-control" name="heading">
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