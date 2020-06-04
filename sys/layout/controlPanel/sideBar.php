
<!--
  Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

  Tip 2: you can also add an image using data-image tag
-->
<div class="logo"><a href="kontrol-panel/anasayfa" class="simple-text logo-normal">
        <?=CONFIG['projectTitle']?> PANEL
    </a></div>
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item <?=Html::isActive("kontrol-panel/anasayfa", RUN__HOST_BR_DIR)?>">
            <a class="nav-link" href="kontrol-panel/anasayfa">
                <i class="material-icons">dashboard</i>
                <p>Panel</p>
            </a>
        </li>
        <li class="nav-item <?=Html::isActive("kontrol-panel/profilim", RUN__HOST_BR_DIR)?>">
            <a class="nav-link" href="kontrol-panel/profilim">
                <i class="material-icons">person</i>
                <p>Profilim</p>
            </a>
        </li>
        <!--
        <li class="nav-item">
            <a class="nav-link" href="./user.html">
                <i class="material-icons">person</i>
                <p>User Profile</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
                <i class="material-icons">content_paste</i>
                <p>Table List</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
                <i class="material-icons">library_books</i>
                <p>Typography</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
                <i class="material-icons">bubble_chart</i>
                <p>Icons</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="./map.html">
                <i class="material-icons">location_ons</i>
                <p>Maps</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
                <i class="material-icons">notifications</i>
                <p>Notifications</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
                <i class="material-icons">language</i>
                <p>RTL Support</p>
            </a>
        </li>-->
        <!--<li class="nav-item active-pro ">
            <a class="nav-link" href="./upgrade.html">
                <i class="material-icons">unarchive</i>
                <p>Upgrade to PRO</p>
            </a>
        </li>-->
    </ul>
</div>
