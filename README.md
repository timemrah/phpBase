# PHP BASE NEDİR?
PHP tabanlı fonksiyonel hızlı site geliştirme proje ortamıdır.


## Core Dosyaları


- #### sys/core/start.php
  Her çalışacak sayfanın başlangıcını oluşturur ve uygulamayı ayağa kaldırır.
  
  Bu işlemler;
  
  - Sabitler
  - Temel değişkenler
  - Bağımlı olunan dosyaların entegrasyonu
  
  gibidir.
  
  
- #### sys/core/end.php
  Her isteğin sonunda sistemi sonlandıran kodları barındırır.
  
  
## Sabitler
- #### RUN__FILENAME
  Şu anda çalışan dosya adı.
- #### RUN__FILE_EXT
  Şu anda çalışan dosya uzantısı.
- #### RUN__BASENAME
  Şu anda çalışan dosyanın uzantıya beraber adı.
- #### RUN__FOLDERNAME
  Şu anda çalışan klasör adı.
- #### RUN__HOST_BR_DIR
  Şu anda çalışan klasörün proje host klasörüne göreceli klasör yoludur.
- #### BASE__HOST_DIR
  Projenin çalıştığı host klasör yoludur.
- #### RUN__HOST_DIR
  Şu anda çalışan dosyanın host klasör yoludur.
- #### RUN__HOST_FILE
  Şu anda çalışan dosyanın host yoludur.
- #### BASE__SERVER_DIR
  Projenin çalıştığı sunucu klasör yoludur.
- #### RUN__SERVER_DIR
  Şu anda çalışan dosyanın sunucu klasör yoludur.
- #### RUN__SERVER_FILE
  Şu anda çalışan dosyanın sunucu yoludur.
- #### RUN_LAYOUT__FILENAME
  Şu anda çalışan layout'un sunucu klasör yoludur.
- #### RUN_LAYOUT__SERVER_DIR
  Şu anda çalışan layout'un sunucu klasör yoludur.

  

## Sınıflar
- #### Html
  View tarafında HTML içerisinde sık kullanılan işlevleri barındırır.
  
      isActive($value1, $value1)
      //İki değer doğruysa 'active' değerini döndürür.
        
      isSelect($value1, $value1)
      //İki değer doğruysa 'selected' değerini döndürür.  
      
      
##DEVAMI EKLENECEKTİR...