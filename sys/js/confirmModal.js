/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * CONFIRM MODAL AÇILMASINI SAĞLAR
 * En basit kullanımı
 * confirmModal({title:'başlık', body:'pencere gövdesi'}).then(status => {
 *     if(status){
 *         Onayla butonuna basınca çalışacak kodlar...
 *     } else{
 *         İptal butonuna basınca çalışacak kodlar...
 *     }
 * });
 *
 * then yerine daha farklı bir kullanım
 *
 * confirmModal({title:'başlık', body:'pencere gövdesi'}).success(() => {
 *     Onayla butonuna basınca çalışacak kodlar...
 * }).cancel(() => {
 *     İptal butonuna basınca çalışacak kodlar...
 * });
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */




window.confirmModal = new function(){




    let O               = {};
    let DOM             = {};
    let clickCallback   = status => {};
    let successCallback = () => {};
    let cancelCallback  = () => {};




    window.addEventListener('load', function(){
        DOM.modal  = document.getElementById('confirmModal');
        DOM.title  = DOM.modal.querySelector('.modal-title');
        DOM.body   = DOM.modal.querySelector('.modal-body');
        DOM.footer = DOM.modal.querySelector('.modal-footer');

        DOM.btn   = {};
        DOM.btn.confirm = DOM.footer.querySelector('.confirm');
        DOM.btn.cancel  = DOM.footer.querySelector('.cancel');

        //EVENT ASSIGNMENT
        DOM.btn.confirm.addEventListener('click', function(){
            clickCallback(true);
            successCallback();
        });
        DOM.btn.cancel.addEventListener('click', function(){
            clickCallback(false);
            cancelCallback();
        });
    });




    O.open = function(obj = {}){

        $(DOM.modal).modal('show');

        let bodyHtml = obj.body || '';
        let title    = obj.title   || '';

        DOM.body.innerHTML  = bodyHtml;
        DOM.title.innerHTML = title;

        return O;
    };



    O.close = function(){
        $(DOM.modal).modal('hide');
    };




    O.then = function(callback){
        clickCallback = callback;
        return O;
    };




    O.success = function(callback){
        successCallback = callback;
        return O;
    };
    O.cancel = function(callback){
        cancelCallback = callback;
        return O;
    };




    return O;
};