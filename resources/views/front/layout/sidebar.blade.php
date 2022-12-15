<div class="sidebar">

    <div class="widget">
        @foreach($global_sidebar_top_ad as $row)
            <div class="ad-sidebar">
                @if($row->sidebar_ad_url == '')
                    <img src="{{ asset('uploads/'.$row->sidebar_ad) }}" alt="">
                @else
                    <a href="{{ $row->sidebar_ad_url }}"><img src="{{ asset('uploads/'.$row->sidebar_ad) }}" alt=""></a>
                @endif
                
            </div>
        @endforeach
    </div>

    <div class="widget">
        <div class="tag-heading">
            <h2>Tagi</h2>
        </div>
        <div class="tag">
            @php
            $all_tags = \App\Models\Tag::select('tag_name')->distinct()->get();
            @endphp
            @foreach($all_tags as $item)
            <div class="tag-item">
                <a href="{{ route('tag_posts_show',$item->tag_name) }}"><span class="badge bg-secondary">{{ $item->tag_name }}</span></a>
            </div>
            @endforeach   
        </div>
    </div>

    <div class="widget">
        <div class="archive-heading">
            <h2>Archiwum</h2>
        </div>
        <div class="archive">
            @php
            $archive_array = [];
            $all_post_data = \App\Models\Post::orderBy('id','desc')->get();
            foreach($all_post_data as $row) 
            {
                $ts = strtotime($row->created_at);
                $month = date('m',$ts);
                $month_full = date('F',$ts);
                $year = date('Y',$ts);
                $archive_array[] = $month.'-'.$month_full.'-'.$year; 
            }
            $archive_array = array_values(array_unique($archive_array));
            @endphp
            <form action="{{ route('archive_show') }}" method="post">
                @csrf
                <select name="archive_month_year" class="form-select" onchange="this.form.submit()">
                    <option value="">Wybierz Miesiąc</option>
                    @for($i=0;$i<count($archive_array);$i++)
                    @php
                        $temp_arr = explode('-',$archive_array[$i]);

                    
                    @endphp
                    <option value="{{ $temp_arr[0].'-'.$temp_arr[2] }}">{{ $temp_arr[1] }}, {{ $temp_arr[2] }}</option>
                    @endfor
                </select>
            </form>
        </div>
    </div>

    <div class="widget">
        
        {{-- global_live_channel_data jest w AppServiceProviders --}}
        @foreach($global_live_channel_data as $item)  
            <div class="live-channel">
                <div class="live-channel-heading">
                    <h2>{{ $item->heading }}</h2>
                </div>
                <div class="live-channel-item">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $item->video_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        @endforeach

    </div>
    
    <div class="widget">
        <div class="news">
            <div class="news-heading">
                <h2>Popularne i ostatnie wiadomości</h2>
            </div>           

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Ostatnie</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Popularne</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                   @foreach($global_recent_news_data as $item) 
                   {{-- wyświetla tylko pięć artykułów w pasku prawym z ostatnich --}}
                    @if($loop->iteration > 5)
                            @break
                    @endif
                            <div class="news-item">
                                <div class="left">
                                    <img src="{{ asset('uploads/'.$item->post_photo) }}" alt="">
                                </div>
                                <div class="right">
                                    <div class="category">
                                        <span class="badge bg-success">{{ $item->rSubCategory->sub_category_name }}</span>
                                    </div>
                                    <h2><a href="{{ route('news_detail',$item->id) }}">{{ $item->post_title }}</a></h2>
                                    <div class="date-user">
                                        <div class="user">
                                            <div class="user">
                                                @if($item->author_id==0)
                                                        @php
                                                        $user_data = \App\Models\Admin::where('id',$item->admin_id)->first();
                                                        @endphp
                                                        @else
                                                       {{-- I will work with this section later --}}
                                                         @endif
                                                    <a href="">{{ $user_data->name }}</a>
                                            </div>  
                                        </div>
                                        <div class="date">
                                            @php
                                            $ts = strtotime($item->updated_at);
                                            $updated_date = date('d F, Y',$ts);
                                            @endphp
                                            <a href="javascript:void;">{{ $updated_date }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                   @endforeach      
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    @foreach($global_popular_news_data as $item) 
                   {{-- wyświetla tylko pięć artykułów w pasku prawym z popularnych --}}
                    @if($loop->iteration > 5)
                            @break
                    @endif
                    <div class="news-item">
                        <div class="left">
                            <img src="{{ asset('uploads/'.$item->post_photo) }}" alt="">
                        </div>
                        <div class="right">
                            <div class="category">
                                <span class="badge bg-success">{{ $item->rSubCategory->sub_category_name }}</span>
                            </div>
                            <h2><a href="{{ route('news_detail',$item->id) }}">{{ $item->post_title }}</a></h2>
                            <div class="date-user">
                                @if($item->author_id==0)
                                @php
                                $user_data = \App\Models\Admin::where('id',$item->admin_id)->first();
                                @endphp
                                 @else
                               {{-- I will work with this section later --}}
                                @endif
                            <a href="">{{ $user_data->name }}</a>
                                <div class="date">
                                    @php
                                    $ts = strtotime($item->updated_at);
                                    $updated_date = date('d F, Y',$ts);
                                    @endphp
                                    <a href="javascript:void;">{{ $updated_date }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach  
                </div>
            </div>
        </div>
    </div>
    <div class="widget">
        <div class="poll-heading">
            <h2>Sonda Online</h2>
        </div>
        <div class="poll">
            <div class="question">
               {{ $global_online_poll_data->question; }}
            </div>
            
                @php
                $total_vote = $global_online_poll_data->yes_vote+$global_online_poll_data->no_vote;
                //warunek na sytuację, gdy nie ma jeszcze głosów i nie mnożymy przez zero do policzenia procentów
                if($global_online_poll_data->yes_vote == 0)
                {
                    $total_yes_percentage = 0;
                }
                else 
                {
                    $total_yes_percentage = ($global_online_poll_data->yes_vote*100)/$total_vote;
                    $total_yes_percentage = ceil($total_yes_percentage); 
                }
                
                if($global_online_poll_data->no_vote == 0)
                {
                    $total_no_percentage = 0;
                }
                else 
                {
                    $total_no_percentage = ($global_online_poll_data->no_vote*100)/$total_vote; 
                    $total_no_percentage = ceil($total_no_percentage);
                }
                @endphp

                @if(session()->get('current_poll_id') == $global_online_poll_data->id )
                <div class="poll-result">                        
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td style="width:100px;">Tak {{ $global_online_poll_data->yes_vote }}</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{  $total_yes_percentage }}%" aria-valuenow="{{  $total_yes_percentage }}" aria-valuemin="0" aria-valuemax="100">{{  $total_yes_percentage }}%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Nie {{ $global_online_poll_data->no_vote }}</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{  $total_no_percentage }}%" aria-valuenow="{{  $total_no_percentage }}" aria-valuemin="0" aria-valuemax="100">{{  $total_no_percentage }}%</div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <a href="{{ route('poll_previous') }}" class="btn btn-primary old">Wynik głosowań</a>
                </div>
                @endif

                @if(session()->get('current_poll_id') != $global_online_poll_data->id )
          
                <div class="answer-option">
                    <form action="{{ route('poll_submit') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $global_online_poll_data->id }}">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="vote" id="poll_id_1" value="Tak" checked>
                            <label class="form-check-label" for="poll_id_1">Tak</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="vote" id="poll_id_2" value="Nie">
                            <label class="form-check-label" for="poll_id_2">Nie</label>
                        </div>
                    
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Zatwierdź</button>
                            <a href="{{ route('poll_previous') }}" class="btn btn-primary old" style="margin-top:0;">Wynik głosowań</a>
                        </div>
                    </form>
                </div>
                @endif
        </div>
        
    </div>

    <div class="widget">
        @foreach($global_sidebar_bottom_ad as $row)
            <div class="ad-sidebar">
                @if($row->sidebar_ad_url == '')
                    <img src="{{ asset('uploads/'.$row->sidebar_ad) }}" alt="">
                @else
                    <a href="{{ $row->sidebar_ad_url }}"><img src="{{ asset('uploads/'.$row->sidebar_ad) }}" alt=""></a>
                @endif
                
            </div>
        @endforeach
    </div>

</div>