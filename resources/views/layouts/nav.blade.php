<div class="container" style="display: flex; justify-content: center; align-items: center;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="{{route('home')}}">Admin <span class="sr-only"></span></a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Quản lý danh mục
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{route('danhmuc.create')}}">Thêm danh mục</a>
        <a class="dropdown-item" href="{{route('danhmuc.index')}}">Liệt kê danh mục</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Truyện
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{route('truyen.create')}}">Thêm truyện</a>
        <a class="dropdown-item" href="{{route('truyen.index')}}">Liệt kê truyện</a>
      </div>

      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chapter</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{route('chapter.create')}}">Thêm chapter</a>
        <a class="dropdown-item" href="{{route('chapter.index')}}">Liệt kê chapter</a>
      </div>
  </ul>
  <form class="form-inline d-flex my-2 my-lg-0" style="gap: 8px;">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>
</nav>
</div>
