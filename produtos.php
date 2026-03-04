<?php 
require_once 'config.php'; // Usa require_once para garantir a conexão antes de carregar a página
include 'includes/header.php'; 

// Captura o termo de busca via método GET
$busca = isset($_GET['query']) ? trim($_GET['query']) : '';

try {
    if (!empty($busca)) {
        // Busca flexível: procura no nome, no número CAS ou na categoria
        $sql = "SELECT * FROM produtos WHERE nome LIKE :q OR cas_number LIKE :q OR categoria LIKE :q ORDER BY nome ASC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['q' => "%$busca%"]);
    } else {
        // Se não houver busca, mostra todos os produtos em ordem alfabética
        $stmt = $pdo->query("SELECT * FROM produtos ORDER BY nome ASC");
    }
    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $erro_sql = "Erro ao recuperar produtos: " . $e->getMessage();
}
?>

<main>
    <section class="page-hero">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <span class="tagline">Anidrol Produtos</span>
                <h1>Catálogo <span>Técnico</span></h1>
            </div>
        </div>
    </section>

    <section class="product-search">
        <div class="container">
            <div class="search-wrapper">
                <form action="produtos.php" method="GET" class="search-box">
                    <input type="text" name="query" value="<?php echo htmlspecialchars($busca); ?>" placeholder="Digite o nome, CAS ou categoria...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i> Pesquisar</button>
                </form>
            </div>
        </div>
    </section>

    <section class="products-list-section" style="padding: 60px 0;">
        <div class="container">
            <?php if (isset($erro_sql)): ?>
                <div style="color: red; padding: 20px; border: 1px solid red; border-radius: 8px;">
                    <?php echo $erro_sql; ?>
                </div>
            <?php else: ?>
                <div class="table-responsive">
                    <table class="product-table">
                        <thead>
                            <tr>
                                <th>Descrição do Produto</th>
                                <th>Nº CAS</th>
                                <th>Fórmula Química</th>
                                <th>Linha/Categoria</th>
                                <th class="text-center">Docs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($produtos) > 0): ?>
                                <?php foreach ($produtos as $item): ?>
                                <tr>
                                    <td class="product-name"><strong><?php echo htmlspecialchars($item['nome']); ?></strong></td>
                                    <td><span class="badge-cas"><?php echo htmlspecialchars($item['cas_number']); ?></span></td>
                                    <td><?php echo htmlspecialchars($item['formula']); ?></td>
                                    <td><?php echo htmlspecialchars($item['categoria']); ?></td>
                                    <td class="text-center">
                                        <a href="#" class="btn-table" title="FISPQ"><i class="fa-solid fa-file-pdf"></i></a>
                                        <a href="#" class="btn-table" title="Laudo de Análise"><i class="fa-solid fa-certificate"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" style="text-align: center; padding: 40px; color: #777;">
                                        Nenhum produto encontrado para "<strong><?php echo htmlspecialchars($busca); ?></strong>".
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>