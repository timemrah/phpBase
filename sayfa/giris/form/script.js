(_=>{

    let loginForm = document.getElementById('login-form');
    loginForm.addEventListener('submit', e => {
        e.preventDefault();

        let loginFormData = new FormData(loginForm);

        ajaxCom('POST', loginForm.action, loginFormData).then(json => {
            if(json.status !== true){
                awAlert.error(json.msg);
                return false;
            }
            window.location = loginForm.dataset.successDirect;
        });
    });

})();