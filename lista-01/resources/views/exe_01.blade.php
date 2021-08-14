<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto</title>
</head>
<body>
<form method="POST" action="exe_01_res">
    @csrf
    <label for="valor">informe o valor: </label>
    <input type="number" id="valor" name="valor" />
    <label for="pagamento">informe o pagamento: </label>
    <input type="number" id="pagamento" name="pagamento" />
    <button type="submit">Enviar</button>
</form>
</body>
</html>
