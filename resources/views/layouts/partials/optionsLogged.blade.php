<div class="w-100 mt-3 text-center">
    <a class="shop-menu-btn w-75 monserrat py-3 my-3 cero7em" href="#">
        Mi cuenta
    </a>

    <a class="shop-menu-btn w-75 monserrat py-3 my-3 cero7em" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>