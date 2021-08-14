<form method="POST" action="exe_01_res">
    @csrf
    <label for="valor">informe o valor do quilo: </label>
    <input type="number" id="valor" name="valor" />
    <label for="qnt_kilos">Quantidad de Quilos: </label>
    <input type="number" id="qnt_kilos" name="qnt_kilos" />
    <button type="submit">Enviar</button>
</form>
