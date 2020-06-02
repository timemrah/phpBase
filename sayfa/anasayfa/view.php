<div class="container">
    <div class="jumbotron">
        <h1>BasePHP'ye Hoşgeldiniz</h1>
        <p class="lead">
            Bu örnek sayfa içeriği anasayfa niteliğinde oluşturulmuştur.
        </p>
    </div>
</div>


<div class="container"><?php

    $uye = new Stack([

    ]);

    $uye->set("yas.yil.", 32);
    $uye->set("yas.yil.", 33);


    prePrint( $uye->getData() );

    preDump( $uye->isGet("yas.yil.2") );

?></div>