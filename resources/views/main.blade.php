<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <title>UTS - PBF</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


    {{-- template  --}}
		<!-- FONTS -->
		<link rel="stylesheet" href="{{asset('template/fonts/fontawesome/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('template/fonts/iconsmind/iconsmind.css')}}">
		<!-- STYLESHEETS -->
		<link rel="stylesheet" href="{{asset('template/css/plugins.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/css/style.css')}}">

        <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

    <title>uts</title>
</head>

<body>
    <div class="vl-site-holder animsition vl-footer-fixed">
        <div class="vl-content-holder">
            <header class="vl-header-holder vl-header-fixed" data-header-fixed="1">
                <div class="container">
                    <div class="vl-header-inner">
                        <div class="vl-header-left">
                            <a href="/" class="vl-site-logo">
                            <img src="{{asset('template/img/logo.png')}}" alt="Vinero" style="max-height: 13px">
                            </a>
                        </div>
                        <div class="vl-header-right">
                            <div class="vl-menu-toggle vl-fullscreen-menu-toggle" data-before-text="Menu">
                                <span class="line line-one"><span class="inner"></span></span>
                                <span class="line line-two"><span class="inner"></span></span>
                                <span class="line line-three"><span class="inner"></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- /.vl-header-holder vl-header-fixed -->
            <div class="vl-navigation-fullscreen-holder">
                <div class="vl-navigation-fullscreen">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="{{url('page/create')}}">Create</a></li>
                    </ul>
                    <div class="vl-navigation-socials">
                        <ul>
                            <li><a href="#" class="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" class="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="tooltip" title="YouTube"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <!-- /.vl-navigation-socials -->
                </div>
            </div>
            <!-- /.vl-navigation-fullscreen-holder -->
            <div class="vl-hero-title-holder jarallax" style="background-image: url('{{asset('template/img/sip.png')}}');">
                <div class="vl-hero-title-inner">
                    <h1 class="vl-hero-title">Blog blue</h1>
                    <p class="vl-hero-subtitle">Read the latest news and stories.</p>
                </div>
            </div>
            <main class="vl-main-holder vl-main-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">

    @yield('maincontent')
                        </div>
                        <div class="col-md-3 hidden-sm-down">
                            <div class="vl-sidebar">

                                        <div class="vl-widget vinero_widget_subscribe">



                                                <div class="vl-form-group">

                                                </div>
                                            <a class="vl-btn vl-btn-primary block" style="color:white;" href="{{url('page/create')}}">Create blog</a>

                                        </div>
                                <!-- /.vl-widget widget_search -->
                                <div class="vl-widget widget_recent_entries">

                                    <ul>
                                        {{-- @foreach ($data as $item)

                                        <li>
                                            <a href="#">{{$item['title']}}</a>
                                            <span class="post-date">July 22, 2017</span>
                                        </li>
                                        @endforeach --}}

                                    </ul>
                                </div>

                                <!-- /.vl-widget vinero_widget_subscribe -->
                            </div>
                            <!-- /.vl-sidebar -->
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
    		<!-- /.vl-site-holder -->
		<a href="#" class="vl-back-to-top hidden"><i class="fa fa-angle-up"></i></a>
		<!-- /.vl-back-to-top -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>

        <script> $(function() {
            var editor = new FroalaEditor('#example')
            var config = {
                enter: $.FroalaEditor.ENTER_BR
            };
            $('textarea#example').froalaEditor(config);
        });
        </script>
    <script>
        $('#summernote').summernote({
          placeholder: 'Hello Bootstrap 4',
          tabsize: 2,
          height: 100
        });
      </script>

	<!-- SCRIPTS -->
	<script src="{{asset('template/vendors/jquery.min.js')}}"></script>
	<script src="{{asset('template/scripts/plugins.min.js')}}"></script>
	<script src="{{asset('template/scripts/script.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


</body>

</html>
