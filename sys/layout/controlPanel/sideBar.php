<div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        ENVANTER SİSTEMİ
    </a>
</div>



<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item <?=Html::isActive('kontrol-panel/anasayfa', RUN__HOST_BR_DIR)?>">
            <a class="nav-link" href="kontrol-panel/anasayfa">
                <i class="material-icons">dashboard</i>
                <p>Anasayfa</p>
            </a>
        </li>
        <li class="nav-item <?=Html::isActive('kontrol-panel/profilim', RUN__HOST_BR_DIR)?>">
            <a class="nav-link" href="kontrol-panel/profilim">
                <i class="material-icons">person</i>
                <p>Profilim</p>
            </a>
        </li>

        <li class="nav-item <?=Html::isActive('kontrol-panel/test', RUN__HOST_BR_DIR)?>">
            <a class="nav-link" href="kontrol-panel/test">
                <i class="material-icons">library_books</i>
                <p>Test</p>
            </a>
        </li>

    </ul>
</div>