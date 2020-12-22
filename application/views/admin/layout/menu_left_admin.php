<nav class="side-navbar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><i class="fas fa-user fa-3x"></i></div>
        <div class="title">
            <h1 class="h4"><?php echo $this->session->userdata('fullname');?></h1>
            <!-- <p>Web Designer</p> -->
        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">ข้อมูลระบบ</span>

    <ul class="list-unstyled">
        <li> <a href="<?=base_url('StudentsEdit');?>"> <i class="far fa-edit"></i> หน้าแรก </a></li>
        <li> <a href="<?=base_url('StudentsStatus');?>"> <i class="fas fa-stream"></i> สถานะระบบ </a></li>
       
    </ul>
</nav>