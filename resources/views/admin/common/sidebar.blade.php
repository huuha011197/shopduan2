      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="{{route('getadmin')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item " id="user">
            <a class="nav-link" href="{{route('user.index')}}" >
              <i class="material-icons">person</i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item " id="category">
            <a class="nav-link" href="{{route('category.index')}}">
              <i class="material-icons">content_paste</i>
              <p>categories</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('product.index')}}">
              <i class="material-icons">library_books</i>
              <p>Products</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('comment.index')}}">
              <i class="material-icons">library_books</i>
              <p>Comments</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('order')}}">
              <i class="material-icons">bubble_chart</i>
              <p>Orders</p>
            </a>
          </li>
      </div>
