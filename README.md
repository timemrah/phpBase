# PHP BASE NEDİR?
PHP tabanlı, hızlı, fonksiyonel ve ilkel site geliştirme proje ortamıdır.


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
- #### BASE__HOST_DIR
  Projenin çalıştığı host klasör yolu.
- #### BASE__SERVER_DIR
  Projenin çalıştığı sunucu klasör yolu.
- #### RUN__FILENAME
  Şu anda çalışan dosya adı.
- #### RUN__FILE_EXT
  Şu anda çalışan dosya uzantısı.
- #### RUN__BASENAME
  Şu anda çalışan dosyanın uzantıyla beraber adı.
- #### RUN__FOLDERNAME
  Şu anda çalışan klasör adı.
- #### RUN__HOST_DIR
  Şu anda çalışan dosyanın host klasör yolu.
- #### RUN__HOST_BR_DIR
  Şu anda çalışan klasörün proje host klasörüne göreceli klasör yolu.
- #### RUN__HOST_FILE
  Şu anda çalışan dosyanın host yolu.
- #### RUN__SERVER_DIR
  Şu anda çalışan dosyanın sunucu klasör yolu.
- #### RUN__SERVER_FILE
  Şu anda çalışan dosyanın sunucu yolu.
- #### RUN_LAYOUT__FILENAME
  Şu anda çalışan layout'un sunucu dosya yolu.
- #### RUN_LAYOUT__SERVER_DIR
  Şu anda çalışan layout'un sunucu klasör yolu.

  

## Çekirdek Sınıflar
- #### Run
  Sistemin gelen isteğe cevap verme biçimini belirler.
  
      byLayout($layout, $mainView = null)
      //Bir tema ile html cevabı verilir.
        
      withoutLayout($mainView = null)
      //Tema olmaksızın html cevabı verilir.
      
      noView()
      //Görsel bir cevap verilmez. Genelde data cevabı veren servisler için kullanılır.
  
  **Run** sınıfı her isteğe verilen cevap için zaruridir. Çünkü verilen cevabın sonlandırılmasını sağlayan 
  **sys/core/end.php** dosyasını çağırır.
      
- #### Html
  View tarafında HTML içerisinde sık kullanılan işlevleri barındırır.
  
      isActive($value1, $value1)
      //İki değer doğruysa 'active' değerini döndürür.
        
      isSelect($value1, $value1)
      //İki değer doğruysa 'selected' değerini döndürür.  
      
      
## DEVAMI EKLENECEKTİR...