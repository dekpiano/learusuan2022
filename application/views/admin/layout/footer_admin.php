         <!-- Page Footer-->

         </div>
         </div>

         </body>

         </html>

         <!-- JavaScript files-->
         <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
         <script src="<?=base_url();?>asset/vendor/popper.js/umd/popper.min.js"> </script>
         <script src="<?=base_url();?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>
         <script src="<?=base_url();?>asset/vendor/jquery.cookie/jquery.cookie.js"> </script>
         <script src="<?=base_url();?>asset/vendor/chart.js/Chart.min.js"></script>
         <script src="<?=base_url();?>asset/vendor/jquery-validation/jquery.validate.min.js"></script>
         <script src="<?=base_url();?>asset/js/charts-home.js"></script>
         <!-- Main File-->
         <script src="<?=base_url();?>asset/js/front.js"></script>
         <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>

         <!-- <script src="<?=base_url()?>asset/js/AutoProvince-students.js"></script> -->
         <script src="<?=base_url()?>asset/js/jquery.inputmask.min.js"></script>
         <script src="<?=base_url();?>asset/js/sweetalert.min.js"></script>
         <script src="<?=base_url()?>asset/js/skj.js?v=1001"></script>

         <?php  if($this->session->flashdata('msg') == 'NO' ):?>
         <script>
swal("แจ้งเตือน", "<?=$this->session->flashdata('messge');?>", "<?=$this->session->flashdata('status');?>");
         </script>
         <?php elseif($this->session->flashdata('msg') == 'Yes'):?>
         <script>
swal("แจ้งเตือน", "<?=$this->session->flashdata('messge');?>", "<?=$this->session->flashdata('status');?>");
         </script>
         <?php endif; $this->session->mark_as_temp('msg',20); ?>
         <script>

$('#TB_stu').DataTable();
//  Google Check


function StatusWait(){
    swal("แจ้งเตือน", "รอการตรวจสอบเอกสาร", "warning")
}
// รูปแบบการกรอก
$(":input").inputmask();


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}
$("#recruit_img").change(function() {
    readURL(this);
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';

    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    swal("แจ้งเตือน", "กรุณากรอกข้อมูลให้ครบ!", "warning")
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();


$(document).on('change','#province', function() {
    var province = $(this).val();    
        $.ajax({
            type: "post",
            url: "<?php echo base_url('control_students/SelectThailand'); ?>",
            data: {id:province,func:'province'},
            success: function (response) {
                $('#amphur').html(response);
                
                $('#district').html('<option value="">กรุณาเลือกตำบล</option>');
               // console.log(province);
            }
        });
});
$(document).on('change','#amphur', function() {
    var amphur = $(this).val();    
        $.ajax({
            type: "post",
            url: "<?php echo base_url('control_students/SelectThailand'); ?>",
            data: {id:amphur,func:'amphur'},
            success: function (response) {
                $('#district').html(response);
                //console.log(response);
            }
        });

        $.ajax({
            type: "post",
            url: "<?php echo base_url('control_students/SelectThailand'); ?>",
            data: {id:amphur,func:'postcode'},
            success: function (response) {
                $('#postcode').val(response);
               // console.log(response);
            }
        });
});
         </script>