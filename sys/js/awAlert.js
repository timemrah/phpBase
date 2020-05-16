var awAlert = new function(){

    var service = new function(){ S = {};

        S.delayTimeout     = null;
        S.autoCloseTimeout = null;

        return S;
    };


    var html = new function () { var H = {};

        H.fr       = $('#page-notice-area');
        H.btnClose = H.fr.find('.btn-close');
        H.iconFr   = H.fr.find('.icon-fr');
        H.body     = H.fr.find('.body');
        H.btnArea  = H.fr.find('.btn-fr');
        H.btnDone  = H.btnArea.find('.done');

        H.icons         = {};
        H.icons.load    = H.iconFr.find('.load');
        H.icons.info    = H.iconFr.find('.info');
        H.icons.success = H.iconFr.find('.success');
        H.icons.warning = H.iconFr.find('.warning');
        H.icons.error   = H.iconFr.find('.error');

        return H;
    };


    var event = new function(){ var E = {};

        /* EVENT ASIGNMENT */
        html.btnClose.on('click', function(){ controller.close(); });
        html.btnDone .on('click', function(){ controller.close(); });

        return E;
    };


    var view = new function(){ var V = {};

        V.show = function(callback){
            html.fr.stop();
            html.fr.fadeIn(300,callback);
        };

        V.hide = function(callback){
            html.fr.stop();
            html.fr.fadeOut(100,callback);
        };

        V.clear = function(){
            V.hideAllIcon();
            V.bodyClear();
            V.hideBody();
            V.hideDoneBtn();
        };

        V.bodyClear = function(){
            html.body.html('');
        };

        V.hideDoneBtn = function(){
            html.btnArea.css({display:'none'});
        };

        V.showDoneBtn = function(){
            html.btnArea.css({display:'block'});
        };

        V.hideBody = function(){
            html.body.css({display:'none'});
        };

        V.showBody = function(){
            html.body.css({display:'block'});
        };

        V.hideAllIcon = function(){
            html.iconFr.find('.icon').css({display:'none'});
        };

        V.showIcon = function(selector){
            V.hideAllIcon();
            html.fr.find(".icon-fr "+selector).css({display:'block'});
        };

        return V;
    };


    /* CONTROLLER *|**/
    var controller = {};


    controller.html = function (obj) {
        if(obj === undefined){
            return html.body.html();
        }
        html.body.html(obj);
        return controller;
    };


    controller.open = function (obj) {

        clearTimeout(service.autoCloseTimeout);
        clearTimeout(service.delayTimeout);

        var callback  = (obj !== undefined && obj.callback !== undefined) ? obj.callback : function(){};
        var icon      = (obj !== undefined && obj.icon !== undefined) ? obj.icon : false;
        var text      = (obj !== undefined && obj.text !== undefined) ? obj.text : false;
        var clear     = (obj !== undefined && obj.clear !== undefined) ? obj.clear : true;
        var done      = (obj !== undefined && obj.done !== undefined) ? obj.clear : false;
        var delay     = (obj !== undefined && obj.delay !== undefined) ? obj.delay : false;
        var autoClose = (obj !== undefined && obj.autoClose !== undefined) ? obj.autoClose : false;

        if(obj !== undefined && typeof obj === 'string'){ text = obj; }

        if(icon !== false)     { view.showIcon(icon); }
        else if(clear === true){ view.hideAllIcon(); }

        if(text !== false && text !== '' ){
            controller.html(text);
            view.showBody();
        } else if(clear === true){
            controller.html('');
            view.hideBody();
        }

        if(done !== false){ view.showDoneBtn(); }
        else if(clear === true){ view.hideDoneBtn(); }

        if(delay !== false){
            service.delayTimeout = setTimeout(function () {
                view.show(callback);
            },delay);
        } else{ view.show(callback); }

        if(autoClose !== false){
            service.autoCloseTimeout = setTimeout(function () {
                controller.close();
            },autoClose);
        }

        return controller;
    };


    controller.touch = function(obj){

        var icon     = (obj !== undefined && obj.icon !== undefined) ? obj.icon : null;
        var text     = (obj !== undefined && obj.text !== undefined) ? obj.text : null;

        if(obj !== undefined && typeof obj === 'string'){ text = obj; }

        if(icon === false)    { view.hideAllIcon(); }
        else if(icon !== null){ view.showIcon(icon); }

        if(text === false || text === ''){
            controller.html('');
            view.hideBody();
        } else if(text !== null){
            controller.html(text);
            view.showBody();
        }

        return controller;
    };


    controller.btnDoneText = function(text){
        html.btnDone.html(text);
        return controller;
    };


    controller.close = function (obj) {

        /*  obj değeri fonksiyon ise callback fonksiyonu olarak düşünülür ve
            kapama işlevi görmez. pencere kapandığında tetiklenecek fonksiyon
            olarak değerlendirilir.
         */
        if(obj !== undefined && typeof obj === 'function'){
            service.alertCloseCallbackFunction = obj;
            return;
        }

        clearTimeout(service.delayTimeout);
        var clear = (obj !== undefined && obj.clear !== undefined) ? obj.clear : true;
        view.hide(function(){
            if(clear === true){ view.clear(); }
            if(service.alertCloseCallbackFunction !== undefined){
                service.alertCloseCallbackFunction();
                delete(service.alertCloseCallbackFunction);
            }
        });
        console.log('awAlert -> close');
        return controller;
    };


    controller.load = function(obj){
        if(typeof obj === 'string'){
            var text = obj;
            obj = {};
            obj.text = text;
        }
        if(obj === undefined){ var obj = {}; }
        obj.icon = '.load';

        console.log('awAlert -> load | ' + obj.text);

        controller.open(obj);
        return controller;
    };
    controller.info = function(obj){
        if(typeof obj === 'string'){
            var text = obj;
            obj = {};
            obj.text = text;
        }
        if(obj === undefined){ var obj = {}; }
        obj.icon = '.info';
        obj.done = true;

        console.log('awAlert -> info | ' + obj.text);

        controller.open(obj);
        return controller;
    };
    controller.success = function(obj){
        if(typeof obj === 'string'){
            var text = obj;
            obj = {};
            obj.text = text;
        }
        if(obj === undefined){ var obj = {}; }
        obj.icon = '.success';
        obj.done = true;

        console.log('awAlert -> success | ' + obj.text);

        controller.open(obj);
        return controller;
    };
    controller.warning = function(obj){
        if(typeof obj === 'string'){
            var text = obj;
            obj = {};
            obj.text = text;
        }
        if(obj === undefined){ var obj = {}; }
        obj.icon = '.warning';
        obj.done = true;

        console.log('awAlert -> warning | ' + obj.text);

        controller.open(obj);
        return controller;
    };
    controller.error = function(obj){
        if(typeof obj === 'string'){
            var text = obj;
            obj = {};
            obj.text = text;
        }
        if(obj === undefined){ var obj = {}; }
        obj.icon = '.error';
        obj.done = true;

        console.log('awAlert -> error | ' + obj.text);

        controller.open(obj);
        return controller;
    };

    /* CONTROLLER *O**/


    return controller;
};