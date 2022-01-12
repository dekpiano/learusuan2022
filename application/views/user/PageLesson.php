<?php 
if($lesson == '1'){
    $les = "สาระที่ 1 กำเนิดสวนกุหลาบ";
} elseif($lesson == '2'){
    $les = "สาระที่ 2 ถิ่นถาวร ณ ตึกยาว";
}elseif($lesson == '3'){
    $les = "สาระที่ 3 จากสวนกุหลาบหลวง สู่สวนกุหลาบเรา";
}elseif($lesson == '4'){
    $les = "สาระที่ 4 คนสร้างตึก ตึกสร้างคน คนสร้างชาติ";
}elseif($lesson == '5'){
    $les = "สาระที่ 5 สวนฯสร้างชื่อคืออัตลักษณ์";
}

?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3><?php echo @$les; ?></h3>
        <h3>เรื่อง <?php echo @$name; ?></h3>
    </div>
    <div class="page-content">
       
        <?php if($lesson == '3' && $name == "ความเป็นมา"):?>
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/asMK2oKj6nI" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

        <h3 class="mt-5"> แบบทดสอบ  </h3>
        <h5>คะแนนที่ได้ (<?=intval($this->session->flashdata('messge'));?>/5)</h5>
        <hr>

        <form action="<?=base_url('student/ControlStudent/CheckAns');?>" method="post">
        <h5> 1. ข้อใดไม่เกี่ยวข้องกับโรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</h5>
        <div class="row">
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined1" autocomplete="off" value="ก"
                    name="question1">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined1">ก.	โรงเรียนทหารสงเคราะห์ </label>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined2" autocomplete="off" value="ข"
                    name="question1">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined2">ข.	โรงเรียนกองทัพบกอุปถัมภ์ทหารสงเคราะห์</label>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined3" autocomplete="off" value="ค"
                    name="question1">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined3">ค.	โรงเรียนจิรประวัติ</label>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined4" autocomplete="off" value="ง"
                    name="question1">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined4">ง.	โรงเรียนทหารจิรประวัติ</label>
            </div>
        </div>

        <h5> 2.	ผู้อำนวยการคนแรกของโรงเรียนจิรประวัติวิทยาคม (จ.ว.) คือ</h5>
        <div class="row">
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined5" autocomplete="off" value="ก"
                    name="question2">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined5">ก.	พระองค์เจ้าจิรประวัติวรเดช </label>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined6" autocomplete="off" value="ข"
                    name="question2">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined6">ข.พลตรีเยี่ยม อินทรกำแพง</label>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined7" autocomplete="off" value="ค"
                    name="question2">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined7">ค.นายสายยนต์ เอี่ยมประสงค์</label>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined8" autocomplete="off" value="ง"
                    name="question2">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined8">ง.	ดร.กอบกิจ ส่งศิริ</label>
            </div>
        </div>

        <h5> 3.	สถานที่ตั้งครั้งแรกของโรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</h5>
        <div class="row">
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined9" autocomplete="off" value="ก"
                    name="question3">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined9">ก.	โรงเหล้า (ตลาดศรีนคร)</label>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined10" autocomplete="off" value="ข"
                    name="question3">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined10">ข.	ใต้ถุนคลังยกบัตร มทบ.4</label>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined11" autocomplete="off" value="ค"
                    name="question3">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined11">ค.	สนามม้าเก่า</label>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined12" autocomplete="off" value="ง"
                    name="question3">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined12">ง.	กองเสบียงสัตว์ที่ 2 นครสวรรค์</label>
            </div>
        </div>
        <h5> 4.	ข้อใดชื่อย่อของโรงเรียน</h5>
        <div class="row">
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined13" autocomplete="off" value="ก"
                    name="question4">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined13">ก. ท.ส.</label>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined14" autocomplete="off" value="ข"
                    name="question4">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined14">ข.	จ.ป.</label>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined15" autocomplete="off" value="ค"
                    name="question4">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined15">ค.	จ.ว.</label>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined16" autocomplete="off" value="ง"
                    name="question4">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined16">ง.	ถูกทุกข้อ</label>
            </div>
        </div>
        <h5> 5.	วันสถาปนาโรงเรียนคือวันใด</h5>
        <div class="row">
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined17" autocomplete="off" value="ก"
                    name="question5">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined17">ก.	วันที่ 14 มกราคม</label>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined18" autocomplete="off" value="ข"
                    name="question5">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined18">ข.	วันที่ 31 มกราคม</label>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined19" autocomplete="off" value="ค"
                    name="question5">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined19">ค.	วันที่ 7 พฤศจิกายน</label>
            </div>
            <div class="col-md-6 col-12 mb-3">
                <input type="radio" class="btn-check" id="btn-check-outlined20" autocomplete="off" value="ง"
                    name="question5">
                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined50">ง.	วันที่ 23 พฤศจิกายน</label>
            </div>
        </div>

        <?php if(!empty($this->session->userdata('fullname'))):?>
        <button type="submit" class="btn btn-primary">ส่งคำตอบ</button>
        <?php else: ?>
            <button type="button" data-bs-toggle="modal" data-bs-target="#ModelLogin" class="btn btn-primary">เข้าสู่ระบบ</button>
        <?php endif; ?>
        </form>
        <?php else: ?>
            <div class="alert alert-danger" role="alert">
            <h4>อยู่ในช่วงกำลังพัฒนา...</h4>
            </div>
        <?php endif; ?>
    </div>


</div>