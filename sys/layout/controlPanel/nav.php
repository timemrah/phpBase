<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="kontrol-panel/anasayfa/" title="Anasayfa">
        <img src="file/img/logo-64.png"/>
        BasePHP
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
            aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ml-3">
                <form id="search-form" class="form-inline my-2 my-md-0" action="" method="get">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn"><i class="fas fa-search"></i></button>
                        </div>
                        <input class="form-control" type="text" placeholder="Ara" aria-label="Search">
                    </div>
                </form>
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
            <li class="nav-item">
                <a class="nav-link" href="sayfa/anasayfa">
                    Siteye Dön
                </a>
            </li>
            <li class="nav-item">
                <span id="logout-btn" class="nav-link">
                    Çıkış <i class="fas fa-sign-in-alt"></i>
                </span>
            </li>
        </ul>
    </div>
</nav>