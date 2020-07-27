<script src="sys/vendor/material-dashboard-master/assets/js/core/jquery.min.js"></script>
<script src="sys/vendor/bootstrap-4.5.0/js/bootstrap.bundle.min.js"></script>
<script src="sys/js/tools.js"></script>
<script src="sys/js/ajaxCom.js"></script>
<script src="sys/js/awAlert.js"></script>
<script src="sys/js/confirmModal.js"></script>
<script src="sys/_public/js/basic.js"></script>

<? if($View['call']['js']){ foreach($View['call']['js'] as $js){ ?>
    <script src="<?=$js?>"></script>
<? }} ?>