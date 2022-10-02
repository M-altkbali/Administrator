<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ url('css/nav.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>Administrator - @yield('title')</title>
</head>

<body>

    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">Administrator</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>

            {{-- <a href="">
                    <i class='bx bx-user'></i>
                    
                </a>
                <span class="tooltip">Users</span>
            --}}
            <li>
                @role('admin')
                    <x-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">

                        <i class='bx bx-user'></i><span class="links_name">Users</span>
                    </x-nav-link>
                @endrole
            </li>
            <li>
                @role('admin')
                <a href="/pharmacies">
                    <i class='bx bx-store'></i>
                    <span class="links_name">Pharmacies</span>
                </a>
                <span class="tooltip">Pharmacies</span>
                @endrole
            </li>
            <li>
                <a href="/departments">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Departments</span>
                </a>
                <span class="tooltip">Departments</span>
            </li>
            <li>
                <a href="/customers">
                    <i class='bx bx-group'></i>
                    <span class="links_name">Customers</span>
                </a>
                <span class="tooltip">Customers</span>
            </li>
            <li>
                <a href="/brands">
                    <i class='bx bxs-category-alt'></i>
                    <span class="links_name">Brands</span>
                </a>
                <span class="tooltip">Brands</span>
            </li>
            {{-- <li>
           <a href="#">
             <i class='bx bx-heart' ></i>
             <span class="links_name">Saved</span>
           </a>
           <span class="tooltip">Saved</span>
         </li> --}}
            <li>
                <a href="/setting">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>

            <li class="profile">
                <div class="profile-details">
                    <!--<img src="profile.jpg" alt="profileImg">-->
                    <div class="name_job">
                        <div class="name">PharmaHome</div>
                        <div class="job">Your medicine from your home</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <header>
            <nav>
                <ul>
                    <li><span> Administrator </span> &nbsp; <i class='bx bxs-user-circle'></i></li>
                    <li></li>
                    <li><i class='bx bx-bell'></i></li>
                </ul>
            </nav>
        </header>
        <div class="text">
            <h1> @yield('Title') </h1>
        </div>
        <section class="sec">
            <div class="container">
                @yield('page')
            </div>
        </section>
    </section>


    <script src="{{ url('js/nav.js') }}"></script>


</body>

</html>
