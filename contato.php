<?php 
// Lógica de envio (PHP)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = strip_tags(trim($_POST["nome"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $setor = $_POST["setor"];
    $mensagem = trim($_POST["mensagem"]);

    // Exemplo de destino
    $para = "sac@anidrol.com.br"; 
    $assunto = "Novo contato via site: $setor";
    
    $corpo = "Nome: $nome\nEmail: $email\nSetor: $setor\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if(mail($para, $assunto, $corpo, $headers)) {
        $status = "success";
    } else {
        $status = "error";
    }
}

// Inclui o cabeçalho
include('includes/header.php'); 
?>

<main class="contact-page">
    <section class="contact-hero">
        <div class="container">
            <h1>Fale com a Anidrol</h1>
            <p>Escolha o canal mais adequado para sua necessidade.</p>
        </div>
    </section>

    <section class="contact-content">
        <div class="container">
            <div class="contact-grid">
                
                <aside class="contact-info">
                    <div class="info-card">
                        <i class="fa-solid fa-phone"></i>
                        <h3>Telefone</h3>
                        <p>(11) 4043-3555</p>
                    </div>
                    <div class="info-card">
                        <i class="fa-solid fa-envelope"></i>
                        <h3>E-mail</h3>
                        <p>sac@anidrol.com.br</p>
                    </div>
                    <div class="info-card">
                        <i class="fa-solid fa-location-dot"></i>
                        <h3>Localização</h3>
                        <p>Diadema - SP</p>
                    </div>
                </aside>

                <div class="form-wrapper">
                    <?php if(isset($status) && $status == 'success'): ?>
                        <div class="alert success">Sua mensagem foi enviada com sucesso!</div>
                    <?php elseif(isset($status) && $status == 'error'): ?>
                        <div class="alert error">Erro ao enviar. Tente novamente.</div>
                    <?php endif; ?>

                    <form action="contato.php" method="POST" class="anidrol-form">
                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail Corporativo</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="setor">Setor de Interesse</label>
                            <select id="setor" name="setor" required>
                                <option value="">Selecione...</option>
                                <option value="Comercial">Comercial / Vendas</option>
                                <option value="Tecnico">Suporte Técnico</option>
                                <option value="Qualidade">Qualidade (Laudos)</option>
                                <option value="Financeiro">Financeiro</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea id="mensagem" name="mensagem" rows="5" required></textarea>
                        </div>

                        <button type="submit" class="btn-submit">Enviar Mensagem</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
</main>

<?php 
// Inclui o rodapé
include('includes/footer.php'); 
?>