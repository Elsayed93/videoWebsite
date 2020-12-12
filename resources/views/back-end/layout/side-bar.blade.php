
<div class="sidebar" data-color="green" data-background-color="black" data-image="/assets/img/sidebar-3.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        ITI Team
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.home')}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        
        <li class="nav-item {{is_active('users')}}">
          <a class="nav-link" href="{{route('users.index')}}">
            <i class="material-icons">dashboard</i>
            <p>Users</p>
          </a>
        </li>

        <li class="nav-item {{is_active('categories')}}">
          <a class="nav-link" href="{{route('categories.index')}}">
            <i class="material-icons">dashboard</i>
            <p>Categories</p>
          </a>
        </li>

        <li class="nav-item {{is_active('skills')}}">
          <a class="nav-link" href="{{route('skills.index')}}">
            <i class="material-icons">dashboard</i>
            <p>Skills</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
