(_=>{

    let loginForm = document.getElementById('login-form');
    loginForm.addEventListener('submit', e => {
        e.preventDefault();
        ajaxCom('POST', loginForm.action, new FormData(loginForm)).then(json => {
            if(json.status !== true){
                awAlert.error(json.msg);
                return false;
            }
            window.location = loginForm.dataset.successDirect;
        });
    });

})();