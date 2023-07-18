<x-layouts.base>
    @guest
    @if (in_array(request()->route()->getName(),['static-sign-up', 'register']))
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 flex-0">
            @include('layouts.navbars.guest.nav')
        </div>
    </div>
    {{ $slot }}
    @elseif (in_array(request()->route()->getName(),['static-sign-in', 'login', 'forgot-password', 'reset-password']))
    <div class="container sticky top-0 z-sticky">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 flex-0">
                @include('layouts.navbars.guest.nav')
            </div>
        </div>
    </div>
    {{ $slot }}
    @endif
    @include('layouts.footers.guest.footer')
    @endguest
</x-layouts.base>