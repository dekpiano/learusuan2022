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

    <div class="page-content">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>ตรวจสอบการทดสอบ / โหลดเกียรติบัตร</h3>
                    <p class="text-subtitle text-muted"><?php echo @$les; ?> เรื่อง <?php echo @$name; ?></p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?=base_url('lesson/'.$lesson.'/'.$name);?>">หน้าแรก</a></li>
                            <li class="breadcrumb-item active" aria-current="page">เกียรติบัตร</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>ชื่อ - นามสกุล</th>
                                <th>สถานะ</th>
                                <th>ดาวน์โหลด</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                            if($numRows > 0):
                            foreach ($response->values as $key => $value): ?>
                            <tr>
                                <td><?=$value[0]?></td>
                                <td>
                                    <?php 
                                    if($value[2] >= 70){
                                        echo '<span class="badge bg-success">ผ่านการทดสอบ</span>';
                                    }else{
                                        echo '<span class="badge bg-danger">ไม่ผ่านการทดสอบ</span>';
                                    }
                                    
                                     ?>
                                </td>
                                <td>
                                    <?php if(@$value[3] != "") : ?>
                                    <a href="<?=$value[3]?>" target="_blank" class="btn btn-dark btn-sm">เกียรติบัตร</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php 
                                endforeach; 
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>

    </div>


</div>