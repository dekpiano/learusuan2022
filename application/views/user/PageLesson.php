<style>
.outer {
    max-width: 100%;
    margin: 0 auto;
    font-family: arial;
    line-height: 26px;
}

.faq-content {
    background-color: #f1f1f1;
    padding: 5px 20px;
    border-radius: 5px;
}

summary {
    background-color: #435ebe;
    color: #fff;
    padding: 16px;
    border-radius: 5px;
    cursor: pointer;
    position: relative;
    font-size: 20px;
    outline: none;
    margin: 5px 0px;
}

details>summary::-webkit-details-marker {
    display: none;
}

details[open] summary~* {
    animation: smooth 0.4s ease-in-out;
}

@keyframes smooth {
    0% {
        opacity: 0;
        margin-top: -10px;
    }

    100% {
        opacity: 1;
        margin-top: 0px;
    }
}

details>summary::after {
    position: absolute;
    content: "+";
    right: 25px;
}

details[open]>summary::after {
    position: absolute;
    content: "-";
    right: 25px;
}
</style>
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
            <?php $this->load->view('user/Lesson/PageLesson3_1.php'); ?>
        <?php elseif($lesson == '3' && $name == "ผลความสำเร็จ เกียรติยศ เกียรติภูมิ"): ?>
            <?php $this->load->view('user/Lesson/PageLesson3_2.php'); ?>
        <?php elseif($lesson == '3' && $name == "จุดเด่นของสวนฯ เรา") :?>
            <?php $this->load->view('user/Lesson/PageLesson3_3.php'); ?>
        <?php else: ?>
        <div class="alert alert-danger" role="alert">
            <h4>อยู่ในช่วงกำลังพัฒนา...</h4>
        </div>
        <?php endif; ?>
    </div>


</div>