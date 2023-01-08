@extends('admin.layout.app')

@section('heading', 'Kategorie')

@section('button')
<a href="{{ route('admin_category_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Dodaj</a>
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
                                    <th>L.p.</th>
                                    <th>Nazwa kategorii</th>
                                    <th>Widoczność w menu</th>
                                    <th>Kolejność</th>
                                    <th>Akcja</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>  
                                    <td>{{ $row->category_name }}</td>
                                    <td>{{ $row->show_on_menu }}</td>
                                    <td>{{ $row->category_order }}</td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_category_edit',$row->id) }}" class="btn btn-primary">Edytuj</a>
                                        <a href="{{ route('admin_category_delete',$row->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Usuń</a>
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