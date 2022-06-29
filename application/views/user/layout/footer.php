</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="<?=base_url();?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?=base_url();?>assets/js/bootstrap.bundle.min.js"></script>

<script src="<?=base_url();?>assets/vendors/apexcharts/apexcharts.js"></script>
<script src="<?=base_url();?>assets/js/pages/dashboard.js"></script>

<script src="<?=base_url();?>assets/js/main.js?v=1"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        // Simple Datatable
        $('#table1').DataTable({
            order: [[0, 'desc']]
        });
       
    </script>

<script>
    document.querySelector('.burger-btn1').addEventListener('click', () => {
    document.getElementById('sidebar').classList.toggle('active');
})
</script>
</body>

</html>


<!-- Modal -->
<div class="modal fade" id="ModelLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">เข้าสู่ระบบ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('ControlLogin/CheckLogin')?>" method="post">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" name="username" id="username" class="form-control form-control-xl" placeholder="Username" required>
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" name="password" id="password" class="form-control form-control-xl" placeholder="Password" required>
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                   
                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                </form>
            </div>         
        </div>
    </div>
</div>