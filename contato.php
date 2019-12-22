<!doctype html>
<html lang=pt>

<head>
    <?php include_once 'head.php'; ?>
    <title>FMC Construções</title>
    <!-- <link rel=canonical href=https://FMC.com.br> -->
    <meta name=title content="Reforma & Construção | FMC Construção">
    <meta name=description content="Constução, Reforma, Hidraúlica, Eletrica">
    <meta name=keywords content="construção, manutenção, reforma, hidraúlica, elétrica, Pintura, reforma de casas, manutenção predial, manutenção de empresas">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    
    <?php include_once 'header.php'; ?>
    <main class=container-fluid>
        <section class="row banner-container">
            <article class="col-12 topo-contato">
                <div class=banner-info><img alt="Logo Fardas Guará - Fardas, Dólmãs, Aventais e Uniformes Sob Medida" height=auto src=img/logo.png title="Fardas Guará - Fardas, Dólmãs, Aventais e Uniformes Sob Medida" width=67>
                    <h1 class=banner-title>Contato | Fardas Guará</h1>
                    <h3 class=banner-description>Encomende Fardas, Uniformes, Dólmãs e Aventais Sob Medida</h3>
                </div>
            </article>
        </section>
        <section class="row contato">
            <h2 class=col-12><strong>Entre em Contato e Solicite Sua Cotação</strong></h2>
            <article class="col-12 contato-det col-md-5 contato-cotacao offset-md-2">
                <h4 id=cotacao-online-form>Cotação Online</h4>
                <div class=contato-form-div>
                    <form action=https://fardasguara.com/mensagem-enviada method=post><small>Envie seus dados e retornamos em breve!</small>
                        <br>
                        <label for=nome>Nome*</label>
                        <br>
                        <input id=nome name=nome placeholder=" Insira seu nome" required>
                        <br>
                        <label for=email>email*</label>
                        <br>
                        <input id=email name=email placeholder=" Insira seu email" required type=email>
                        <br>
                        <label for=tel>Telefone</label>
                        <br>
                        <input id=tel name=tel placeholder=" Insira seu DDD + telefone" type=number>
                        <br>
                        <label for=fonte>Como nos encontrou?</label>
                        <br>
                        <input id=fonte name=fonte placeholder=" Google, Insta, Indicação...">
                        <br>
                        <label for=mensagem>Mensagem</label>
                        <br>
                        <textarea id=mensagem cols=30 name=mensagem placeholder=" Insira sua mensagem" resize=vertical rows=10></textarea>
                        <br>
                        <input type=submit value=Enviar>
                    </form>
                </div>
            </article>
            <article class="col-12 contato-det col-md-4 contato-dir">
                <h4>Entre em contato</h4>
                <div class=contatos><a href=tel:+5511982218144 rel=noreferrer target=_blank title="Ligar para Fardas Guará"><i class="fab fa-whatsapp"></i> 11 94940 5822</a>
                    <br><a href="mailto:contato@fardasguara.com.br?Subject=Contato%20via%20site" rel=noreferrer target=_blank title="Enviar email para Fardas Guará"><i class="fa-envelope fas"></i> contato@fardasguara.com.br</a>
                </div>
                <h4>Siga @fardasguara</h4>
                <div><a href=https://www.instagram.com/fardasguara/ rel=noreferrer target=_blank title="Acessar Instagram da Fardas Guará"><i class="fab fa-instagram"></i></a> <a href=https://facebook.com/pg/fardasguara/ rel=noreferrer target=_blank title="Acessar Facebook da Fardas Guará"><i class="fab fa-facebook-square"></i></a>
                </div>
            </article><span class=clearfix></span>
        </section>
        <?php include_once 'categorias.php'; ?>
    </main>
    <?php include_once 'footer.php'; ?>