<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-heading">Home</li>
      <li class="nav-item">
        <a class="nav-link @if(Request::is('home')) active @else collapsed @endif" href="home">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Data</li>
      <li class="nav-item">
          <a class="nav-link @if(Request::is('cv*')) active @else collapsed @endif" href="cv">
              <i class="bi bi-file-earmark-person"></i>
              <span>Curriculum Vitae</span>
          </a>
      </li><!-- End Inventaris Nav -->
      </ul>
  </aside><!-- End Sidebar-->
  