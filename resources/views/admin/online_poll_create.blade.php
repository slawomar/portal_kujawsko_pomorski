@extends('admin.layout.app')

@section('heading', 'Dodaj Sondę Online')

@section('button')
<a href="{{ route('admin_online_poll_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i>View</a>
@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_online_poll_store') }}" method="post">
        @csrf
        <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">  
                    <div class="form-group mb-3">
                        <label>Pytanie *</label>
                        <textarea name="question" class="form-control" cols="30" rows="10" style="height:150px;"></textarea>
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