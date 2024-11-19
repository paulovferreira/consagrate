<?php
if (session_status() === PHP_SESSION_NONE) {
    // Verifica se a sessão ainda não foi iniciada
    session_start();
}

include('verifica_login.php');
?>

<!DOCTYPE html>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eu me Consagro - 12 dias prelimiminares</title>    
    <link rel="stylesheet" type="text/css" href="css/12dias.css">
    <link rel="shortcut icon" type="imagex/png" href="./img/logo.ico">
</head>
<body>
    <div>        
        <div class="container">        
            <h1>Exercícios preparatórios</h1>
            <div class="step active">
                <h2>12 dias preliminares</h2>
                <p>Iniciamos aqui as orações dos 12 dias preliminares de oração.</p>
                <p>Nestes dias, dedicaremos nossa oração em desapego ao espírito do Mundo.</p>
                <h3>Orações da semana:</h3>
                <p>1) Ave, Maris Stella</p>
                <p>2) Vem Espírito Criador</p>
            </div>
            <div class="step">
                <h2>AVE, MARIS STELLA <br/> (São Bernardo de Claraval)</h2>
                <p class="oracao">                    
                    Ave, do mar Estrela, <br/>
                    De Deus Mãe bela,<br/>
                    Sempre Virgem, da morada<br/>
                    Celeste feliz entrada.<br/><br/>
                    Ó tu que ouviste da boca<br/>
                    Do anjo Gabriel a saudação;<br/>
                    Dá-nos paz e quietação;<br/>
                    E o nome de Eva troca.<br/><br/>
                    As prisões aos réus desata.<br/>
                    E a nós, cegos, alumia;<br/>
                    De tudo que nos maltrata<br/>
                    Nos livra, o bem nos granjeia.<br/><br/>
                    Ostenta que és Mãe, fazendo<br/>
                    Que os rogos do povo teu<br/>
                    Ouça Aquele que, nascendo<br/>
                    Por nós, quis ser Filho teu.<br/><br/>
                    Ó virgem especiosa,<br/>
                    Toda cheia de ternura,<br/>
                    Extintos nossos pecados,<br/>
                    Dá-nos pureza e brandura,<br/><br/>
                    Dá-nos uma vida pura,<br/>
                    Põe-nos em via segura,<br/>
                    Para que a Jesus gozemos,<br/>
                    E sempre nos alegremos.<br/><br/>
                    A Deus Pai veneramos<br/>
                    A Jesus Cristo também.<br/>
                    E ao Espírito Santo demos<br/>
                    Aos três um louvor<br/><br/>
                    <b>Amém.</b>


                </p>
            </div>
            <div class="step">
                <h2>VEM ESPÍRITO CRIADOR </h2>
                <p>
                Vem , ó criador Espírito, <br/>
                As almas dos teus visita;<br/>
                Os corações que criastes,<br/>
                Enche de graça infinita.<br/><br/>
                Tu, Paráclito és chamado<br/>
                Dom do Pai celestial,<br/>
                Fogo, caridade, fonte<br/>
                Viva unção espiritual.<br/><br/>
                Tu dás septiforme graça;<br/>
                Dedo és da destra paterna;<br/>
                Do Pai, solene promessa,<br/>
                Dás força da voz suprema.<br/><br/>
                Nossa razão esclarece,<br/>
                Teu amor no peito acende,<br/>
                Do nosso corpoa fraqueza<br/>
                Com tua força defende.<br/><br/>
                De nós afasta o inimigo.<br/>                
                Dá-nos a paz sem demora,<br/>
                Guiai-nos; e evitaremos<br/>
                Tudo quanto se deplora.<br/><br/>
                Dá que Deus Pai e seu Filho<br/>
                Por ti nós bem conheçamos,<br/>
                E em ti, Espírito de ambos<br/>
                Em todo tempo creiamos.<br/><br/>
                A Deus Pai se de a gloria<br/>
                E ao Filho ressuscitado,<br/>
                Paráclito e a ti também<br/>
                Com louvor perpetuado. Amém <br/><br/>

                V. Envia o vosso Espírito, e a tudo será criado.<br/>
                R. E renovareis a face da terra.<br/>
                Oremos. Óh Deus, que instruíste os corações de vossos fieis com a luz do espírito conheçamos o que é reto, e gozemos sempre as suas consolações. Por Cristo Nosso Senhor. <br/><br/>
                <b>Amém</b>              


                </p>
            </div>
            <div class="step">
                <h2>Agora é seu momento.</h2>
                <p>
                    Silencie seu coração, peça ao Espírito Santo que mostre todas as suas raízes no Espírito do mundo. <br/>
                    Deixe o Espírito Santo lhe mostrar onde estão seus apegos deste mundo. <br/>

                    <h3>Deus abençoe.</h3>
                </p>
            </div>         

            <div class="navigation">
                <button id="prevBtn" onclick="prevStep()" disabled>Anterior</button>
                <button id="nextBtn" onclick="nextStep()">Próximo</button>
                <br/><br/>
                <button class="back-button" onclick="history.back()">Voltar ao início</button>
            </div>
        </div>
    </div>

    <script>
        let currentStep = 0;
        const steps = document.querySelectorAll('.step');

        function showStep(n) {
            steps.forEach((step, index) => {
                step.classList.toggle('active', index === n);
            });

            document.getElementById("prevBtn").disabled = (n === 0);
            document.getElementById("nextBtn").disabled = (n === steps.length - 1);
        }

        function nextStep() {
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        }
    </script>
</body>
</html>
