function randomValue(length, type = "default"){

    let value = '';

    let numericChars     = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    let stringLowerChars = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    let stringUpperChars = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

    let useChars = [];

    switch(type){
        case "lower"       : useChars = numericChars.concat(stringLowerChars); break;
        case "upper"       : useChars = numericChars.concat(stringUpperChars); break;
        case "string"      : useChars = stringLowerChars.concat(stringUpperChars); break;
        case "lowerString" : useChars = stringLowerChars; break;
        case "upperString" : useChars = stringUpperChars; break;
        default: useChars = numericChars.concat(stringLowerChars).concat(stringUpperChars); break;
    }

    for(let i = 0; i < length; i++){
        let char = useChars[random(0,useChars.length - 1)];
        value   += String(char);
    }

    return value;
}




function random(min, max){
    return Math.floor(Math.random() * (max - min + 1)) + min;
}




//RESİMLERİN EN BOY ORANI BOZULMADAN RESIZE YAPILMASI
let maxSize = function($img, maxWidth, maxHeight){

    let width  = $img.width;
    let height = $img.height;

    if(width > height){
        if(width > maxWidth){
            height *= maxWidth / width;
            width   = maxWidth;
        }
    } else{
        if(height > maxHeight){
            width *= maxHeight / height;
            height = maxHeight;
        }
    }

    return { 'width' : width, 'height' : height };
};




//DOSYALARIN VERLERİNİN OKUNUP GERİ DÖNDÜRÜLMESİ
let fileReaderPromise = function(file){

    return new Promise((resolve, reject) => {
        let fileReader = new FileReader();
        fileReader.onload = resolve;
        fileReader.readAsDataURL(file);
    });

};




//DOSYALARIN YENİDEN BOYUTLANDIRILIP VERİLERİNİN GERİ DÖNDÜRÜLMESİ
let getFilesResizePromise = function(files, maxWidth, maxHeight){

    maxWidth = maxWidth || 1024;
    maxHeight = maxHeight || 1024;

    return new Promise((resolve, reject) => {

        let resizedImagesData = [];

        //HER BİR DOSYAYI DÖNDÜRELİM
        for(let i=0; i<files.length; i++){

            //HER BİR DOSYA
            let file = files[i];

            //HER BİR DOSYAYI RESIZE İÇİN DOM ELEMENTİ HALİNE GETİRELİM
            let $img = document.createElement('img');

            fileReaderPromise(file).then((readEvent) => {
                $img.src = readEvent.target.result;
            });

            $img.onload = function(){
                let imgResize = maxSize($img, maxWidth, maxHeight);
                let $canvas = document.createElement('canvas');
                $canvas.width = imgResize.width;
                $canvas.height = imgResize.height;

                let ctx = $canvas.getContext('2d');
                ctx.drawImage($img, 0, 0, imgResize.width, imgResize.height);
                let resizedImgData = $canvas.toDataURL("image/jpeg");

                resizedImagesData.push(resizedImgData);

                if(files.length === resizedImagesData.length){
                    //BÜTÜN DOSYALAR RESIZE SONRASI GÖNDERİLMEK ÜZERE KAYIT EDİLDİ
                    resolve(resizedImagesData);
                }
            };

        }

    });

};