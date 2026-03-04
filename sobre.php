<?php include 'includes/header.php'; ?>

<main>
    <section class="page-hero">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <span class="tagline">Nossa História</span>
                <h1>Quimicamente <span>ligada em você.</span></h1>
            </div>
        </div>
    </section>

    <section class="about-intro">
        <div class="container">
            <div class="about-grid">
                <div class="about-text">
                    <h2>Mais de 40 anos de <span>Rigor Analítico</span></h2>
                    <p>Somos uma empresa certificada pelas normas <strong>ISO 9001</strong> e <strong>ISO 14001</strong>, especializada na fabricação e comercialização de reagentes analíticos e soluções de alta complexidade.</p>
                    <p>Nossa sede própria em área industrial é equipada com tecnologias de ponta, seguindo os mais exigentes padrões de qualidade internacional para garantir precisão absoluta em cada molécula produzida.</p>
                    
                    <div class="iso-badges">
                        <div class="iso-item"><i class="fa-solid fa-award"></i> ISO 9001:2015</div>
                        <div class="iso-item"><i class="fa-solid fa-leaf"></i> ISO 14001:2015</div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="assets/img/hero-bg.jpg" alt="Pátio Industrial Anidrol">
                </div>
            </div>
        </div>
    </section>

    <section class="culture-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="sub-title">Nossa Essência</span>
                <h2>Compromisso com a <span>Excelência</span></h2>
            </div>
            
            <div class="culture-grid">
                <div class="culture-card">
                    <div class="culture-icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h3>Missão</h3>
                    <p>Fornecer soluções químicas de alta pureza com rigor analítico, contribuindo para o avanço da ciência e da indústria nacional.</p>
                </div>

                <div class="culture-card">
                    <div class="culture-icon">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <h3>Visão</h3>
                    <p>Ser a principal referência em reagentes analíticos na América Latina, reconhecida pela inovação técnica e sustentabilidade.</p>
                </div>

                <div class="culture-card">
                    <div class="culture-icon">
                        <i class="fa-solid fa-handshake-angle"></i>
                    </div>
                    <h3>Valores</h3>
                    <ul class="values-list">
                        <li><i class="fa-solid fa-check"></i> Ética e Transparência</li>
                        <li><i class="fa-solid fa-check"></i> Rigor Científico</li>
                        <li><i class="fa-solid fa-check"></i> Responsabilidade Ambiental</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="units-section">
        <div class="container">
            <div class="unit-row">
                <div class="unit-text">
                    <span class="unit-badge">Unidade Matriz</span>
                    <h2>Diadema <span class="state">- SP</span></h2>
                    <p>Nossa sede administrativa e principal complexo fabril. Com laboratórios de última geração e controle de qualidade rigoroso, garantimos a pureza e precisão de cada reagente produzido pela Anidrol.</p>
                    <ul class="unit-list">
                        <li><i class="fas fa-microscope"></i> Controle de Qualidade Avançado</li>
                        <li><i class="fas fa-flask"></i> Produção de Reagentes</li>
                    </ul>
                </div>
                <div class="unit-image">
                    <img src="assets/img/filial/diadema.jpg" alt="Unidade Anidrol Diadema">
                </div>
            </div>

            <div class="unit-row reverse">
                <div class="unit-text">
                    <span class="unit-badge">Unidade Filial</span>
                    <h2>Pindamonhangaba <span class="state">- SP</span></h2>
                    <p>Localizada estrategicamente para otimizar nossa logística nacional. Esta unidade é focada em agilidade de distribuição e suporte regional, permitindo que a Anidrol chegue mais rápido até você.</p>
                    <ul class="unit-list">
                        <li><i class="fas fa-truck-fast"></i> Hub Logístico Estratégico</li>
                        <li><i class="fas fa-box-open"></i> Centro de Distribuição</li>
                    </ul>
                </div>
                <div class="unit-image">
                    <img src="assets/img/filial/pinda.jpg" alt="Unidade Anidrol Pinda">
                </div>
            </div>
        </div>
    </section>

    <section class="timeline-section">
        <div class="container">
            <div class="section-header">
                <span class="sub-title">Trajetória</span>
                <h2>Nossa Linha do Tempo</h2>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="time-year">1981</div>
                    <div class="time-content">
                        <h3>Fundação</h3>
                        <p>Início das atividades com foco em reagentes analíticos de alta pureza.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="time-year">2008</div>
                    <div class="time-content">
                        <h3>Certificações ISO</h3>
                        <p>Conquista das certificações ISO 9001 e 14001, consolidando o compromisso ambiental e de qualidade.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="time-year">Hoje</div>
                    <div class="time-content">
                        <h3>Expansão Industrial</h3>
                        <p>Linha completa de sais, ácidos e solventes atendendo todo o território nacional.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="sub-title">Infraestrutura</span>
                <h2>Nosso <span>Ambiente</span></h2>
            </div>
            
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    // Define o caminho da pasta (ajustado para sua estrutura)
                    $dir = "assets/img/carrossel/";
                    
                    // Busca por qualquer arquivo com extensões de imagem comuns
                    // {*.jpg,*.jpeg,*.png,*.webp,*.JPG} busca todos esses formatos
                    $images = glob($dir . "{*.jpg,*.jpeg,*.png,*.webp,*.JPG,*.PNG}", GLOB_BRACE);

                    if ($images) {
                        foreach($images as $image) {
                            // Pega o nome do arquivo para usar como legenda (opcional)
                            $caption = ucfirst(pathinfo($image, PATHINFO_FILENAME));
                            ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $image; ?>" alt="<?php echo $caption; ?>">
                                <div class="slide-caption"><?php echo str_replace('-', ' ', $caption); ?></div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<p class='text-center'>Nenhuma imagem encontrada na pasta.</p>";
                    }
                    ?>
                </div>
                
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/script.js"></script>

    
</main>

<?php include 'includes/footer.php'; ?>