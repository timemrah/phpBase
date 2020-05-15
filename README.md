# PHP BASE NEDİR?
PHP tabanlı fonksiyonel hızlı site geliştirme proje ortamıdır.


## Core Dosyaları


- #### sys/core/basicStart.php
  Her çalışacak sayfanın başlangıcını oluşturur ve uygulamayı ayağa kaldırır.
  
  Bu işlemler;
  
  - Sabitler
  - Temel değişkenler
  - Bağımlı olunan dosyaların entegrasyonu
  
  gibidir.
  
  
- #### sys/core/basicEnd.php
  Her isteğin sonunda sistemi sonlandıran kodları barındırır.
  
  
## Sabitler
- #### BASIC_START__SERVER_DIR
  basicStart.php dosyasının sunucu klasör yoludur.
- #### BASIC_START__HOST_DIR
  basicStart.php dosyasının host klasör yoludur.
- #### BASIC_START__HOST_BR_DIR
  basicStart.php dosyasının host klasörüne göreceli klasör yoludur.
- #### BASE__SERVER_DIR
  Projenin çalıştığı sunucu klasör yoludur.
- #### BASE__HOST_DIR
  Projenin çalıştığı host klasör yoludur.
- #### RUN__HOST_BR_DIR
  Şu anda çalışan klasörün proje host klasörüne göreceli klasör yoludur.
- #### RUN_LAYOUT__SERVER_DIR
  Şu anda çalışan layout'un sunucu klasör yoludur.
- #### RUN__SERVER_FILE
  Şu anda çalışan dosyanın sunucu yoludur.
- #### RUN__HOST_FILE
  Şu anda çalışan dosyanın host yoludur.
  

## Sınıflar
- #### Html
  View tarafında HTML içerisinde sık kullanılan işlevleri barındırır.
  
      isActive($value1, $value1)
      //İki değer doğruysa 'active' değerini döndürür.
        
      isSelect($value1, $value1)
      //İki değer doğruysa 'selected' değerini döndürür.  