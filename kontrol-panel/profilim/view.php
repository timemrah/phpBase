<div class="container-fluid">

    <div class="card">
        <div class="card-header card-header-success">
            <h4 class="card-title">Profil Bilgilerim</h4>
            <!--<p class="card-category">Complete your profile</p>-->
        </div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Email Adresi</label>
                            <input type="email" class="form-control" value="<?=$_SESSION['email']?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Ad</label>
                            <input type="text" class="form-control" value="<?=$_SESSION['name']?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Soyad</label>
                            <input type="text" class="form-control" value="<?=$_SESSION['surname']?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Adres</label>
                            <textarea type="text" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Şehir</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Ülke</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Posta Kodu</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Hakkımda</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success pull-right">Güncelle</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>


</div>