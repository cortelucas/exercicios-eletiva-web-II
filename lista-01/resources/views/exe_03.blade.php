<form action="/exe_03_res" method="POST">
    @csrf
    <label for="valor">Digite um número</label>
    <input type="text" id="valor" name="valor">
    <button type="submit">Enviar</button>
</form>
