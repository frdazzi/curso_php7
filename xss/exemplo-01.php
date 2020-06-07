<form method="post">
    <input type="text" name="busca">
    <button>Enviar</button>
</form>

<?php

// Caso queira usar o exemplo do curso
$_POST['busca'] = '<a href="#"><strong>Oi</strong></a><script>alert("ok")</script>';

if (isset($_POST['busca'])) {
    // strip_tags remove quaisquer tags
    // html de uma string
    // passe como parametro as tags que deseja
    // manter, no exemplo abaixo tag <strong>
    echo strip_tags($_POST['busca'], "<strong><a>");

    echo "<hr>";

    // caso queira que as tags sejam escritas na tela
    // use a funcao
    echo htmlentities($_POST['busca']);
}
?>
