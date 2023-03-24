<?php
session_start();
?><!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <title>Petisqueira Donna Olinda</title>
    <link rel="shortcut icon" href="../images/logo.jpg" />
    <link rel="stylesheet" href="../styles.css" />
    <link href="https://fonts.cdnfonts.com/css/ink-free" rel="stylesheet" />
  </head>

  <body>
    <header>
      <img src="../images/header.jpg" alt="Foto do restaurante" />
      <nav class="menu container--flex-row">
        <a href="../index.html">
          <img
            class="menu__img"
            src="../images/logo.jpg"
            alt="Logo do restaurante"
          />
        </a>
        <ul class="menu__list container--flex-row">
          <li class="menu__list--item">
            <a class="menu__list--link" href="../index.html">Home</a>
          </li>
          <li class="menu__list--item">
            <a class="menu__list--link" href="./menus.html">Cardápios</a>
          </li>
          <li class="menu__list--item">
            <a class="menu__list--link" href="./opinion.html">Avaliações</a>
          </li>
          <li class="menu__list--item">
            <a class="menu__list--link" href="./contact.html">Contactos</a>
          </li>
          <li class="menu__list--item language">
            Linguas
            <ul class="language__list">
              <li>
                <a class="language__list--item" href="./contact.html">
                  <img
                    class="language__list--flag"
                    src="../images/flags/portugal.png"
                    alt="Portugal flag"
                  />
                  <p class="language__list--link">Português</p>
                </a>
              </li>
              <li>
                <a class="language__list--item" href="../en/contact.html">
                  <img
                    class="language__list--flag"
                    src="../images/flags/uk.png"
                    alt="United Kingdom flag"
                  />
                  <p class="language__list--link">English</p>
                </a>
              </li>
              <li>
                <a class="language__list--item" href="../fr/contact.html">
                  <img
                    class="language__list--flag"
                    src="../images/flags/france.png"
                    alt="France flag"
                  />
                  <p class="language__list--link">Français</p>
                </a>
              </li>
              <li>
                <a class="language__list--item" href="../es/contact.html">
                  <img
                    class="language__list--flag"
                    src="../images/flags/spain.png"
                    alt="Spain flag"
                  />
                  <p class="language__list--link">Español</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>

    <main>
      <h1>Petisqueira Donna Olinda</h1>
      <section class="contact">
        <h2>Uma pergunta ? Contate-nos !</h2>

        <?php if(array_key_exists('errors', $_SESSION)): ?>
            <div class="error">
                <?= implode('<br>', $_SESSION['errors']); ?>
            </div>
        <?php endif; ?>
        <?php if(array_key_exists('success', $_SESSION)): ?>
            <div class="success">
                Votre email a bien été envoyé
            </div>
        <?php endif; ?>

        <form class="form" method="post" action="../post_contact.php">
          <div class="form__identity">
            <div class="form__identity--column">
              <label class="form__label" for="inputname">Nome</label>
              <input
                class="form__custinput"
                type="text"
                name="name"
                id="inputname"
                placeholder="Sérgios Morais"
                required
                value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>"
              />
            </div>
            <div class="form__identity--column">
              <label class="form__label" for="inputtel">Telefone</label>
              <input
                class="form__custinput"
                type="tel"
                name="tel"
                id="inputtel"
                maxlength="11"
                placeholder="965 443 443"
                required
                value="<?= isset($_SESSION['inputs']['tel']) ? $_SESSION['inputs']['tel'] : ''; ?>"
              />
            </div>
          </div>
          <div class="form__identity">
            <div class="form__identity--column">
              <label class="form__label" for="inputemail">Email</label>
              <input
                class="form__custinput"
                type="email"
                name="email"
                id="inputemail"
                placeholder="exemplo@email.com"
                required
                value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>"
              />
            </div>
          </div>
          <label class="form__label" for="inputmessage">Mensagem</label>
          <textarea
            class="form__custinput"
            name="message"
            id="inputmessage"
            rows="10"
            placeholder="Sua mensagem ou pedido de reserva ..."
            required
          ><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
          <button type="submit" class="form__button">Enviar</button>
        </form>
        <p class="contact__text">
          Iremos enviar-lhe uma confirmação de reserva quando tivermos lido a
          sua mensagem. Obrigado !
        </p>
      </section>
    </main>

    <footer>
      <h2 class="footer__heading">Contactos</h2>
      <div class="footer">
        <div class="container--flex-column">
          <img
            class="footer__logo"
            src="../images/logo.jpg"
            alt="Logo do restaurante"
          />
          <h3 class="footer__heading">Restaurante Petisqueira Donna Olinda</h3>
          <p>Rua chefe Antonio Afonso 31 Rc</p>
          <p>8800-636 Tavira</p>
          <a class="footer__number" href="tel:+351-965-443-443">
            (+351) 965 443 443
          </a>
          <a class="footer__mail" href="mailto:donna.olinda8@gmail.com">
            donna.olinda8@gmail.com
          </a>
        </div>
        <div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3181.002130035233!2d-7.656374323659623!3d37.1288643491032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd100331db76a787%3A0x775b97ade048b3e7!2sPetisqueira%20Donna%20Olinda!5e0!3m2!1sfr!2spt!4v1679065960450!5m2!1sfr!2spt"
            width="100%"
            height="100%"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <div class="footer--container">
          <a
            href="https://www.facebook.com/petisqueiradonnaolinda/?locale=pt_BR"
            target="_blank"
          >
            <img
              class="footer__social--image"
              src="../images/footer/facebook.svg"
              alt="Logo Facebook"
            />
          </a>
          <a
            href="https://www.instagram.com/petisqueiradonnaolinda/?hl=fr"
            target="_blank"
          >
            <img
              class="footer__social--image"
              src="../images/footer/instagram.svg"
              alt="Logo instagram"
            />
          </a>
          <img
            class="footer__image"
            src="../images/melhor-restaurante.jpg"
            alt="Melhor Restaurante"
          />
        </div>
      </div>
    </footer>
  </body>
</html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>