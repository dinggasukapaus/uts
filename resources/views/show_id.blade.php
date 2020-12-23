@extends('main')

@section('maincontent')

                        <div class="vl-post-content vl-post-single">
                            <p><i class="fa fa-fw fa-user"></i>&nbsp;&nbsp;{{$data['author']}}</p>
                                <blockquote>
                                    <p>
                                        {{$data['title']}}
                                    </p>
                                </blockquote>
                                <p>
                                    {!!$data['content']!!}
                                </p>
                                    <div class="divider divider-hatching"></div>
                                <p>
                            edit dan kembali ada di bawah
                                </p>
                                <div class="vl-post-footer">
                                    <div class="vl-post-share">
                                    </div>
                                    <div class="vl-post-tags">
                                        <a href="{{ url('/page/'.$data['id'].'/edit') }}" rel="tag">Edit</a>
                                        <a href="/" rel="tag">Kembali</a>

                                    </div>
                                </div>
                                <!-- /.vl-post-footer -->
                            </div>



@endsection
