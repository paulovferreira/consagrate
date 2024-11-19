<?php
// Exemplo de categorias e arquivos PDF (substitua com os arquivos reais)
$categorias = [
    "E-book Completo" => [
        ["nome" => "E-book - Material de Apoio das Aulas", "arquivo" => "../docs/ebook-material-de-apoio.pdf"]
     /*   ["nome" => "E-book - Material de Apoio das Aulas", "arquivo" => "uploads/formacao_espiritual/guia_meditacao.pdf"]*/
    ],
    "Fórmula de Consagracao" => [
        ["nome" => "Fórmula de Consagração", "arquivo" => "../docs/formula.pdf"]       
    ]
];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eu me Consagro - Biblioteca de Downloads</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="../css/downloads.css">
    <link rel="shortcut icon" type="imagex/png" href="./img/logo.ico">
</head>

<body>
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-centered has-text-primary">Material de Apoio</h1>
                <p class="subtitle has-text-centered">Baixe os materiais para te ajudar nessa caminhada.</p>

                <?php foreach ($categorias as $categoria => $arquivos): ?>
                    <div class="category-box">
                        <h2 class="category-title"><?php echo $categoria; ?></h2>
                        <div class="columns is-multiline">
                            <?php foreach ($arquivos as $arquivo): ?>
                                <div class="column is-4">
                                    <div class="pdf-box">
                                        <span class="icon">
                                            <i class="fas fa-file-pdf"></i>
                                        </span>
                                        <h3 class="pdf-title"><?php echo $arquivo['nome']; ?></h3>
                                        <a href="<?php echo $arquivo['arquivo']; ?>" target="_blank" class="button download-button">Visualizar PDF</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Ícones Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
