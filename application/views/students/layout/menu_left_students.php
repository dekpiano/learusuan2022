<nav class="side-navbar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><i class="fas fa-user fa-3x"></i></div>
        <div class="title">
            <h1 class="h4"><?php echo $this->session->userdata('fullname');?></h1>
            <!-- <p>Web Designer</p> -->
        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">ข้อมูลนักเรียน</span>

    <ul class="list-unstyled">
        <li> <a href="<?=base_url('StudentsEdit');?>"> <i class="far fa-edit"></i> แก้ใขใบสมัคร </a></li>
        <li> <a href="<?=base_url('StudentsStatus');?>"> <i class="fas fa-stream"></i> สถานะการสมัคร </a></li>
        <li>
           <?php if($stu->recruit_status == 'ผ่านการอนุมัติ') :  ?>
            <a href="<?=base_url('Students/Print');?>" target="_blank"> <i class="fas fa-print"></i> พิมพ์ใบสมัคร </a>
            <?php else : ?>
              <a href="#" onClick="StatusWait()"> <i class="fas fa-print"></i> พิมพ์ใบสมัคร </a>
            <?php endif; ?>
        </li>
    </ul>
</nav>