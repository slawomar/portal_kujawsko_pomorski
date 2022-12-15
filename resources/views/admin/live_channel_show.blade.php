@extends('admin.layout.app')

@section('heading', 'Kanały Live')

@section('button')
<a href="{{ route('admin_live_channel_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Dodaj</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Filmy</th>
                                    <th>Tytuł</th>
                                    <th>Akcja</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($live_channels as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>  
                                    <td>
                                        {{-- zamiast kodu youtube $orw->video_id z bazy danych --}}
                                        <iframe style="width:300px;height:200px;" width="560" height="315" src="https://www.youtube.com/embed/{{ $row->video_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </td>
                                    <td>{{ $row->heading }}</td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_live_channel_edit',$row->id) }}" class="btn btn-primary">Edycja</a>
                                        <a href="{{ route('admin_live_channel_delete',$row->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Usuń</a>
                                    </td>   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection