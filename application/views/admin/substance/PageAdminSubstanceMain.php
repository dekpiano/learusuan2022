<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3><?=$title;?></h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">+ เพิ่ม</a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Graiden</td>
                            <td>vehicula.aliquet@semconsequat.co.uk</td>
                            <td>076 4820 8838</td>
                            <td>Offenburg</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Dale</td>
                            <td>fringilla.euismod.enim@quam.ca</td>
                            <td>0500 527693</td>
                            <td>New Quay</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

    <!--login form Modal -->
    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true" data-bs-backdrop="false">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">เพิ่ม<?=$title?> </h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form id="FormSubstance">
                    <div class="modal-body">
                        <label>หน่วยที่ : </label>
                        <div class="form-group">
                            <input type="number" placeholder="ใส่หน่วยเป็นตัวเลข เช่น 1" class="form-control" name="subs_unit" id="subs_unit">
                        </div>
                        <label>ชื่อหน่วย : </label>
                        <div class="form-group">
                            <input type="text" placeholder="ใส่ชื่อหน่วย" class="form-control" name="subs_title" id="subs_title">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">ยกเลิก</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">บันทึก</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>