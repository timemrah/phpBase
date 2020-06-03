<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light rounded">
        <a class="navbar-brand" href="" title="Anasayfa">
            <img src="file/img/logo-64.png" />
            BasePHP
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link <?=Html::isActive('sayfa/anasayfa', RUN__HOST_BR_DIR)?>" href="sayfa/anasayfa">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=Html::isActive('sayfa/nedir', RUN__HOST_BR_DIR)?>" href="sayfa/nedir">Nedir?</a>
                </li>
                <? /*<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown09">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>*/ ?>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-3">
                    <form id="search-form" class="form-inline my-2 my-md-0" action="" method="get">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="btn"><i class="fas fa-search"></i></button>
                            </div>
                            <input class="form-control" type="text" placeholder="Ara" aria-label="Search">
                        </div>
                    </form>
                </li>
                <? if(!empty($_SESSION)){ ?>
                    <li class="nav-item">
                        <a class="nav-link <?=Html::isActive('kontrol-panel/anasayfa', RUN__HOST_BR_DIR)?>" href="kontrol-panel/anasayfa"><i class="fas fa-user-plus"></i> Kontrol Panel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=Html::isActive('sayfa/cikis', RUN__HOST_BR_DIR)?>" href="sayfa/cikis"><i class="fas fa-sign-in-alt"></i> Çıkış</a>
                    </li>
                <? } else{ ?>
                    <li class="nav-item">
                        <a class="nav-link <?=Html::isActive('sayfa/yeni-uye', RUN__HOST_BR_DIR)?>" href="sayfa/yeni-uye"><i class="fas fa-user-plus"></i> Yeni Üye</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=Html::isActive('sayfa/giris/form', RUN__HOST_BR_DIR)?>" href="sayfa/giris/form"><i class="fas fa-sign-in-alt"></i> Giriş</a>
                    </li>
                <? } ?>

            </ul>
        </div>
    </nav>
</div>