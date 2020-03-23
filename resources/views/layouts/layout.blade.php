@include('.partials._header')
    {{-- HEADER --}}
    <header>
      @yield('header')
    </header>
    {{-- /HEADER --}}
    {{-- MAIN --}}
    <main>
      @yield('main')
    </main>
    {{-- /MAIN --}}
    {{-- FOOTER --}}
    <footer>
      @yield('footer')
    </footer>
    {{-- /FOOTER --}}
@include('.partials._footer')
