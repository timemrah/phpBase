<script src="sys/vendor/jquery-3.5.1/jquery-3.5.1.min.js"></script>
<script src="sys/vendor/bootstrap-4.5.0/js/bootstrap.bundle.min.js"></script>
<script src="sys/js/tools.js"></script>
<script src="sys/js/ajaxCom.js"></script>
<script src="sys/js/awAlert.js"></script>
<script src="sys/js/confirmModal.js"></script>
<script src="sys/_public/js/basic.js"></script>

<? if($View['call']['js']){ foreach($View['call']['js'] as $js){ ?>
    <script src="<?=$js?>"></script>
<? }} ?>