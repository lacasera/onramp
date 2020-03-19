<!-- header -->
{{--
    <div class="text-center px-6 py-2 bg-blue-200 border-blue-900 border-b">
        <p class="text-gray-dark">
            <span class="font-bold uppercase">NOTE:</span> This site is under active development, so it's not complete right now. Check out the <a href="{{ route_wlocale('dev') }}" class="font-bold hover:underline">dev page</a> to learn more.
        </p>
    </div>
    <header class="w-full px-6 text-white" style="background: #3f51d8">
        <div class="container mx-auto max-w-4xl sm:flex justify-between items-center">
            <a href="{{ url_wlocale('/') }}"
                class="block pt-6 pb-2 sm:py-6 flex-grow flex justify-left items-center">
                <img src="/images/onramp_logo.svg" alt="Onramp" class="max-w-xs w-full">
            </a>
            @include('partials.language-switcher')
        </div>
    </header> --}}
    <!-- /header -->

    <!-- nav -->
    {{-- <nav class="w-full bg-white md:pt-0 px-6 relative z-20 border-t border-b border-gray-light">
        <div
            class="container mx-auto py-2 max-w-4xl md:flex justify-between items-center text-sm md:text-md md:justify-start">
            <div
                class="w-full md:w-1/2 text-center md:text-left flex flex-wrap justify-center items-stretch md:justify-start md:items-start">
                <a href="{{ url_wlocale('/') }}"
                    class="p-2 md:px-4 md:border-r border-gray-light">{{ __('Home') }}</a>
                <a href="{{ route_wlocale('modules.index') }}"
                    class="p-2 md:px-4 md:border-r border-gray-light">{{ __('Learn') }}</a>
                <a href="{{ route_wlocale('glossary') }}"
                    class="p-2 md:px-4">{{ __('Glossary') }}</a>
            </div>
            <div class="w-full mb-2 md:mb-0 md:w-1/2 text-center md:text-right">
                @guest
                    <a class="text-sm p-3" href="{{ route_wlocale('login') }}">{{ __('Log in') }}</a>
                    @if (Route::has('register'))
                        <a class="text-sm p-3" href="{{ route_wlocale('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <a href="{{ url_wlocale('home') }}" class="text-sm pr-4">{{ Auth::user()->name }}</a>
                    <a href="{{ url_wlocale('preferences') }}" class="text-sm pr-4">{{ __('Preferences') }}</a>

                    <a href="{{ route_wlocale('logout') }}"
                        class="text-sm p-3"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route_wlocale('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </div>
        </div>
    </nav>
--}}
<!-- /nav -->

<header class="w-full bg-white border-blue-violet border-t-4 p-5">
    <div class="flex items-center w-full">
        <div class="flex-1 inline-flex items-center justify-between">
            <a class="" href="{{ url_wlocale('/') }}">
                <img class="h-5" src="/images/logo/onramp.svg" alt="Onramp">
            </a>

            <button class="focus:outline-none"
                @click="openModal('mobileMenu')">
                <svg class="fill-current text-teal-600 h-5 w-auto duration-150 transition-colors hover:text-teal-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 20">
                    <g fill-rule="evenodd">
                        <rect width="25" height="3" rx="1.5"/>
                        <rect y="8" width="25" height="3" rx="1.5"/>
                        <rect y="17" width="25" height="3" rx="1.5"/>
                    </g>
                </svg>
            </button>
        </div>

        <div class="hidden flex-1">
            {{-- <div x-show="open">The Menu</div> --}}
        </div>
    </div>

    <modal-mobile-menu :show="modals.mobileMenu">
        <template slot="navigation-links">
            <a
                class="block border-t border-gray-300 font-semibold p-6 text-blue-violet text-xl hover:no-underline"
                href="{{ route_wlocale('modules.index') }}">
                <span>Learn</span>
            </a>

            <a
                class="block border-t border-gray-300 font-semibold p-6 text-blue-violet text-xl hover:no-underline"
                href="{{ route_wlocale('glossary')}} ">
                <span>Glossary</span>
            </a>
        </template>

        <template slot="navigation-dropdown">
            @include('partials.language-switcher')
        </template>

        <template slot="navigation-buttons">
            <a class="border-2 border-teal-600 flex-1 font-semibold inline-block leading-none mx-2 px-8 py-3 text-center text-teal-600 text-lg hover:no-underline" href="">
                <span>Log in</span>
            </a>

            <a class="bg-teal-600 border-2 border-teal-600 flex-1 font-semibold inline-block leading-none mx-2 px-8 py-3 text-center text-white text-lg hover:no-underline" href="">
                <span>Register</span>
            </a>
        </template>
    </modal-mobile-menu>
</header>
