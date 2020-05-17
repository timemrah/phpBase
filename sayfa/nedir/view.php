<div class="container">
    <h1 id="php-base-nedi-r-">PHP BASE NEDİR?</h1>
    <p>PHP tabanlı fonksiyonel hızlı site geliştirme proje ortamıdır.</p>
    <h2 id="core-dosyalar-">Core Dosyaları</h2>
    <ul>
        <li><h4 id="sys-core-start-php">sys/core/start.php</h4>
            <p>Her çalışacak sayfanın başlangıcını oluşturur ve uygulamayı ayağa kaldırır.</p>
            <p>Bu işlemler;</p>
            <ul>
                <li>Sabitler</li>
                <li>Temel değişkenler</li>
                <li>Bağımlı olunan dosyaların entegrasyonu</li>
            </ul>
            <p>gibidir.</p>
        </li>
    </ul>
    <ul>
        <li><h4 id="sys-core-end-php">sys/core/end.php</h4>
            Her isteğin sonunda sistemi sonlandıran kodları barındırır.</li>
    </ul>
    <h2 id="sabitler">Sabitler</h2>
    <ul>
        <li><h4 id="run__filename">RUN__FILENAME</h4>
            Şu anda çalışan dosya adı.</li>
        <li><h4 id="run__file_ext">RUN__FILE_EXT</h4>
            Şu anda çalışan dosya uzantısı.</li>
        <li><h4 id="run__basename">RUN__BASENAME</h4>
            Şu anda çalışan dosyanın uzantıya beraber adı.</li>
        <li><h4 id="run__foldername">RUN__FOLDERNAME</h4>
            Şu anda çalışan klasör adı.</li>
        <li><h4 id="run__host_br_dir">RUN__HOST_BR_DIR</h4>
            Şu anda çalışan klasörün proje host klasörüne göreceli klasör yoludur.</li>
        <li><h4 id="base__host_dir">BASE__HOST_DIR</h4>
            Projenin çalıştığı host klasör yoludur.</li>
        <li><h4 id="run__host_dir">RUN__HOST_DIR</h4>
            Şu anda çalışan dosyanın host klasör yoludur.</li>
        <li><h4 id="run__host_file">RUN__HOST_FILE</h4>
            Şu anda çalışan dosyanın host yoludur.</li>
        <li><h4 id="base__server_dir">BASE__SERVER_DIR</h4>
            Projenin çalıştığı sunucu klasör yoludur.</li>
        <li><h4 id="run__server_dir">RUN__SERVER_DIR</h4>
            Şu anda çalışan dosyanın sunucu klasör yoludur.</li>
        <li><h4 id="run__server_file">RUN__SERVER_FILE</h4>
            Şu anda çalışan dosyanın sunucu yoludur.</li>
        <li><h4 id="run_layout__filename">RUN_LAYOUT__FILENAME</h4>
            Şu anda çalışan layout&#39;un sunucu klasör yoludur.</li>
        <li><h4 id="run_layout__server_dir">RUN_LAYOUT__SERVER_DIR</h4>
            Şu anda çalışan layout&#39;un sunucu klasör yoludur.</li>
    </ul>
    <h2 id="s-n-flar">Sınıflar</h2>
    <ul>
        <li><h4 id="html">Html</h4>
            <p>View tarafında HTML içerisinde sık kullanılan işlevleri barındırır.</p>
            <pre><code><span class="hljs-function"><span class="hljs-title">isActive</span><span class="hljs-params">(<span class="hljs-variable">$value1</span>, <span class="hljs-variable">$value1</span>)</span></span>
<span class="hljs-comment">//İki değer doğruysa 'active' değerini döndürür.</span>

<span class="hljs-function"><span class="hljs-title">isSelect</span><span class="hljs-params">(<span class="hljs-variable">$value1</span>, <span class="hljs-variable">$value1</span>)</span></span>
<span class="hljs-comment">//İki değer doğruysa 'selected' değerini döndürür.  </span>
</code></pre></li>
    </ul>
    <h2 id="devami-eklenecekti-r-">DEVAMI EKLENECEKTİR...</h2>


</div>