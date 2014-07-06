<a href="{{url('logout')}}">Logout as </a>
<ul class="nav nav-tabs nav-justified" role="tablist">
  {{ HTML::nav_menu("index", 'Home' ) }}
  {{ HTML::nav_menu("references", 'Referensi' ) }}
  {{ HTML::nav_menu("tarombo", 'Tarombo' ) }}
  {{ HTML::nav_menu("aboutus", 'About Us' ) }}
</ul>