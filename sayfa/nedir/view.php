<div class="container">
    <h1>BasePHP Nedir?</h1>
    <p class="lead mb-5">
        Küçük ölçekli projeler için veya backend taraflı hızlı yanıt süreleri gerekli projeler için kullanabileceğiniz,<br />
        PHP tabanlı pratik proje geliştirme ortamıdır.<br /><br />

        Sistem çekirdeğinin nesnel olarak kodlanmamış olması yanıt sürelerini ciddi ölçüde etkilerken proje ortamında
        geliştirme yaparken kullanacağınız hazır araçların çoğu nesnel sunulmuştur.
    </p>
    <h2>Core Dosyaları</h2>
    <ul class="mb-5">
        <li>
            <h4>sys/core/config.php</h4>
            <p>Sistemin temel ayarlarının yapıldığı yer.</p>
        </li>
        <li>
            <h4>sys/core/start.php</h4>
            <p>Her çalışacak sayfanın başlangıcını oluşturur ve uygulamayı ayağa kaldırır.</p>
            <p>Bu işlemler;</p>
            <ul class="mb-3">
                <li>Sabitler</li>
                <li>Temel değişkenler</li>
                <li>Bağımlı olunan dosyaların entegrasyonu</li>
            </ul>
            <p>gibidir.</p>
        </li>
        <li>
            <h4>sys/core/end.php</h4>
            <p>Her isteğin sonunda sistemi sonlandıran kodları barındırır.</p>
        </li>
        <li>
            <h4>sys/core/run.php</h4>
            <p>Sistemin sonlandırılmadan hemen önce görsel çıktı vermesi gerekiyorsa çıktı vermesini ve ardından sonlandırma işlemi için "sys/core/end.php" dosyasını çalıştırır.</p>
        </li>
        <li>
            <h4>sys/core/instanceModel.php</h4>
            <p>Sistemin içerisinde veritabanı işlemleri için ilgili model sınıfını sisteme dahil eder ve örnekler.</p>
        </li>
        <li>
            <h4>sys/core/tool.php</h4>
            <p>Sistem içerisinde kullanılması mecburi en temel araçları fonksiyonel olarak barındırır.</p>
        </li>

    </ul>



    <h2>Sabitler</h2>
    <ul class="mb-5">
        <li>
            <h4>BASE__HOST_DIR</h4>
            <p>Projenin çalıştığı host klasör yoludur.</p>
        </li>
        <li>
            <h4>BASE__SERVER_DIR</h4>
            <p>Projenin çalıştığı sunucu klasör yoludur.</p>
        </li>
        <li>
            <h4>BASIC_START__SERVER_DIR</h4>
            <p>start.php dosyasının sunucu klasör yoludur.</p>
        </li>
        <li>
            <h4>BASIC_START__HOST_DIR</h4>
            <p>start.php dosyasının host klasör yoludur.</p>
        </li>
        <li>
            <h4>BASIC_START__HOST_BR_DIR</h4>
            <p>start.php dosyasının host klasörüne göreceli klasör yoludur.</p>
        </li>

        <li>
            <h4>RUN__HOST_BR_DIR</h4>
            <p>Şu anda çalışan klasörün proje host klasörüne göreceli klasör yoludur.</p>
        </li>
        <li>
            <h4>RUN_LAYOUT__SERVER_DIR</h4>
            <p>Şu anda çalışan layout'un sunucu klasör yoludur.</p>
        </li>
        <li>
            <h4>RUN__SERVER_FILE</h4>
            <p>Şu anda çalışan dosyanın sunucu yoludur.</p>
        </li>
        <li>
            <h4>RUN__HOST_FILE</h4>
            <p>Şu anda çalışan dosyanın host yoludur.</p>
        </li>
    </ul>



    <h2>Araçlar</h2>
    <ul>
        <li>
            <h4>Html</h4>
            <p>View tarafında HTML içerisinde sık kullanılan işlevleri barındırır.</p>
            <code>
                isActive($value1, $value1)
                <span class="text-muted">//İki değer doğruysa 'active' değerini döndürür.</span>
                <br />
                isSelect($value1, $value1)
                <span class="text-muted">//İki değer doğruysa 'selected' değerini döndürür.</span>
            </code>
        </li>
    </ul>

</div>