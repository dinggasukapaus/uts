@extends('main')

@section('maincontent')




    @for ($item = 0; $item < count($data); $item++)
    {{-- <br>

        <div class="card w-75">
            <div class="card-header">

                <i class="fa fa-user"></i>author {{$data[$item]['author']}}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$data[$item]['title']}}</h5>
                <p class="card-text">{{ substr(strip_tags($data[$item]['content']), 0, 100) }}
                    {{ strlen(strip_tags($data[$item]['content'])) > 50 ? "..." : "" }}</p>

                <a href="{{route('page.show',$data[$item]['id'])}}" class="btn btn-primary">readmore</a>

            </div>
        </div> --}}

        <div class="vl-postlist-holder">
            <div class="vl-postlist vl-postlist-standard cubeportfolio clearfix">
                <article class="vl-post-standard cbp-item">
                    <div class="vl-post-inner">
                        <div class="vl-post-thumbnail">
                            <a href="#">
                            <img src="{{asset('template/img/blog_karakter.png')}}" alt="">
                            </a>
                        </div>
                        <div class="vl-post-content">
                            <div class="vl-post-meta">
                                <span class="vl-post-author"><i class="fa fa-fw fa-user"></i><a href="#">{{$data[$item]['author']}}</a></span>
                                <span class="vl-post-cats"><i class="fa fa-fw fa-folder"></i><a href="#">News</a></span>
                                <span class="vl-post-date"><i class="fa fa-fw fa-clock-o"></i>July 22, 2017</span>
                            </div>
                            <h3 class="vl-post-title"><a href="blog-post-single.html">{{$data[$item]['title']}}</a></h3>
                            <div class="vl-post-excerpt">
                                {!! substr(strip_tags($data[$item]['content']), 0, 100) !!}
                                {!! strlen(strip_tags($data[$item]['content'])) > 50 ? "..." : "" !!}
                            </div>
                            <div class="vl-post-footer">
                                <a href="{{route('page.show',$data[$item]['id'])}}" class="vl-btn vl-btn-primary">Read More</a>
                                <input class="vl-btn vl-btn-danger" type="submit" form="formDelete" value="delete">
                            </div>
                        </div>
                    </div>
                </article>


            </div>
        </div>
        <br>
        <form method="POST" id="formDelete" action="{{route('page.destroy',$data[$item]['id'])}}">
            @method('delete');
            @csrf

            </form>
        @endfor

        <!-- /.vl-postlist-holder -->
        <div class="vl-postlist-recent-popular">

        </div>
        <!-- /.vl-postlist-recent-popular -->



@endsection
