<!DOCTYPE html>
<html lang="en">

    <head> 
        
        <script type="text/javascript">
            $(document).ready(function () {

                $('#salvar').click(function () {
                    var id = $("#id").val();
                    var quantidade = $("#quantidade").val();
                    var tipo_sangue = $("#tipo_sangue").val();
                    var fator_rh = $("#fator_rh").val();
                    var idtriagem = $("#idtriagem").val();
                    var categoria = $("#categoria").val();

                    var dataString = {id: id, quantidade: quantidade, tipo_sangue: tipo_sangue,
                        fator_rh: fator_rh, idtriagem: idtriagem, categoria: categoria};
                    $.ajax({
                        type: "POST",
                        url: "../../funcoes/estoque/ent_estoque.php",
                        data: dataString,
                        cache: false,
                        success: function (retorno) {
                            if (retorno == true) {
                                alert("Salvo com Sucesso!!");
                                location.reload();
                            } else {
                                alert("Ocorreu um erro ao salvar o registro.");
                            }
                        }
                    });
                });
            });
        </script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Doe + Vida - Página Incial</title>
        <link rel="icon" type="image/png"  href="assets/img/apple-touch-icon.png" />

        <!-- Bootstrap Core CSS -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="assets/css/creative.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <input type="image" src="assets/img/apple-touch-icon.png" width="38" height="38">
                    <a class="navbar-brand page-scroll" href="#page-top">HemoAcre</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" data-toggle="modal" data-target="#acesso" data-whatever="@mdo">Acesso Sistema</a>
                        </li>
                        <li>
                            <a class="page-scroll" data-toggle="modal" data-target="#agendamento" data-whatever="@mdo">Agendamento Doação</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">Como doar?</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services">Etapas Doação</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#portfolio">Heróis</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contato</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header>
            <div class="header-content">
                <div class="header-content-inner">
                    <h1 id="homeHeading">TEM MAIS DO QUE SANGUE EM SUAS VEIAS, TEM VIDA!</h1>
                    <hr>
                    <p>Salvar uma vida é salvar a si mesmo, é olhar além sem esperar nada em troca, é misturar o sangue em busca do bem.</p>
                    <a href="#about" class="btn btn-primary btn-xl page-scroll">Vamos Doar?</a>
                </div>
            </div>
        </header>

        <section class="bg-primary" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Requisitos básicos para doação de sangue</h2>
                        <hr class="light">
                        <p class="text-faded"> O que é necessário para doar?

                        <li>Estar em boas condições de saúde.
                        <li>Ter entre 16 e 69 anos, desde que a primeira doação tenha sido feita até 60 anos.</li>
                        <li>Pesar no mínimo 50kg.</li>
                        <li>Estar descansado (ter dormido pelo menos 6 horas nas últimas 24 horas).</li>
                        <li>Estar alimentado (evitar alimentação gordurosa nas 4 horas que antecedem a doação).</li>
                        <li>Apresentar documento original com foto recente, que permita a identificação do candidato, emitido por órgão oficial.</li>
                        </p>
                        <hr class="light">
                        <p class="text-faded"> Não pode doar quem tem ou teve as seguintes doenças:

                        <li>Hepatite após os 11 anos de idade;</li>
                        <li>Lepra (Hanseníase);</li>
                        <li>Hipertireoidismo e tireoidite de Hashimoto;</li>
                        <li>Doença auto-imune;</li>
                        <li>Doença de Chagas;</li>
                        <li>AIDS;</li>
                        <li>Problemas cardíacos (necessita avaliação e declaração do seu cardiologista);</li>
                        <li>Diabetes;</li>
                        <li>Câncer;</li>
                        </p>
                        <hr class="light">
                        <p class="text-faded"> Outras situações:
                        <li>Fez ou faz uso de algumas drogas ilícitas nos últimos 12 meses. </li>
                        <li>Mantém relações sexuais de risco.</li>
                        <li>Gestantes ou mulheres que amamentam bebês com menos de 12 meses.</li>
                        <li>Visando a prevenção de doenças causadas pelo Aedes aegypti, serão inaptos por 30 dias os candidatos à doação oriundos dos seguintes estados:</li>
                        <li> Febre de chikungunya: nenhum estado brasileiro.</li>
                        <li>Febre pelo vírus Zika: Pará, Bahia, Minas Gerais, Rio de Janeiro e Goiás.</li>
                        <li>Febre Amarela: Minas Gerais e Espírito Santo.</li>

                        <hr class="light">

                        <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Etapas da Doação</h2>
                        <hr class="primary">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-users text-primary sr-icons"></i>
                            <h3>Recepção e Cadastro</h3>
                            <p class="text-muted">Apresentação de documento expedido por órgão oficial com foto (RG, CNH, Carteira de Trabalho, etc).
                                Atualização de endereço, trabalho, etc.
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                            <h3>Pré-triagem</h3>
                            <p class="text-muted">
                                Peso, altura, verificação de pressão arterial, pulso e temperatura.
                                Uma "picadinha" no dedo para verificar seu hematócrito e/ ou hemoglobina.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-heartbeat text-primary sr-icons"></i>
                            <h3>Entrevista clínica</h3>
                            <p class="text-muted">
                                É confidencial e o sigilo é absoluto – confie em seu entrevistador e seja sincero.
                                Você assinará um Termo de Consentimento onde refere ter entendido as informações recebidas, ter respondido com sinceridade ao questionário, concorda com a coleta de sangue e afirma que está ciente de que se houver resultados sorológicos alterados, será chamado pelo serviço de apoio ao doador.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-tint text-primary sr-icons"></i>
                            <h3>Coleta de sangue</h3>
                            <p class="text-muted">
                                Será realizada a coleta de 450 ml ± 45ml e amostras de sangue para exames obrigatórios por lei.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-apple text-primary sr-icons"></i>
                            <h3>Lanche</h3>
                            <p class="text-muted">
                                É fornecido lanche acompanhado por líquidos, para repor o volume retirado na doação. Em casa ou no trabalho continue ingerindo bastante líquido.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="no-padding" id="portfolio">
            <div class="container-fluid">
                <div class="row no-gutter popup-gallery">
                    <div class="col-lg-4 col-sm-6">
                        <a href="assets/img/portfolio/fullsize/doa01.jpg" class="portfolio-box">
                            <img src="assets/img/portfolio/thumbnails/doa01.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Seja um Doador
                                    </div>
                                    <div class="project-name">
                                        Doe Vida
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="assets/img/portfolio/fullsize/doa02.jpg" class="portfolio-box">
                            <img src="assets/img/portfolio/thumbnails/doa02.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Seja um Doador
                                    </div>
                                    <div class="project-name">
                                        Doe Vida
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="assets/img/portfolio/fullsize/doa03.jpg" class="portfolio-box">
                            <img src="assets/img/portfolio/thumbnails/doa03.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Seja um Doador
                                    </div>
                                    <div class="project-name">
                                        Doe Vida
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="assets/img/portfolio/fullsize/doa04.jpg" class="portfolio-box">
                            <img src="assets/img/portfolio/thumbnails/doa04.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Seja um Doador
                                    </div>
                                    <div class="project-name">
                                        Doe Vida
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="assets/img/portfolio/fullsize/doa05.jpg" class="portfolio-box">
                            <img src="assets/img/portfolio/thumbnails/doa05.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Seja um Doador
                                    </div>
                                    <div class="project-name">
                                        Doe Vida
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="assets/img/portfolio/fullsize/doa06.jpg" class="portfolio-box">
                            <img src="assets/img/portfolio/thumbnails/doa06.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Seja um Doador
                                    </div>
                                    <div class="project-name">
                                        Doe Vida
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <aside class="bg-dark">
            <div class="container text-center">
                <div class="call-to-action">
                    <h2>Faça parte dessa equipe de Heróis!</h2>
                    <input type="image" src="assets/img/liga.png" width="380" height="70">
                    <br>
                </div>
            </div>
        </aside>

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Encontre-nos!</h2>
                        <hr class="primary">
                        <p>Nos encontre através do nosso endereço ou pela nossa página no facebook!</p>
                        <p>Av. Getúlio Vargas, 2787 - Bosque, Rio Branco - AC, 69900-607. <br> Curta nossa Pagina no Facebook, e fique por dentro de
                            mais informações.</p>
                    </div>
                    <div class="col-lg-3 col-lg-offset-2 text-center">
                        <i class="fa fa-phone fa-3x sr-contact"></i>
                        <p>Telefone <br>(68)3228-1494</p>
                    </div>
                    <div class="col-lg-2 text-center">
                        <i class="fa fa-facebook-square fa-3x sr-contact"></i>
                        <p><a href="https://www.facebook.com/Hemocentro-Hemoacre-1004879989593232/">Página <br> Facebook </a></p>

                    </div>
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o fa-3x sr-contact"></i>
                        <p>Seg à Sex<br> 07:15–18:30</p>
                    </div>
                    <div class="col-lg-12 text-center">
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1632.2906919115828!2d-67.816222!3d-9.952402!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf715966c53ef6d8a!2sHemoacre!5e1!3m2!1spt-BR!2sbr!4v1497823835325" width="800" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>                        

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============================== MODAL DE AGENDAMENTO ==========================-->
        <div class="modal fade" id="agendamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="exampleModalLabel">FAÇA SEU AGENDAMENTO</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="../../funcoes/doador/function_agendamento.php" method="post">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="alert alert-success" role="alert">
                                        <div class="panel-body">
                                            CONDIÇÕES BASICAS PARA DOAR 
                                        </div>
                                        <ul class="square">
                                            <li>Sentir-se bem, com saúde.</li>
                                            <li>Apresentar documento com foto, emitido por um orgão oficial e válido em todo território nacional.</li>
                                            <li>Ter entre 16 e 69 anos de idade e peso acima de 50kg.</li>
                                        </ul>
                                    </div>

                                    <div class="alert alert-danger" role="alert">
                                        <div class="panel-body">
                                            QUEM NÃO PODE DOAR 
                                        </div>
                                        <ul class="square">
                                            <li>Quem teve diagnóstico de hepatite após os 11 anos de idade.</li>
                                            <li>Mulheres grávidas ou que estejam amamentando.</li>
                                            <li>Pessoas que estão expostas a doenças transmissíveis pelo sangue, como aids, hepatite, sífilis e doença de chagas.</li>
                                        </ul>
                                    </div>
                                    <div class="panel panel-info">
                                        <br>
                                        <div class="form-group col-lg-6">
                                            <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                            <label for="data_registro">Data: (Segunda a Sexta)</label>
                                            <input class="form-control"   type="date" id="data_registro" name="data_agend">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                            <label for="data_registro">Horario: (7:15 as 18:30)</label>
                                            <input class="form-control"   type="time" id="data_registro" name="hora_agend">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                            <label for="nome">Nome Completo:</label>
                                            <input class="form-control"  id="nome" name="nome" >
                                        </div>
                                        <div class="form-group col-lg-8 ">
                                            <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                            <label for="data_nascimento">Data de Nascimento:</label>
                                            <input class="form-control"   type="date" id="data_nascimento" name="data_nascimento">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                            <label for="idade">Idade:</label>
                                            <input class="form-control"   type="number" id="idade" name="idade">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                            <label for="rg">RG:</label>
                                            <input class="form-control"   type="text" id="rg" name="rg">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                            <label for="cpf">CPF:</label>
                                            <input class="form-control"   type="text" id="cpf" name="cpf">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                            <label for="ddd">DDD:</label>
                                            <input class="form-control"   type="varchar" id="ddd" name="ddd">
                                        </div>
                                        <div class="form-group col-lg-8">
                                            <!--<label for="recipient-name" class="control-label">Recipient:</label>-->
                                            <label for="tel">Telefone/Celular:</label>
                                            <input class="form-control"   type="text" id="tel" name="tel">
                                        </div>
                                        <br>
                                        <div align="center">
                                            <input type="hidden" name="id" id="id" value="0" />
                                            <button type="button" id="salvar" class=" center btn btn-success">Enviar</button>
                                            <button type="reset" class="center btn btn-danger">Limpar</button> 
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--==================================MODAL ACESSO DO SISTEMA==================-->
        <div class="modal fade" id="acesso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="exampleModalLabel">ACESSO AO SISTEMA</h4>
                    </div>
                    <form action="funcoes/usuario/login.php" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Usuário" name= "usuario" id="login">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Senha"  name="senha" id="senha">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-md-8 col-sm-offset-2">
                                    <input type="hidden" name="id" id="id" value="0" />
                                    <button type="submit" value="entrar" id="entrar" name="entrar" class="btn btn-md  btn-primary btn-block">Entrar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!----=====================================================================================================-->

        <!-- jQuery -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> 
        <script src="js/jquery.easing.min.js"></script>
        <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Theme JavaScript -->
        <script src="assets/js/creative.min.js"></script>

    </body>

</html>
