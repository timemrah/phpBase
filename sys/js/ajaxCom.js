/*Ajax Post Fonksiyonumuz PHP tarafında ajaxCom sınıfı ile haberleşir.
ajaxCom'un direktiflerini yerine getirir ve javascrript tarafında awAlert
fonksiyonunuda kullanır.*/
function ajaxCom(method, url, data, loading, progressCallbackDOM){

    console.log('ajaxCom -> Send | '+url);

    let formData = null;


    if(data instanceof FormData){

        //Gelen data verisi FormData ile oluşturulmuş ise direk kullanalım
        formData = data;

    } else if(typeof data === 'object'){

        /*Gelen data FormData'dan türetilmediyse işlem yapmamız lazım.
        * Çünkü ajaxCom sadece FormData nesne tipini gönderebilmektedir.*/

        //Gelen data bir object ise FormData'ya çevirelim
        formData = new FormData();

        for(let key in data){
            if(data.hasOwnProperty(key) && typeof data[key] !== 'object'){
                formData.append(key, data[key]);
            }
        }
    } else{
        /*Gelen data uygunsuz bir format ise biz gene içimizde kullanabileceğimiz bir
        * FormData nesnesi türetmeliyiz ki her ajaxCom illa FormData ile bir
        * method requestMethod gönderecektir.*/
        formData = new FormData();
    }


    let longTime  = null;
    let crashTime = null;
    if(loading === undefined){ loading = true; }


    //Ekrana loading basımı
    if(loading === true){

        awAlert.load({text:'Sunucuya erişiliyor'});

        //İşlemin uzun sürdüğünü 10 sn sonra bildiriyoruz
        longTime = setTimeout(() => {
            awAlert.load('Bu işlem normalden uzun sürüyor..');
        },10000);

        //İşlemin gerçekleşmesinde bir sorun olabileceğini 20 sn sonra bildiriyoruz.
        crashTime = setTimeout(() => {
            awAlert.error(
                '<p><b>Sunucu ile iletişim hala kuramadık!</b> Sayfayı yenilemeyi deneyebilirsiniz.</p>'+
                '<p>İnternet bağlantınızı kontrol etmenizde fayda var.</p>'
            );
        },20000);

    }


    //Yükleme efekti için bir DOM objesi verilmiş ise ajax başlamadan efekti açalım
    if(typeof loading === 'object'){
        loading.style.display = 'inline-block';
    }




    return new Promise((resolve, reject) => {

        let xHttp = new XMLHttpRequest();


        //Loading Progresses
        xHttp.onprogress = e => {
            if (e.lengthComputable) {

                let percentComplete = e.loaded / e.total * 100;

                if(typeof progressCallbackDOM === "function"){
                    //If progressCallbackDOM is callback function
                    progressCallbackDOM(percentComplete);
                } else if(progressCallbackDOM !== undefined && progressCallbackDOM.nodeType === 1){
                    //If progressCallbackDOM is DOM Element
                    progressCallbackDOM.style.width = percentComplete+'%';
                }
            }
        };
        xHttp.upload.onprogress = e => {
            if (e.lengthComputable) {

                let percentComplete = e.loaded / e.total * 100;

                if(typeof progressCallbackDOM === "function"){
                    //If progressCallbackDOM is callback function
                    progressCallbackDOM(percentComplete);
                } else if(progressCallbackDOM !== undefined && progressCallbackDOM.nodeType === 1){
                    //If progressCallbackDOM is DOM Element
                    progressCallbackDOM.style.width = percentComplete+'%';
                }
            }
        };
        //Loading Progresses//


        //Ajax sonucu döndü
        xHttp.onload = e => {

            //BEKLEMEDE OLAN UYARILARI SİLELİM
            if(loading === true){
                clearTimeout(longTime);
                clearTimeout(crashTime);
            }

            //Yükleme efekti için bir DOM objesi verilmiş ise ajax sonucu efekti kapatalım
            if(typeof loading === 'object'){
                loading.style.display = 'none';
            }

            //Gelen veri json nesnesine döndürülüyor
            let responseJson = {};
            try{
                responseJson = JSON.parse(e.target.responseText);
            } catch(e){
                console.log('ajaxCom <- Receive | '+url+' | msg: Sunucudan gelen veri hatalı!');
                awAlert.error('<p><strong>Üzgünüz,</strong> Sunucudan gelen veri hatalı!</p>');
                reject(e);
                return false;
            }

            //Ajax ile gelen veride bir hata varsa
            if(responseJson === undefined || responseJson.status === undefined){
                console.log('ajaxCom <- Receive | '+url+' | msg: Sunucudan gelen veri hatalı!');
                awAlert.error('<p><strong>Üzgünüz,</strong> Sunucudan gelen veri hatalı!</p>');
                reject(e);
                return false;
            }

            //Ajax ile gelen veride problem yok, yapılması gereken işlemleri yapalım
            //Alert penceresi ile ilgili ne yapılacağına karar veriyoruz.
            if(responseJson.alert === true){
                if(responseJson.msg !== undefined){
                    if(responseJson.status !== true){
                        awAlert.error(responseJson.msg);
                    }
                    else{ awAlert.success(responseJson.msg); }
                }
            }
            else if(loading === true){ awAlert.close(); }

            //Gelen veride yönlendirme bilgisi varsa yönlendirme yapılıyor
            if(responseJson.direct !== undefined && responseJson.direct !== null){

                let direct = function(){
                    if(!responseJson.directTimeout){
                        window.location = responseJson.direct;
                    } else{
                        setTimeout(() => {
                            window.location = responseJson.direct;
                        }, (responseJson.directTimeout * 1000))
                    }
                };

                //Eğer alert varsa önce alerti açalım kapanınca yönlenme yapalım.
                if(responseJson.alert === true && responseJson.msg !== undefined){
                    awAlert.close(() => {
                        direct();
                    });
                } else{
                    direct();
                }

            }

            //Gelen veride DOM nesnelerine atanan stringi yazıyoruz
            if(responseJson.html !== undefined){
                for(let i in responseJson.html){
                    let elmSelector = i;
                    let text = responseJson.html[i];
                    document.querySelector(elmSelector).innerHTML = text;
                }
            }

            //Add and Remove Class From DOM
            if(responseJson.class !== undefined){
                for(let i in responseJson.class){
                    let selector = i;
                    let selectorClassList = responseJson.class[i];

                    for(let i in selectorClassList){
                        let className = i;
                        let process = selectorClassList[i];

                        if(process === 'add'){
                            document.querySelector(selector).classList.add(className);
                        } else{
                            document.querySelector(selector).classList.remove(className);
                        }
                    }
                }
            }

            //Set Attribute to DOM
            if(responseJson.setAttr !== undefined){
                for(let i in responseJson.setAttr){
                    let selector = i;
                    let selectorAttrList = responseJson.setAttr[i];

                    for(let i in selectorAttrList){
                        let attrName = i;
                        let attrValue = selectorAttrList[i];
                        document.querySelector(selector).setAttribute(attrName, attrValue);
                    }
                }
            }

            //Remove Attribute to DOM
            if(responseJson.removeAttr !== undefined){
                for(let i in responseJson.removeAttr){
                    let selector = i;
                    let selectorAttrList = responseJson.removeAttr[i];

                    for(let i in selectorAttrList){
                        let attrName = i;
                        document.querySelector(selector).removeAttribute(attrName);
                    }
                }
            }

            console.log('ajaxCom <- Receive | '+url+' | status: '+responseJson.status+' |msg: '+responseJson.msg);
            resolve(responseJson, e);

        };




        xHttp.onerror = e => {
            awAlert.error('<p><strong>Üzgünüz,</strong> Sunucuya bağlanırken bir hata oluştu!</p>');
            reject(e);
        };
        xHttp.onabort = e => {

        };
        xHttp.open(method, url);

        formData.append('requestMethod', 'AJAX_'+method.toUpperCase());
        xHttp.send(formData);

    });
}