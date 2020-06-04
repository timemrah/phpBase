<script src="sys/vendor/material-dashboard-master/assets/js/core/jquery.min.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/core/popper.min.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/core/bootstrap-material-design.min.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/plugins/moment.min.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/plugins/sweetalert2.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/plugins/jquery.validate.min.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/plugins/bootstrap-selectpicker.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/plugins/bootstrap-tagsinput.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/plugins/jasny-bootstrap.min.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/plugins/fullcalendar.min.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/plugins/jquery-jvectormap.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/plugins/nouislider.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/plugins/arrive.min.js"></script>
<? /* <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> */ ?>
<script src="sys/vendor/material-dashboard-master/assets/js/plugins/chartist.min.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/plugins/bootstrap-notify.js"></script>
<script src="sys/vendor/material-dashboard-master/assets/js/material-dashboard.js"></script>

<? /* <script src="sys/vendor/bootstrap-4.5.0/js/bootstrap.bundle.min.js"></script> */ ?>


<script src="sys/js/tools.js"></script>
<script src="sys/js/ajaxCom.js"></script>
<script src="sys/js/awAlert.js"></script>
<script src="sys/js/confirmModal.js"></script>
<script src="sys/_public/js/basic.js"></script>

<? if($View['call']['js']){ foreach($View['call']['js'] as $js){ ?>
    <script src="<?=$js?>"></script>
<? }} ?>