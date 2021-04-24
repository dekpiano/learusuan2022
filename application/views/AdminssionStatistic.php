<div class="page-content align-items-stretch">
    <!-- Side Navbar -->


    <div class="w-100">
        <!-- Page Header-->
        <!-- <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">
                    ประชาสัมพันธ์
                </h2>
            </div>
        </header> -->
        <!-- Dashboard Counts Section-->
        <div class="pricing-header px-3 py-3 pt-md-5  mx-auto text-center">
            <h3 class="display-4">สถิติการรับสมัครนักเรียน </h3>
            <p class="lead">ประจำปีการศึกษา <?=$checkYear[0]->openyear_year;?></p>
            <p class="lead">Update Time <?php echo date('d-m-Y H:i:s'); ?></p>
        </div>
        <section class="dashboard-counts ">
            <div class="container-fluid">
                <h3>ประเภท ทั่วไป</h3>
                <div class="row ">
                    <div class="col-md-4 ">
                        <div class="card">
                            <canvas id="barChart1"></canvas>
                            <p class="text-center h5">รวม <?=array_sum($sum_1);?> คน</p>
                        </div>

                    </div>
                    <div class="col-md-4 ">
                        <div class="card">
                            <canvas id="barChart4"></canvas>
                            <p class="text-center h5">รวม <?=array_sum($sum_4);?> คน</p>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card">
                            <canvas id="barChartAll"></canvas>
                            <p class="text-center h5">รวม <?=array_sum($sum_all);?> คน</p>
                        </div>
                    </div>
                </div>

                <!-- <h3>ประเภท โควตา</h3>
                <div class="row ">
                    <div class="col-md-4 ">
                        <div class="card">
                            <canvas id="barChart1_cota"></canvas>
                            <p class="text-center h5">รวม <?=array_sum($sum_1_cota);?> คน</p>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card">
                            <canvas id="barChart4_cota"></canvas>
                            <p class="text-center h5">รวม <?=array_sum($sum_4_cota);?> คน</p>
                        </div>

                    </div>
                    <div class="col-md-4 ">
                        <div class="card">
                            <canvas id="barChartAll_cota"></canvas>
                            <p class="text-center h5">รวม <?=array_sum($sum_all_cota);?> คน</p>
                        </div>

                    </div>
                </div>

                <h3>รวมทุกประเภททั้งหมด</h3>
                <div class="row ">
                    <div class="col-md-4 ">
                        <div class="card">
                            <canvas id="barChart1_all"></canvas>
                            <p class="text-center h5">รวม <?=array_sum($sum_1_all);?> คน</p>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card">
                            <canvas id="barChart4_all"></canvas>
                            <p class="text-center h5">รวม <?=array_sum($sum_4_all);?> คน</p>
                        </div>

                    </div>
                    <div class="col-md-4 ">
                        <div class="card">
                            <canvas id="barChartAll_all"></canvas>
                            <p class="text-center h5">รวม <?=array_sum($sum_all_all);?> คน</p>
                        </div>

                    </div>
                </div> -->
            </div>
        </section>


        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
            class="modal fade text-left">
            <div role="document" class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="exampleModalLabel" class="modal-title">เลือกระดับชั้น</h4>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">

                        <?php if($switch[0]->onoff_regis == "off") :?>
                        <div class="text-success">
                            <?php echo $switch[0]->onoff_comment; ?>
                        </div>
                        <?php else : ?>
                        <a href="<?=base_url('RegStudent/1');?>" class="bb btn btn-lg btn-block btn-primary">
                            <i class="fa fa-user-plus" aria-hidden="true"></i> สมัครเรียน ชั้นมัธยมศึกษาปีที่ 1
                        </a>
                        <a href="<?=base_url('RegStudent/4');?>" class="bb btn btn-lg btn-block btn-primary">
                            <i class="fa fa-user-plus" aria-hidden="true"></i> สมัครเรียน ชั้นมัธยมศึกษาปีที่ 4
                        </a>
                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>