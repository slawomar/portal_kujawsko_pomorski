
        <div class="website-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Start</a>
                                    </li>
                                    {{-- zmienna globalna global_categories z AppServiceProvider --}}
                                    @foreach($global_categories as $item)
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javscript:void;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ $item->category_name }}
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                @foreach($item->rSubCategory as $item2)
                                                <li><a class="dropdown-item" href="{{ route('category',$item2->id) }}">{{ $item2->sub_category_name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Galeria
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="{{ route('photo_gallery') }}">Zdjęcia</a></li>
                                            <li><a class="dropdown-item" href="{{ route('video_gallery') }}">Filmy</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>  