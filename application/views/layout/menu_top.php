<!-- Main Navbar-->
<header class="header " >
    <nav class="navbar bg-primary">
        <!-- Search Box-->
        <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
                <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
        </div>
        <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <!-- Navbar Header-->
                <div class="navbar-header">
                    <img src="https://skj.ac.th/uploads/logo/LogoSKJ_4.png" alt="logoSKJ" class="img-fluid mx-2"
                        style="width: 48px;">
                    <!-- Navbar Brand --><a href="<?=base_url('welcome');?>"
                        class="navbar-brand d-none d-sm-inline-block">
                        <div class="brand-text d-none d-lg-inline-block"><span> ระบบรับสมัครนักเรียน </span><strong>
                                SKJ</strong></div>
                        <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>Ad SKJ</strong></div>
                        <?=$checkYear[0]->openyear_year;?>
                        
                    </a>
                    <!-- Toggle Button--><a id="toggle-btn" href="#"
                        class="menu-btn active d-none d-lg-inline-block"><span></span><span></span><span></span></a>
                </div>
                <!-- Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

                    <!-- Logout    -->
                    <li class="nav-item">
                        <a href="<?=base_url('login');?>" class="nav-link logout">
                            <span class="">
                                <i class="icon-search"></i> ตรวจสอบการสมัคร
                                <i class="fas fa-bullhorn"></i> ประกาศรายชื่อ
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>