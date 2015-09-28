<!doctype html>
<html lang="nl">
<head>
    @include('front.includes.head')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/libs/foundation/css/foundation.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/style.css') }}" />
</head>
<body class="{{$page->title}}">
    <div data-magellan-expedition="fixed" class="sticky-header">
            <div class="main-wrapper">
                <div class="logo"></div>
                <div class="slogan">Drie generaties vakwerk</div>
            </div>
            <div>
                <ul class="button-group even-4">
                    @foreach($menuitems as $menu)
                        <li>
                            <a href="{{ $menu->slug }}" title="{{$menu->title}}" class="button">
                                {{$menu->title}}
                            </a>
                            @if (count($menu->children()->get()) > 0)
                                <ul class="children">
                                @foreach ($menu->children()->get() as $child)
                                    <li>
                                        <a href="{{ $child->slug }}" title="{{$child->title}}" class="button">
                                            {{$child->title}}
                                        </a>
                                    </li>
                                @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
    </div>
    <section class="hero">
        <div class="row">
            <div class="large-6 columns about-box">
                <div class="black-box">
                    <h2>Al uw stucadoorwerken</h2>
                    <p><strong>Specialisaties:</strong><br />
                        Sierpleisters, restauraties, renovaties,<br />
                        gipslijsten & ornamenten
                    </p>
                    <p>Interesse neem dan contact op!</p>
                    <a href="#" class="secondary small button">Direct contact →</a>
                </div>
            </div>
        </div>
    </section>
    @if ($page->title == 'Home')
        <section role="main">
            <div class="row">
                <div class="large-12 columns">
                    <h1>@yield('title')</h1>
                    @yield('content')
                </div><!-- /.col-md-4 -->
            </div>
        </section>
    @else
        <section role="main">
            <div class="row">
                <div class="col-md-12">
                    <h1>@yield('title')</h1>
                    @yield('content')
                    @yield('contact-form')
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </section>
    @endif
    @include('front.includes.footer')
</body>
</html>