<div class="sidebar" data-color="white" data-background-color="gradiant"
    data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="{{ route('home') }}" class="simple-text logo-normal">
            {{ __('NYBE') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>


            <li class="nav-item{{ $activePage == 'klanten' ? ' active' : '' }}">
                <a class="nav-link" href="/klanten">
                    <i class="material-icons">face</i>
                    <p>{{ __('Klanten') }}</p>
                </a>
            </li>


            <li class="nav-item{{ $activePage == 'orders' ? ' active' : '' }}">
                <a class="nav-link" href="/orders">
                    <i class="material-icons">content_paste</i>
                    <p>{{ __('Orderbon') }}</p>
                </a>
            </li>


            <li class="nav-item{{ $activePage == 'producten' ? ' active' : '' }}">
                <a class="nav-link" href="/producten">
                    <i class="material-icons">shopping_cart</i>
                    <p>{{ __('Producten') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
