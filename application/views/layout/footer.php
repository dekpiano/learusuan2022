         <!-- Page Footer-->
         <footer class="main-footer" style="position: static;">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-sm-6">
                         <p>โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์ © 2020</p>
                     </div>
                     <div class="col-sm-6 text-right">
                         <p>Design by <a href="#" class="" data-toggle="modal" data-target="#LoginAdmin" >Dekpiano</a></p>
                         <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                     </div>
                 </div>
             </div>
         </footer>
         </div>

         </div>

         </body>

         <!-- Modal-->
         <div id="LoginAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
             class="modal fade text-left">
             <div role="document" class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h4 id="exampleModalLabel" class="modal-title">Login Admin</h4>
                         <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                                 aria-hidden="true">×</span></button>
                     </div>
                     <div class="modal-body">
                          <form method="post" action="<?=base_url('Control_login/validlogin');?>">
                          <input type="text" class="d-none" name="openyear_year" value="<?=$checkYear[0]->openyear_year;?>">
                             <div class="form-group">
                                 <label>Username</label>
                                 <input type="email" name="username" id="username" placeholder="Email Address" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label>Password</label>
                                 <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                             </div>
                             <div class="form-group">
                                 <input type="submit" value="Signin" class="btn btn-primary">
                             </div>
                         </form>
                     </div>                 
                 </div>
             </div>
         </div>

         </html>

         <!-- JavaScript files-->
         <script src="<?=base_url();?>asset/vendor/jquery/jquery.min.js"></script>
         <script src="<?=base_url();?>asset/vendor/popper.js/umd/popper.min.js"> </script>
         <script src="<?=base_url();?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>
         <script src="<?=base_url();?>asset/vendor/jquery.cookie/jquery.cookie.js"> </script>
         <script src="<?=base_url();?>asset/vendor/chart.js/Chart.min.js"></script>
         <script src="<?=base_url();?>asset/vendor/jquery-validation/jquery.validate.min.js"></script>
         <script src="<?=base_url();?>asset/js/charts-home.js"></script>
         <!-- Main File-->
         <script src="<?=base_url();?>asset/js/front.js"></script>
         <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
         </script>

         <script src="<?=base_url()?>asset/js/AutoProvince.js"></script>
         <script src="<?=base_url()?>asset/js/jquery.inputmask.min.js"></script>
         <script src="<?=base_url();?>asset/js/sweetalert.min.js"></script>

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
//  Google Check
function onHuman(response) {
    document.getElementById('captcha').value = response;
}
var onloadCallback = function() {
    grecaptcha.render('html_element', {
        'sitekey': '6LdZePgUAAAAAA5sewT1jFoUrRv7E7TGBg6fN6Zs'
    });
};
// รูปแบบการกรอก
$(":input").inputmask();

$('body').AutoProvince({
    PROVINCE: '#province', // select div สำหรับรายชื่อจังหวัด
    AMPHUR: '#amphur', // select div สำหรับรายชื่ออำเภอ
    DISTRICT: '#district', // select div สำหรับรายชื่อตำบล
    POSTCODE: '#postcode', // input field สำหรับรายชื่อรหัสไปรษณีย์
    CURRENT_PROVINCE: 1, //  แสดงค่าเริ่มต้น ใส่ไอดีจังหวัดที่เคยเลือกไว้
    CURRENT_AMPHUR: 1, // แสดงค่าเริ่มต้น  ใส่ไอดีอำเภอที่เคยเลือกไว้
    CURRENT_DISTRICT: 1, // แสดงค่าเริ่มต้น  ใส่ไอดีตำบลที่เคยเลือกไว้
    arrangeByName: false // กำหนดให้เรียงตามตัวอักษร
});

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
         </script>