<script src="sys/vendor/jquery-3.5.1/jquery-3.5.1.slim.min.js"></script>
<script src="sys/vendor/bootstrap-4.5.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<script src="sys/js/tools.js"></script>
<script src="sys/js/ajaxCom.js"></script>
<script src="sys/js/awAlert.js"></script>

<? if($View['call']['js']){ foreach($View['call']['js'] as $js){ ?>
    <script src="<?=$js?>"></script>
<? }} ?>