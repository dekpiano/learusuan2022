<style>
.sidebar-wrapper .sidebar-header img {
    height: 14rem;
}
</style>
<div id="sidebar" class="active">
    <div class="sidebar-wrapper ">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="<?=base_url();?>">
                        <img src="<?=base_url('uploads/logo/logo.png')?>" class="img-fluid" alt="" srcset="">
                    </a>

                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <!-- <li class="sidebar-item ">
                    <a target="_blank" href="https://youtu.be/WCO0EH0JnPg" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>วีดีโอนำเสนอ</span>
                    </a>
                </li> -->
                <li class="sidebar-item ">
                    <a target="_blank" href="https://classroom.google.com/c/NDk2ODgwODYyMDcx?cjc=njdx7dv" class='sidebar-link'>
                    <img src="https://img.icons8.com/color/32/000000/google-classroom.png"/>
                        <span> สวนกุหลาบศึกษา</span>
                    </a>
                </li>
                <?php if(!empty($this->session->userdata('fullname'))):?>
                <div class="recent-message d-flex">
                    <div class="avatar avatar-lg">
                        <img src="<?=base_url();?>assets/images/faces/4.jpg">
                    </div>
                    <div class="name ms-4">
                        <h6 class="mb-1"><?=$this->session->userdata('fullname')?></h6>
                        <h6 class="text-muted mb-0">@johnducky</h6>
                    </div>
                </div>
                <li class="sidebar-item  active">
                    <a href="<?=base_url('dashboard');?>" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>สถิติการเรียน</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="<?=base_url('ControlLogin/logout');?>" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>ออกจากระบบ</span>
                    </a>
                </li>
                <?php else: ?>

                <!-- <li class="sidebar-title">Menu</li> -->
                <li class="sidebar-item <?=$this->uri->segment(2)==''?"active":""?>">
                    <a href="#" class='sidebar-link' data-bs-toggle="modal" data-bs-target="#ModelLogin">
                    <img src="https://img.icons8.com/external-xnimrodx-lineal-color-xnimrodx/32/000000/external-login-freelancer-xnimrodx-lineal-color-xnimrodx.png" />
                        <span>เข้าสู่ระบบ</span>
                    </a>
                </li>
                <?php endif; ?>



                <li class="sidebar-title">บทเรียน</li>

                <li class="sidebar-item  has-sub <?=$this->uri->segment(2)=='1'?"active":""?>">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>สาระที่ 1 กำเนิดสวนกุหลาบ</span>
                    </a>
                    <ul class="submenu <?=$this->uri->segment(2)=='1'?"active":""?>">
                        <li class="submenu-item ">
                            <a
                                href="<?=base_url('lesson/1/ความเป็นมาเหตุการณ์สำคัญที่ทำให้เกิดโรงเรียน');?>">แผนที่ 1 ความเป็นมาเหตุการณ์สำคัญที่ทำให้เกิดโรงเรียน</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="<?=base_url('lesson/1/สถาบันพระมหากษัตริย์กับโรงเรียสวนกุหลาบ (ผู้ก่อตั้ง)');?>">แผนที่ 2 สถาบันพระมหากษัตริย์กับโรงเรียสวนกุหลาบ
                                (ผู้ก่อตั้ง)</a>
                        </li>
                        <li class="submenu-item ">
                            <a
                                href="<?=base_url('lesson/1/สมเด็จกรมพระยาดำรงกับการไล่หนังสือ');?>#">แผนที่ 3 สมเด็จกรมพระยาดำรงกับการไล่หนังสือ</a>
                        </li>
                        <li class="submenu-item <?=$this->uri->segment(3)=='หลักสูตรการศึกษาครั้งแรกในประเทศไทย'?"active":""?>">
                            <a
                                href="<?=base_url('lesson/1/หลักสูตรการศึกษาครั้งแรกในประเทศไทย');?>">แผนที่ 4 หลักสูตรการศึกษาครั้งแรกในประเทศไทย</a>
                        </li>
                        <li class="submenu-item <?=$this->uri->segment(3)=='เส้นทางเดินจากวังสู่วัด'?"active":""?>">
                            <a href="<?=base_url('lesson/1/เส้นทางเดินจากวังสู่วัด');?>">แผนที่ 5 เส้นทางเดินจากวังสู่วัด</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>สาระที่ 2 ถิ่นถาวร ณ ตึกยาว</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a
                                href="<?=base_url('lesson/2/ร.5 พระราชทานตึกยาวกับบทบาทเจ้าพระยาพระเสด็จสุเรนทราธิบดี');?>">ร.5
                                พระราชทานตึกยาวกับบทบาทเจ้าพระยาพระเสด็จสุเรนทราธิบดี</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="<?=base_url('lesson/2/เอกลักษณ์ชาวสวน');?>">เอกลักษณ์ชาวสวน</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="<?=base_url('lesson/2/กิจกรรมนำเกียรติภูมิ');?>">กิจกรรมนำเกียรติภูมิ</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="<?=base_url('lesson/2/วิชาการงานสร้างเกียรติ');?>">วิชาการงานสร้างเกียรติ</a>
                        </li>
                        <li class="submenu-item ">
                            <a
                                href="<?=base_url('lesson/2/วัฒนธรรมนำชื่อเสียงเกียรติยศ');?>">วัฒนธรรมนำชื่อเสียงเกียรติยศ</a>
                        </li>
                        <li class="submenu-item ">
                            <a
                                href="<?=base_url('lesson/2/พิพิธภัณฑ์การศึกษาแห่งชาติ');?>">พิพิธภัณฑ์การศึกษาแห่งชาติ</a>
                        </li>
                        <li class="submenu-item ">
                            <a
                                href="<?=base_url('lesson/2/กำเนิดโรงเรียนในเครือสวนกุหลาบวิทยาลัย');?>">กำเนิดโรงเรียนในเครือสวนกุหลาบวิทยาลัย</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub <?=$this->uri->segment(2)=='3'?"active":""?>">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>สาระที่ 3 จากสวนกุหลาบหลวง สู่สวนกุหลาบเรา</span>
                    </a>
                    <ul class="submenu <?=$this->uri->segment(2)=='3'?"active":""?>">
                        <li class="submenu-item">
                            <a target="_blank"
                                href="https://drive.google.com/file/d/1-lsrrPxdnHLl2udYrquBa8HaPnKFtJWK/view?usp=sharing">
                                -->การจัดการเรียนรู้<--< /a>
                        </li>
                        <li class="submenu-item <?=$this->uri->segment(3)=='ความเป็นมา'?"active":""?>">
                            <a href="<?=base_url('lesson/3/ความเป็นมา');?>"> ความเป็นมา</a>
                        </li>
                        <li class="submenu-item" <?=$this->uri->segment(3)=='ผลความสำเร็จ_เกียรติยศ_เกียรติภูมิ'?"active":""?>>
                            <a href="<?=base_url('lesson/3/ผลความสำเร็จ_เกียรติยศ_เกียรติภูมิ');?>">ผลความสำเร็จ เกียรติยศ เกียรติภูมิ</a>
                        </li>
                        <li class="submenu-item" <?=$this->uri->segment(3)=='จุดเด่นของสวนฯ_เรา'?"active":""?>>
                            <a href="<?=base_url('lesson/3/จุดเด่นของสวนฯ_เรา');?>">จุดเด่นของสวนฯ เรา</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>สาระที่ 4 คนสร้างตึก ตึกสร้างคน คนสร้างชาติ</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="<?=base_url('lesson/4/เกียรติยศ เกียรติภูมิชาวสวนฯ');?>">เกียรติยศ
                                เกียรติภูมิชาวสวนฯ</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="<?=base_url('lesson/4/ศิษย์เก่าตัวอย่างทุกสาขา');?>">ศิษย์เก่าตัวอย่างทุกสาขา</a>
                        </li>
                        <li class="submenu-item ">
                            <a
                                href="<?=base_url('lesson/4/บุคคลผู้มีคุณูปการแก่สังคมและประเทศชาติ');?>">บุคคลผู้มีคุณูปการแก่สังคมและประเทศชาติ</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="<?=base_url('lesson/4/มาตรฐานคุณภาพ "กุหลาบหลวง" กับนักเรียนสวนกุหลาบ');?>">มาตรฐานคุณภาพ
                                "กุหลาบหลวง" กับนักเรียนสวนกุหลาบ</a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>สาระที่ 5 สวนฯสร้างชื่อคืออัตลักษณ์</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="<?=base_url('lesson/5/สุวิชาโน ภวํ โหติ');?>">สุวิชาโน ภวํ โหติ</a>
                        </li>
                        <li class="submenu-item ">
                            <a
                                href="<?=base_url('lesson/5/อัตลักษณ์สวนกุหลาบ(เป็นผู้นำ รักเพื่อน นับถือพี่ เคารพครู กตัญญูพ่อแม่ ดูแลน้อง สนองคุณแผ่นดิน)');?>">อัตลักษณ์สวนกุหลาบ(เป็นผู้นำ
                                รักเพื่อน นับถือพี่ เคารพครู กตัญญูพ่อแม่ ดูแลน้อง สนองคุณแผ่นดิน)</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="<?=base_url('lesson/5/สุภาพบุรุษ / สุภาพสตรี สวนกุหลาบฯ');?>">สุภาพบุรุษ /
                                สุภาพสตรี สวนกุหลาบฯ</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="<?=base_url('lesson/5/คนดีศรีสวนฯ (แบบอย่างที่ดี : Best Practice)');?>">คนดีศรีสวนฯ
                                (แบบอย่างที่ดี : Best Practice)</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  ">
                    <a href="table-datatable.html" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>คณะผู้จัดทำ</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>