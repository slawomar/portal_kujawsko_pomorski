@extends('admin.layout.app')

@section('heading', 'Pulpit')

@section('main_content')

<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                {{-- klasa atlassian ze strony fontawesome.com --}}
                <i class="fab fa-atlassian"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Kategorie Artykułów</h4>
                </div>
                <div class="card-body">
                    {{-- zmienna z AdminHomeController --}}
                    {{ $total_category }}
                </div>
            </div>
        </div>
    </div>  
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            {{-- bg-success oznacza zieloną ikonkę dla podkategorii --}}
            <div class="card-icon bg-success">
                <i class="fab fa-bandcamp"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Podkategorie</h4>
                </div>
                <div class="card-body">
                    {{-- zmienna z AdminHomeController --}}
                    {{ $total_subcategory }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fas fa-newspaper"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Artykuły</h4>
                </div>
                <div class="card-body">
                    {{-- zmienna z AdminHomeController --}}
                    {{ $total_news }}
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-info">
                <i class="fas fa-camera"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Galerie Zdjęć</h4>
                </div>
                <div class="card-body">
                    {{-- zmienna z AdminHomeController --}}
                    {{ $total_photo }}
                </div>
            </div>
        </div>
    </div>  
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            {{-- bg-success oznacza zieloną ikonkę dla podkategorii --}}
            <div class="card-icon bg-warning">
                <i class="fas fa-video"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Galerie Wideo</h4>
                </div>
                <div class="card-body">
                    {{-- zmienna z AdminHomeController --}}
                    {{ $total_video }} 
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fas fa-question-circle"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>FAQ</h4>
                </div>
                <div class="card-body">
                    {{-- zmienna z AdminHomeController --}}
                    {{ $total_faq }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-vote-yea"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Sondy Online</h4>
                </div>
                <div class="card-body">
                    {{-- zmienna z AdminHomeController --}}
                    {{ $total_poll }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fab fa-google-drive"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Kanały</h4>
                </div>
                <div class="card-body">
                    {{-- zmienna z AdminHomeController --}}
                    {{ $total_channel }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-info">
                <i class="fas fa-users"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Subskrypcje</h4>
                </div>
                <div class="card-body">
                    {{-- zmienna z AdminHomeController --}}
                    {{ $total_subscriber }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection