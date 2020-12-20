
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
        <li class="nav-item {{is_active('admin')}}">
          <a class="nav-link" href="{{route('admin.home')}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        
        <li class="nav-item {{is_active('users')}}">
          <a class="nav-link" href="{{route('users.index')}}">
            <i class="material-icons">person</i>
            <p>Users</p>
          </a>
        </li>

        <li class="nav-item {{is_active('categories')}}">
          <a class="nav-link" href="{{route('categories.index')}}">
            <i class="material-icons">bubble_chart</i>
            <p>Categories</p>
          </a>
        </li>

        <li class="nav-item {{is_active('skills')}}">
          <a class="nav-link" href="{{route('skills.index')}}">
            <i class="material-icons">content_paste</i>
            <p>Skills</p>
          </a>
        </li>

        <li class="nav-item {{is_active('tags')}}">
          <a class="nav-link" href="{{route('tags.index')}}">
            <i class="material-icons">subject</i>
            <p>Tags</p>
          </a>
        </li>

        <li class="nav-item {{is_active('pages')}}">
          <a class="nav-link" href="{{route('pages.index')}}">
            <i class="material-icons">assignment</i>
            <p>Pages</p>
          </a>
        </li>

        <li class="nav-item {{is_active('videos')}}">
          <a class="nav-link" href="{{route('videos.index')}}">
            <i class="material-icons">dvr</i>
            <p>Videos</p>
          </a>
        </li>
        <li class="nav-item {{is_active('messages')}}">
          <a class="nav-link" href="{{route('messages.index')}}">
            <i class="material-icons">message</i>
            <p>Messages</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
