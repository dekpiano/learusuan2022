<!-- Main Navbar-->
<style>
.btn-outline-light:hover {
   
    color: deeppink;
}
</style>
<header class="header ">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top p-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?=base_url('welcome');?>">
                <img src="https://skj.ac.th/uploads/logo/LogoSKJ_4.png" alt="logoSKJ" class="img-fluid mx-2"  style="width: 48px;">
                ระบบรับสมัครนักเรียน
                <?=$checkYear[0]->openyear_year;?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav mx-auto text-center">
                <li class="nav-item">
                     <a class=" btn btn-outline-light" href="<?=base_url('uploads/recruitstudent/คู่มือการเข้าใช้งานระบบรับสมัครนักเรียน64.pdf');?>" target="_blabk" >คู่มือการสมัคร</a>
                </li>
            </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus"></i> สมัครเรียน</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="<?=base_url('login');?>"><i class="icon-search"></i> ตรวจสอบการสมัคร
                        </a>
                    </li>
                    <li  class="nav-item">
                        <a style="color: white;" class="nav-link" href="<?=base_url('login');?>"> <i class="fas fa-bullhorn"></i> ประกาศรายชื่อ</a>
                    </li>
                    <li  class="nav-item">
                        <a style="color: white;" class="nav-link" href="<?=base_url('Statistic');?>"> <i class="far fa-chart-bar"></i> สถิติรับสมัคร</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>