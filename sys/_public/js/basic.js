window.addEventListener('load', function(){

    let logoutBtn = document.getElementById("logout-btn");
    logoutBtn.addEventListener('click', e => {
        confirmModal.open({
            title : "Çıkış Yap",
            body  : "Oturumu sonlandırmak istiyor musunuz?"
        }).success(()=>{
            window.location = "sayfa/cikis";
        });
    });


});
