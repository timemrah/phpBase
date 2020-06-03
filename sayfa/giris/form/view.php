<div class="container">


    <form id="login-form" action="sayfa/giris/islem/" method="post" data-success-direct="kontrol-panel/anasayfa">
        <div id="username-wrapper" class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input class="form-control" type="text" name="username" placeholder="Kullanıcı Adı" required autofocus />
        </div>
        <div id="password-wrapper" class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input class="form-control" type="password" name="password" placeholder="Şifre" required />
        </div>
        <div class="mt-2">
            <button class="btn btn-success btn-lg btn-block">Giriş</button>
        </div>
    </form>


</div>