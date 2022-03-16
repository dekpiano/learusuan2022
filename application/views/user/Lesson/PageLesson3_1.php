<div class="outer">
    <details>
        <!-- open-->
        <summary>โครงการสอน</summary>
        <div class="faq-content">
            <p><a href="https://drive.google.com/file/d/15TVRwr0t9bh0fNG4gUTux6zlfnJvaDGQ/view" target="_blank"
                    rel="noopener noreferrer"> <i class="bi bi-book"></i> โครงการสอน</a></p>
        </div>
    </details>

    <details>
        <summary>แผนการเรียนรู้</summary>
        <div class="faq-content">
            <p><a href="https://docs.google.com/document/d/1ZhYz4UozpMrJeFCNof-Y8GnnOzhzXm5c/edit?usp=sharing&ouid=108470401055852821871&rtpof=true&sd=true"
                    target="_blank" rel="noopener noreferrer"><i class="bi bi-book"></i> แผนการเรียนรู้</a></p>
        </div>
    </details>
    <details>
        <summary>ใบความรู้</summary>
        <div class="faq-content">
            <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
 padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
                <iframe loading="lazy"
                    style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAEzQOSdjLM&#x2F;view?embed"
                    allowfullscreen="allowfullscreen" allow="fullscreen">
                </iframe>
            </div>

            <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
 padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
                <iframe loading="lazy"
                    style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAE7HkRYQow&#x2F;view?embed"
                    allowfullscreen="allowfullscreen" allow="fullscreen">
                </iframe>
            </div>

            <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
 padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
                <iframe loading="lazy"
                    style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAE7IG6re1c&#x2F;view?embed"
                    allowfullscreen="allowfullscreen" allow="fullscreen">
                </iframe>
            </div>

        </div>
    </details>
    <details>
        <summary>ใบงาน</summary>
        <div class="faq-content">
            <p><a href="https://drive.google.com/file/d/1Gw-mzKBZlwh4a_1Lq0Q2AnhFev01sZSG/view?usp=sharing"
                    target="_blank" rel="noopener noreferrer"><i class="bi bi-book"></i> ใบงาน 1</a></p>
            <p><a href="https://drive.google.com/file/d/1PFwIzZG13R4sTpZJDM-0CWWX2YDqGQ83/view?usp=sharing"
                    target="_blank" rel="noopener noreferrer"><i class="bi bi-book"></i> ใบงาน 2</a></p>
            <p><a href="https://drive.google.com/file/d/1gBTgOil0JV1FwUHqKMu-wVJEzjetpki-/view?usp=sharing"
                    target="_blank" rel="noopener noreferrer"><i class="bi bi-book"></i> ใบงาน 3</a></p>
        </div>
    </details>
    <details>
        <summary>สื่อวีดีโอ</summary>
        <div class="faq-content">
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/asMK2oKj6nI"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </details>
    <details>
        <summary>แบบทดสอบ</summary>
        <div class="faq-content">
            <div class="card">
                <div class="card-body px-3 py-4-5">

                    <h3 class=""> การวัดและประเมินผล </h3>
                    <h6>คะแนนที่ได้ (<?=intval($this->session->flashdata('messge'));?>/5)</h6>

                    <hr>

                    <form action="<?=base_url('student/ControlStudent/CheckAns');?>" method="post">
                        <h6> 1. ข้อใดไม่เกี่ยวข้องกับโรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</h6>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined1" autocomplete="off"
                                    value="ก" name="question1">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined1">ก.
                                    โรงเรียนทหารสงเคราะห์ </label>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined2" autocomplete="off"
                                    value="ข" name="question1">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined2">ข.
                                    โรงเรียนกองทัพบกอุปถัมภ์ทหารสงเคราะห์</label>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined3" autocomplete="off"
                                    value="ค" name="question1">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined3">ค.
                                    โรงเรียนจิรประวัติ</label>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined4" autocomplete="off"
                                    value="ง" name="question1">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined4">ง.
                                    โรงเรียนทหารจิรประวัติ</label>
                            </div>
                        </div>

                        <h6> 2. ผู้อำนวยการคนแรกของโรงเรียนจิรประวัติวิทยาคม (จ.ว.) คือ</h6>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined5" autocomplete="off"
                                    value="ก" name="question2">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined5">ก.
                                    พระองค์เจ้าจิรประวัติวรเดช </label>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined6" autocomplete="off"
                                    value="ข" name="question2">
                                <label class="btn btn-outline-primary text-start w-100"
                                    for="btn-check-outlined6">ข.พลตรีเยี่ยม
                                    อินทรกำแพง</label>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined7" autocomplete="off"
                                    value="ค" name="question2">
                                <label class="btn btn-outline-primary text-start w-100"
                                    for="btn-check-outlined7">ค.นายสายยนต์
                                    เอี่ยมประสงค์</label>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined8" autocomplete="off"
                                    value="ง" name="question2">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined8">ง.
                                    ดร.กอบกิจ
                                    ส่งศิริ</label>
                            </div>
                        </div>

                        <h6> 3. สถานที่ตั้งครั้งแรกของโรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</h6>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined9" autocomplete="off"
                                    value="ก" name="question3">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined9">ก.
                                    โรงเหล้า
                                    (ตลาดศรีนคร)</label>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined10" autocomplete="off"
                                    value="ข" name="question3">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined10">ข.
                                    ใต้ถุนคลังยกบัตร มทบ.4</label>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined11" autocomplete="off"
                                    value="ค" name="question3">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined11">ค.
                                    สนามม้าเก่า</label>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined12" autocomplete="off"
                                    value="ง" name="question3">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined12">ง.
                                    กองเสบียงสัตว์ที่ 2 นครสวรรค์</label>
                            </div>
                        </div>
                        <h6> 4. ข้อใดชื่อย่อของโรงเรียน</h6>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined13" autocomplete="off"
                                    value="ก" name="question4">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined13">ก.
                                    ท.ส.</label>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined14" autocomplete="off"
                                    value="ข" name="question4">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined14">ข.
                                    จ.ป.</label>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined15" autocomplete="off"
                                    value="ค" name="question4">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined15">ค.
                                    จ.ว.</label>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined16" autocomplete="off"
                                    value="ง" name="question4">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined16">ง.
                                    ถูกทุกข้อ</label>
                            </div>
                        </div>
                        <h6> 5. วันสถาปนาโรงเรียนคือวันใด</h6>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined17" autocomplete="off"
                                    value="ก" name="question5">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined17">ก.
                                    วันที่
                                    14
                                    มกราคม</label>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined18" autocomplete="off"
                                    value="ข" name="question5">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined18">ข.
                                    วันที่
                                    31
                                    มกราคม</label>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined19" autocomplete="off"
                                    value="ค" name="question5">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined19">ค.
                                    วันที่
                                    7
                                    พฤศจิกายน</label>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <input type="radio" class="btn-check" id="btn-check-outlined20" autocomplete="off"
                                    value="ง" name="question5">
                                <label class="btn btn-outline-primary text-start w-100" for="btn-check-outlined50">ง.
                                    วันที่
                                    23
                                    พฤศจิกายน</label>
                            </div>
                        </div>

                        <?php if(!empty($this->session->userdata('fullname'))):?>
                        <button type="submit" class="btn btn-primary">ส่งคำตอบ</button>
                        <?php else: ?>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#ModelLogin"
                            class="btn btn-primary">เข้าสู่ระบบ</button>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </details>
</div>

<!-- <div class="row">
    <div class="col-12 col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body px-3 py-4-5">
                <a href="https://drive.google.com/file/d/15TVRwr0t9bh0fNG4gUTux6zlfnJvaDGQ/view?usp=sharing"
                    target="_blank" rel="noopener noreferrer">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon purple">
                                <i class="iconly-boldShow"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold my-2">โครงการสอน</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body px-3 py-4-5">
                <a href="https://docs.google.com/document/d/1ZhYz4UozpMrJeFCNof-Y8GnnOzhzXm5c/edit?usp=sharing&ouid=108470401055852821871&rtpof=true&sd=true"
                    target="_blank" rel="noopener noreferrer">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon blue">
                                <i class="iconly-boldProfile"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold my-2">แผนการเรียนรู้</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6 col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body px-3 py-4-5">
                <a href="https://drive.google.com/file/d/1S2gfms4oFSSEHs6S210x0ZSiL_tE_n0N/view?usp=sharing"
                    target="_blank" rel="noopener noreferrer">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon green">
                                <i class="iconly-boldAdd-User"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold my-2">ใบความรู้ 1 <br> ยุคที่ 1 เริ่มต้น</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body px-3 py-4-5">
                <a href="https://drive.google.com/file/d/1JDXPxSR6oKC3xcJt68I4gsHRuRObBD6J/view?usp=sharing"
                    target="_blank" rel="noopener noreferrer">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon green">
                                <i class="iconly-boldAdd-User"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold my-2">ใบความรู้ 2 <br> ยุคที่ 2 สวนกุหลาบเรา
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body px-3 py-4-5">
                <a href="https://drive.google.com/file/d/16lEm03THIBTo5_ooBulQlgEppTx7Xas-/view?usp=sharing"
                    target="_blank" rel="noopener noreferrer">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon green">
                                <i class="iconly-boldAdd-User"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold my-2">ใบความรู้ 3 <br> ยุคที่ 2 การขยายตัวพัฒนา
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body px-3 py-4-5">
                <a href="https://drive.google.com/file/d/1Gw-mzKBZlwh4a_1Lq0Q2AnhFev01sZSG/view?usp=sharing"
                    target="_blank" rel="noopener noreferrer">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon red">
                                <i class="iconly-boldBookmark"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold my-2">ใบงาน 1</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body px-3 py-4-5">
                <a href="https://drive.google.com/file/d/1PFwIzZG13R4sTpZJDM-0CWWX2YDqGQ83/view?usp=sharing"
                    target="_blank" rel="noopener noreferrer">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon red">
                                <i class="iconly-boldBookmark"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold my-2">ใบงาน 2</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body px-3 py-4-5">
                <a href="https://drive.google.com/file/d/1gBTgOil0JV1FwUHqKMu-wVJEzjetpki-/view?usp=sharing"
                    target="_blank" rel="noopener noreferrer">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon red">
                                <i class="iconly-boldBookmark"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold my-2">ใบงาน 3</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div> -->