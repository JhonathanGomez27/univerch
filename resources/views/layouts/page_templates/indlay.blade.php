@include('dashboard.partials.nav-header-main')
<div class="wrapper wrapper-full-page">
  <div class="page-header login-page" style="background-image: url('{{ asset('img/image.jpg') }}'); background-size: cover; background-position: top center;align-items: center;">
    @yield('content')
  </div>
</div>

