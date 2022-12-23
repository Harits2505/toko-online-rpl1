<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav flex-column nav nav-pills" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard*') ? 'bg-info text-dark' : '' }} text-dark" style="border-radius: 10px" href="/dashboard">
        <i class="bi bi-grid-fill"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-heading">List Pages</li>
    
    <li class="nav-item">
      <a class="nav-link {{ Request::is('product') ? 'bg-info text-dark' : '' }} text-dark" style="border-radius: 10px" href="/product">
        <i class="bi bi-box-seam-fill"></i>
        <span>Daftar Produk</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ Request::is('category*') ? 'bg-info text-dark' : '' }} text-dark" style="border-radius: 10px" href="/category">
        <i class="bi bi-tags-fill"></i>
        <span>Daftar Kategori</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ Request::is('transaction*') ? 'bg-info text-dark' : '' }} text-dark" style="border-radius: 10px" href="/transaction">
        <i class="bi bi-cash-stack"></i>
        <span>Daftar Transaksi</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ Request::is('usermember*') ? 'bg-info text-dark' : '' }} text-dark" style="border-radius: 10px" href="/usermember">
        <i class="bi bi-people-fill"></i>
        <span>Daftar Users</span>
      </a>
    </li>
    
    <li class="nav-heading">Profile Pages</li>
    
    <li class="nav-item">
      <a class="nav-link {{ Request::is('profile*') ? 'bg-info text-dark' : '' }} text-dark" style="border-radius: 10px" href="/profile">
        <i class="bi bi-person-circle"></i>
        <span>My Profile</span>
      </a>
  </li>
</ul>

</aside><!-- End Sidebar-->