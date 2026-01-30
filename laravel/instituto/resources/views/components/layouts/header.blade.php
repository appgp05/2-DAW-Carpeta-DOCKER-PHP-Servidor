<header class="h-header bg-header flex items-center justify-between px-5">
    <img class="" src="{{asset("images/logo.png")}}">
    <h1 class="text-4xl text-blue-900">{{__("GESTIÓN DEL INSTITUTO")}}</h1>
    <!-- Si esto autenticado -->
    @auth
        {{auth()->user()->name}}
{{--        <button class="btn btn-sm btn-primary">Logout</button>--}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-sm btn-primary">
                {{ __('Cerrar sesión') }}
            </button>
        </form>
    @endauth
    <!-- Si no estoy autenticado -->
    @guest
        <div>
            <a href="{{ route('login') }}">
                <button class="btn btn-sm btn-primary">{{__("Login")}}</button>
            </a>
            <a href="{{ route('register') }}">
                <button class="btn btn-sm btn-primary">{{__("Register")}}</button>
            </a>
        </div>
    @endguest

    <x-lang></x-lang>
</header>
