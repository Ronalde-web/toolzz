<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toolzz.com</title>
    <link rel="stylesheet" href="<?php echo e(url('assets/all/css/login.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
</head>
<body class="overflow-hidden">

    <div class="container-fluid">
        <div class="row">
            <div class="col-7 p-0 position-relative" style="height: 100vh;">

                <div id="carouselExampleCaptions" class="carousel slide h-100 d-flex justify-content-start">
                    
               
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    
                    <div id="lua">
                    <a id='toggle-theme' href=""><i class="bi bi-cloud-moon"></i></a>
                </div>
                    <div class="carousel-inner" id="carousel-text">
                        <div class="carousel-item h-100 active">
                            <img src="<?php echo e(url('assets/all/imgs/088e5938770b5dba8d9f164aeb9bc062.jpeg')); ?>" class="d-block h-100 image-fume-effect" alt="...">
                            <div class="carousel-caption d-none d-md-block text-start">
                                <div class="badge rounded-pill text-bg-primary px-3 py-2 mb-3">Cursos</div>
                                <h5>Plataforma de cursos completa</h5>
                                <p>
                                    Lorem ipsum nisl etiam himenaeos ligula augue vehicula gravida tincidunt,
                                    etiam magna sapien gravida sodales sed vel pulvinar suspendisse, morbi mi
                                    proin urna ornare posuere donec aptent. orci vivamus primis fusce lacinia
                                    libero nostra aliquam vestibulum.
                                </p>
                            </div>
                        </div>

                        <div class="carousel-item h-100 active">
                            <img src="<?php echo e(url('assets/all/imgs/088e5938770b5dba8d9f164aeb9bc062.jpeg')); ?>" class="d-block h-100 image-fume-effect" alt="...">
                            <div class="carousel-caption d-none d-md-block text-start">
                                <div class="badge rounded-pill text-bg-primary px-3 py-2 mb-3">Cursos</div>
                                <h5>Segundo slider</h5>
                                <p>
                                    Lorem ipsum nisl etiam himenaeos ligula augue vehicula gravida tincidunt,
                                    etiam magna sapien gravida sodales sed vel pulvinar suspendisse, morbi mi
                                    proin urna ornare posuere donec aptent. orci vivamus primis fusce lacinia
                                    libero nostra aliquam vestibulum.
                                </p>
                            </div>
                        </div>

                        <div class="carousel-item h-100 active">
                            <img src="<?php echo e(url('assets/all/imgs/088e5938770b5dba8d9f164aeb9bc062.jpeg')); ?>" class="d-block h-100 image-fume-effect" alt="...">
                            <div class="carousel-caption d-none d-md-block text-start">
                                <div class="badge rounded-pill text-bg-primary px-3 py-2 mb-3">Cursos</div>
                                <h5>Terceiro slider</h5>
                                <p>
                                    Lorem ipsum nisl etiam himenaeos ligula augue vehicula gravida tincidunt,
                                    etiam magna sapien gravida sodales sed vel pulvinar suspendisse, morbi mi
                                    proin urna ornare posuere donec aptent. orci vivamus primis fusce lacinia
                                    libero nostra aliquam vestibulum.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-5 p-5 overflow-y-scroll" style="height: 100vh;">

                <div class="row mb-5">
                    <div class="col-8">
                        <img id="logo" src="<?php echo e(url('assets/all/imgs/Logo.png')); ?>" alt="logo-Empresa">
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-end">
                        <a class="m-0 p-0" href="<?php echo e(route('register' )); ?>">Criar conta</a>
                    </div>
                </div>

                <div class="row mb-4">
                    <h2>Boas-vindas</h2>
                    <p>Entre utilizando uma das opções abaixo</p>
                </div>

                <div class="row mb-5">
                    <div class="col-3">
                        <a class="btn btn-outiline-style w-100" href="">
                            <i class="bi bi-apple"></i>
                        </a>
                    </div>
                    <div class="col-3">
                        <a class="btn btn-outiline-style w-100" href="">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </div>
                    <div class="col-3">
                        <a class="btn btn-outiline-style w-100" href="">
                            <i class="bi bi-apple"></i>
                        </a>
                    </div>
                    <div class="col-3">
                        <a class="btn btn-outiline-style w-100" href="">
                            <i class="bi bi-twitter"></i>
                        </a>
                    </div>
                </div>

                <div class="row d-flex justify-content-center align-items-center mb-4">
                    <hr class="col-5">
                    <p class="col-2 text-center">ou</p>
                    <hr class="col-5">
                </div>

             
<div class="row">
    <form action="<?php echo e(url('/login')); ?>" method="post" class="login-form">
        <?php echo e(csrf_field()); ?>


        <h3 class="form-title font-green">Login</h3>

        <div id="error-message" class="alert alert-danger" style="display: none;">
            <button class="close" data-close="alert"></button>
            <span> Enter any username and password. </span>
        </div>

        <div class="form-group mb-3">
            <label class="form-label" for="email">Usuário</label>
            <div class="shape-form-group">
                <div class="i-shape ps-3 d-flex justify-content-start align-items-center">
                    <i class="bi bi-person"></i>
                </div>
                <?php echo Form::email('email', null, ['class' => 'form-control ps-5', 'id' => 'email', 'placeholder' => 'E-mail']); ?>

            </div>
        </div>

        <div class="form-group mb-3">
            <label class="form-label" for="password">Senha</label>
            <div class="shape-form-group">
                <div class="i-shape ps-3 d-flex justify-content-start align-items-center">
                    <i class="bi bi-lock"></i>
                </div>
                <?php echo Form::password('password', ['class' => 'form-control ps-5', 'id' => 'password', 'placeholder' => 'Senha']); ?>

            </div>
        </div>

        <div class="form-group mb-3 d-flex justify-content-start align-items-center gap-3">
            <input class="form-checkbox" type="checkbox" name="remeber_me" id="remeber_me">
            <p class="p-0 m-0">Manter conectado</p>
        </div>

        <div class="form-group mb-3 d-flex justify-content-center">
            <div class="g-recaptcha" data-sitekey="6LcnK_spAAAAAMzROHO1z8bzInvlx3PNHZQzwJ0B"></div>
        </div>

        <div class="form-group mb-3">
            <?php echo Form::submit('Entrar', ['class' => 'btn btn-primary d-flex justify-content-center align-items-center gap-3 w-100']); ?>

        </div>

        <div class="form-group mb-3">
            <div class="d-flex justify-content-center align-items-center gap-3">
                <p class="p-0 m-0">Esqueceu sua senha?</p>
                <a class="p-0 m-0" href="<?php echo e(url('/password/reset')); ?>">Recuperar senha</a>
            </div>
        </div>

    </form>
</div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>


<script>
    document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.getElementById('toggle-theme');
    const body = document.body;

    toggleButton.addEventListener('click', function() {
        body.classList.toggle('dark-mode');

        // Salvar a preferência no localStorage
        if (body.classList.contains('dark-mode')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });

    // Carregar a preferência do tema do localStorage
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme && savedTheme === 'dark') {
        body.classList.add('dark-mode');
    }
});
const {RecaptchaEnterpriseServiceClient} = require('@google-cloud/recaptcha-enterprise');

/**
  * Crie uma avaliação para analisar o risco de uma ação da interface.
  *
  * projectID: O ID do seu projeto do Google Cloud.
  * recaptchaSiteKey: A chave reCAPTCHA associada ao site/app
  * token: O token gerado obtido do cliente.
  * recaptchaAction: Nome da ação correspondente ao token.
  */
async function createAssessment({
  // O que fazer: substitua o token e as variáveis de ação reCAPTCHA antes de executar a amostra.
  projectID = "dppb-afux",
  recaptchaKey = "6LcnK_spAAAAAMzROHO1z8bzInvlx3PNHZQzwJ0B",
  token = "action-token",
  recaptchaAction = "action-name",
}) {
  // Crie o cliente reCAPTCHA.
  // TODO: armazena em cache o código de geração do cliente (recomendado) ou a chamada client.close() antes de sair do método.
  const client = new RecaptchaEnterpriseServiceClient();
  const projectPath = client.projectPath(projectID);

  // Crie a solicitação de avaliação.
  const request = ({
    assessment: {
      event: {
        token: token,
        siteKey: recaptchaKey,
      },
    },
    parent: projectPath,
  });

  const [ response ] = await client.createAssessment(request);

  // Verifique se o token é válido.
  if (!response.tokenProperties.valid) {
    console.log(`The CreateAssessment call failed because the token was: ${response.tokenProperties.invalidReason}`);
    return null;
  }

  // Verifique se a ação esperada foi executada.
  // The `action` property is set by user client in the grecaptcha.enterprise.execute() method.
  if (response.tokenProperties.action === recaptchaAction) {
    // Consulte a pontuação de risco e os motivos.
    // Para mais informações sobre como interpretar a avaliação, acesse:
    // https://cloud.google.com/recaptcha-enterprise/docs/interpret-assessment
    console.log(`The reCAPTCHA score is: ${response.riskAnalysis.score}`);
    response.riskAnalysis.reasons.forEach((reason) => {
      console.log(reason);
    });

    return response.riskAnalysis.score;
  } else {
    console.log("The action attribute in your reCAPTCHA tag does not match the action you are expecting to score");
    return null;
  }
}
</script><?php /**PATH /var/www/projetos/blog/resources/views/auth/login.blade.php ENDPATH**/ ?>