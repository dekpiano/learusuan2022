<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="<?=base_url();?>assets/images/logo/logo.png" alt="Logo"
                            srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">
                    ยินดีต้อนรับ <?=$this->session->userdata('fullname')?>
                </li>
                <hr>
                <li class="sidebar-item <?=$this->uri->segment(2)=="dashboard"?"active":""?>">
                    <a href="<?=base_url('admin/dashboard')?>" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-title">ข้อมูลแบบทดสอบ</li>
                <li class="sidebar-item  ">
                    <a href="table.html" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>จัดการแบบทดสอบ</span>
                    </a>
                </li>

                <li class="sidebar-title">ข้อมูลพื้นฐาน</li>

                <li class="sidebar-item <?=$this->uri->segment(2)=="SubstanceMain"?"active":""?>  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>จัดการหน่วยการเรียน</span>
                    </a>
                    <ul class="submenu <?=$this->uri->segment(2)=="SubstanceMain"?"active":""?>">
                        <li class="submenu-item <?=$this->uri->segment(2)=="SubstanceMain"?"active":""?>">
                            <a href="<?=base_url('admin/SubstanceMain')?>">สาระหน่วยการเรียนรู้</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-sweetalert.html">บทเรียนแต่ละหน่วย</a>
                        </li>                        
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="layout-default.html">Default Layout</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-vertical-1-column.html">1 Column</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-vertical-navbar.html">Vertical with Navbar</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-horizontal.html">Horizontal Menu</a>
                        </li>
                    </ul>
                </li>

              



            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>