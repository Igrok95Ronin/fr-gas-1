<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Сhauffagiste à'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 containerP0">
                    <div class="header__box">
                        <div class="header__left">
                            <h1 class="header__title"><?= $city == "" ? "Сhauffagiste à proximité" : $title ?></h1>
                            <div class="header__imgWrapper">
                                <img class="header__img" src="./assets/img/mainFon.jpg" alt="Сhauffagiste à proximité">
                            </div>
                        </div>
                        <div class="header__right">
                            <p class="header__txt">
                                Vous cherchez un <strong>chauffagiste à <?= $city == "" ? "proximité" : $city ?> </strong> ? Nos experts sont <strong> disponibles 24h/24 pour vos réparations</strong>. Intervention rapide en 1 heure garantie. Profitez de notre service fiable avec assurance sur toutes nos prestations. Contactez-nous dès maintenant !
                            </p>
                            <div class="header__wrapperMiniImg">
                                <img class="header__imgMini" src="./assets/img/gramata.png" alt="gramata">
                                <img class="header__imgMini" src="./assets/img/stars.png" alt="stars">
                            </div>
                            <div class="header__tellWrapper">
                                <a class="header__tell" href=<?= $phone_href ?>><span><?= $phone_name ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
        <section class="boilerRepair">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerP0">
                        <div class="boilerRepair__box">
                            <div class="boilerRepair__left">
                                <div class="boilerRepair__imgWrapper">
                                    <img class="boilerRepair__img" src="./assets/img/mainFon2.jpg" alt="mainFon2">
                                </div>
                                <h2 class="boilerRepair__subTitle">Réparation de chaudières à <?= $city == "" ? "proximité" : $city ?></h2>
                            </div>
                            <div class="boilerRepair__right">
                                <p class="boilerRepair__txt">Vous rencontrez des problèmes avec votre chaudière ? Nous proposons des <strong> services de réparation rapides et efficaces à <?= $city == "" ? "proximité" : $city ?></strong>. Nos techniciens qualifiés sont disponibles pour résoudre toute panne, qu'il s'agisse d'une fuite d'eau ou d'autres dysfonctionnements.</p>
                                <div class="boilerRepair__wrapperBtn">
                                    <a class="boilerRepair__tell" href=<?= $phone_href ?>><span><?= $phone_name ?></span></a>
                                    <a class="boilerRepair__message" href="#anchorForm"><span>Envoyer un message</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="commits">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="commits__box">
                            <h2 class="commits__title">Avis des clients</h2>
                            <div class="commits__wrapper">
                                <div class="commits__commit">
                                    <div class="commits__top">
                                        <div class="commits__imgWrp">
                                            <img class="commits__img" src="./assets/img/commentW.jpg" alt="commit">
                                        </div>
                                        <div class="commits__content">
                                            <p class="commits__name">— Sophie B.</p>
                                            <img class="commits__imgStar" src="./assets/img/stars2.png" alt="star">
                                        </div>
                                    </div>
                                    <p class="commits__message">
                                        "J'ai eu une fuite d'eau de ma chaudière, et l'équipe est arrivée en seulement une heure. Le service était impeccable, et ils ont rapidement réparé le problème !"</p>
                                </div>
                                <div class="commits__commit">
                                    <div class="commits__top">
                                        <div class="commits__imgWrp">
                                            <img class="commits__img" src="./assets/img/commentM.jpg" alt="commit">
                                        </div>
                                        <div class="commits__content">
                                            <p class="commits__name">— Marc L.</p>
                                            <img class="commits__imgStar" src="./assets/img/stars.png" alt="star">
                                        </div>
                                    </div>
                                    <p class="commits__message">
                                        "J'ai fait installer une nouvelle chaudière, et je suis très satisfait du service. Les techniciens étaient très professionnels et ont pris le temps d'expliquer tout le processus."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="boilerRepair">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerP0">
                        <div class="boilerRepair__box">
                            <div class="boilerRepair__left">
                                <div class="boilerRepair__imgWrapper">
                                    <img class="boilerRepair__img" src="./assets/img/mainFon3.jpg" alt="mainFon3">
                                </div>
                                <h2 class="boilerRepair__subTitle">Installation de chaudières <?= $city == "" ? "" : $city ?> </h2>
                            </div>
                            <div class="boilerRepair__right">
                                <p class="boilerRepair__txt">Nous offrons un service <strong> d'installation de chaudières à gaz de haute qualité à <?= $city == "" ? "proximité" : $city ?></strong>. Notre équipe professionnelle garantit une installation conforme aux normes de sécurité. Contactez-nous pour une consultation gratuite ! </p>
                                <p class="boilerRepair__txt">- <strong> Installation de chaudières à gaz </strong>: Installation conforme aux normes de sécurité.
                                <p class="boilerRepair__txt">- <strong> Consultation gratuite </strong>: Évaluation de vos besoins en chauffage sans engagement.</p>
                                <p class="boilerRepair__txt">- <strong> Entretien et maintenance </strong>: Services réguliers pour garantir le bon fonctionnement de votre chaudière.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="boilerRepair">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerP0">
                        <div class="boilerRepair__box">
                            <div class="boilerRepair__left">
                                <div class="boilerRepair__imgWrapper">
                                    <img class="boilerRepair__img" src="./assets/img/mainFon4.png" alt="mainFon4">
                                </div>
                                <h2 class="boilerRepair__subTitle">Entretien de chaudières 24/7 <?= $city == "" ? "" : $city ?></h2>
                            </div>
                            <div class="boilerRepair__right">
                                <p class="boilerRepair__txt">L'entretien régulier de votre chaudière est essentiel pour éviter des pannes coûteuses. Nous sommes <strong> disponibles 24 heures sur 24, 7 jours sur 7</strong>, pour assurer le bon fonctionnement de votre équipement à <?= $city == "" ? "proximité" : $city ?>. Un entretien préventif permet de prolonger la durée de vie de votre chaudière.</p>
                                <div class="boilerRepair__wrapperBtn boilerRepair__center">
                                    <a class="boilerRepair__message" href="#anchorForm"><span>Envoyer un message</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="boilerRepair">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerP0">
                        <div class="boilerRepair__box">
                            <div class="boilerRepair__left">
                                <div class="boilerRepair__imgWrapper">
                                    <img class="boilerRepair__img" src="./assets/img/mainFon5.png" alt="mainFon5">
                                </div>
                                <h2 class="boilerRepair__subTitle">Intervention rapide <?= $city == "" ? "" : $city ?></h2>
                            </div>
                            <div class="boilerRepair__right">
                                <p class="boilerRepair__txt">Nous comprenons l'importance d'une intervention rapide. Nos techniciens arrivent dans un délai d'1 à 2 heures pour résoudre vos <strong> problèmes de chaudière à <?= $city == "" ? "proximité" : $city ?></strong>. Faites- nous confiance pour un service rapide et fiable !</p>
                                <div class="boilerRepair__wrapperBtn boilerRepair__center">
                                    <a class="boilerRepair__tell" href=<?= $phone_href ?>><span><?= $phone_name ?></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class='forms'>
            <div class='forms__wrapper'>
               <div class='container-fluid'>
                  <div class='row'>
                     <div class='col-12 container'>
                        <div class='forms__box'>
                           <h2 class='forms__title'>PRISE DE RENDEZ-VOUS</h2>
                           <form id='jq_form' class='mb-0 mt-3'>
                              <div class='my-0'>
                                 <input class='form-control' placeholder='Nom' name='jq_name' type='text'>
                                 <div id='jq_name' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Ceci est un champ obligatoire.</div>
                              </div>
                              <div class='my-4'>
                                 <input class='form-control' placeholder='Téléphone' name='jq_phone' type='text'>
                                 <div id='jq_phone' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Ceci est un champ obligatoire.</div>
                              </div>
                              <div class='my-4'>
                                 <input class='form-control' placeholder='Rue' name='jq_street' type='text'>
                                 <div id='jq_street' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Ceci est un champ obligatoire.</div>
                              </div>
                              <div class='my-4'>
                                 <input class='form-control' placeholder='ZIP Ville' name='jq_city' type='text'>
                                 <div id='jq_city' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Ceci est un champ obligatoire.</div>
                              </div>
                              <div class='my-4'>
                                 <input class='form-control' placeholder='E-mail' name='jq_email' type='text'>
                                 <div id='jq_email' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Ceci est un champ obligatoire.</div>
                              </div>
                              <div class='my-4'>
                                 <textarea rows='3' class='form-control' name='jq_text' placeholder='Décrivez votre problème...'></textarea>
                                 <div id='jq_text' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Ceci est un champ obligatoire.</div>
                              </div>
                              <div>
                                 <input class='btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button' type='submit' id='jq_submit' value='Suivant'>
                              </div>
                              <div id='jq_success' style='display:none'>Merci pour votre message. Elle a été envoyée.</div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </section>
        <section class='btnFixedD'>
            <div class='btnFixedD__box'>
                <a class="btnFixedD__btn" href="<?= $phone_href ?>" ><img class="btnFixedD__img" src="assets/icons/telephone-fill.svg" alt=""></a>
            </div>
        </section>
        <section class='btnFixed'>
            <div class='btnFixed__box'>
                <a class="btnFixed__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
            </div>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">© 2024</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="assets/js/main.min.js"></script>
</body>

</html>