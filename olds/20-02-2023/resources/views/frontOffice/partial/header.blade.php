
    <!--==================== header ====================-->
    <div class="nav-mobile">
        <div class="logo-mobile">
            {{-- logo-purple.png --}}
            <a href="#"><img src="{{ asset('imgs/logo-purple.png') }}"></a>
        </div>
        <div class="right-nav-mobile">
            {{-- <div class="lang">
                <span>EN</span>
            </div> --}}
            <div class="burger-mobile" {{-- onclick="myFunction(this)" --}}>
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

        </div>
    </div>
    <section class="header" id="header">
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="{{ route('home') }}#ourwork" >Our work</a>
                </li>
                <li class="nav__item">
                    <a href="{{ route('about') }}" >About</a>
                </li>
                <li class="nav__item">
                    <a href="{{ route('home') }}"><img src="{{ asset('imgs/logo-purple.png') }}" id="flipping-logo"></a>
                </li>
                <li class="nav__item">
                    <a href="{{ route('blog') }}" >Blog</a>
                </li>
                <li class="nav__item">
                    <a href="{{ route('contact') }}" >Contact</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="header-mobile" >
        <div class="bg-white">
            <div class="nav__menu-mobile" id="nav-menu-mobile">
                <ul class="nav__list-mobile">
                    {{-- on click li click the a inside it with jquery --}}
                    <li class="nav__item-mobile" onclick="window.location.href='{{ route('home') }}'">
                        <a href="javascript:void(0)" >Home</a>
                    </li>
                    <li class="nav__item-mobile" onclick="window.location.href='{{ route('home') }}#ourwork'">
                        <a href="javascript:void(0)" >Our work</a>
                    </li>
                    <li class="nav__item-mobile" onclick="window.location.href='{{ route('about') }}'">
                        <a href="javascript:void(0)"  >About</a>
                    </li>
                    <li class="nav__item-mobile" onclick="window.location.href='{{ route('blog') }}'">
                        <a href="javascript:void(0)" >Blog</a>
                    </li>
                    <li class="nav__item-mobile" onclick="window.location.href='{{ route('contact') }}'">
                        <a href="javascript:void(0)" >Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>