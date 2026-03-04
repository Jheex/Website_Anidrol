<?php 
// Lógica de Processamento do Formulário
$mensagem_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = strip_tags(trim($_POST["nome"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $setor = $_POST["setor"];
    $assunto_msg = strip_tags(trim($_POST["assunto"]));
    $mensagem = trim($_POST["mensagem"]);

    // Configurações de envio (Ajuste o e-mail de destino)
    $para = "sac@anidrol.com.br"; 
    $titulo = "[Contato Site] $setor: $assunto_msg";
    
    $corpo = "Nome: $nome\n";
    $corpo .= "Email: $email\n";
    $corpo .= "Setor: $setor\n";
    $corpo .= "Assunto: $assunto_msg\n\n";
    $corpo .= "Mensagem:\n$mensagem";

    $headers = "From: $nome <$email>";

    if(mail($para, $titulo, $corpo, $headers)) {
        $mensagem_status = "<div class='alert success'>Mensagem enviada com sucesso! Em breve retornaremos.</div>";
    } else {
        $mensagem_status = "<div class='alert error'>Erro ao enviar mensagem. Por favor, tente o telefone ou e-mail direto.</div>";
    }
}

include('includes/header.php'); 
?>

<section class="page-hero">
    <div class="container">
        <h1>Fale com a <span>Anidrol</span></h1>
        <p>Soluções precisas e atendimento especializado para sua indústria.</p>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="contact-grid-layout">
            
            <aside class="contact-sidebar">
                <div class="contact-info-card">
                    <span class="tagline">Canais Diretos</span>
                    <h2>Nossos Contatos</h2>
                    
                    <ul class="contact-details-list">
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <div>
                                <strong>Telefone PABX</strong>
                                <p>(11) 4043-3555</p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <div>
                                <strong>E-mail Oficial</strong>
                                <p>sac@anidrol.com.br</p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <div>
                                <strong>Endereço</strong>
                                <p>Diadema - SP | Polo Industrial</p>
                            </div>
                        </li>
                    </ul>

                    <div class="social-contact">
                        <p>Siga-nos nas redes:</p>
                        <div class="social-grid">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </aside>

            <div class="contact-form-area">
                <?php echo $mensagem_status; ?>
                
                <form action="contato.php" method="POST" class="anidrol-custom-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Nome Completo</label>
                            <input type="text" name="nome" placeholder="Digite seu nome" required>
                        </div>
                        <div class="form-group">
                            <label>E-mail Corporativo</label>
                            <input type="email" name="email" placeholder="email@empresa.com.br" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Departamento</label>
                            <select name="setor" required>
                                <option value="Comercial">Vendas / Comercial</option>
                                <option value="Tecnico">Suporte Técnico</option>
                                <option value="Financeiro">Financeiro / Faturamento</option>
                                <option value="RH">Trabalhe Conosco</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Assunto</label>
                            <input type="text" name="assunto" placeholder="Ex: Cotação de Reagentes" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Sua Mensagem</label>
                        <textarea name="mensagem" rows="6" placeholder="Como podemos ajudar sua empresa hoje?" required></textarea>
                    </div>

                    <button type="submit" class="btn-primary">Enviar Mensagem Técnica</button>
                </form>
            </div>

        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>