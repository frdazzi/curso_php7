<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="cadastrar.php" method="POST">
      <div class="g-recaptcha" data-sitekey="6Lc6PQEVAAAAAG40Z5MzqYxE36T7wBZ3etL7xQo3"></div>
      <br/>
      Digite seu e-mail: <input type="email" name="inputemail">
      <br/><br/>
      <button>Enviar</button>
    </form>
  </body>
</html>
