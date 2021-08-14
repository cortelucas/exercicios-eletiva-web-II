<form action="/exe_05_res" method="POST">
    @csrf
    <div>
        <label for="nota_01">Digite a primeira nota: </label>
        <div>
            <input type="text" id="nota_01" name="nota_01">
        </div>
    </div>
    <div>
        <label for="nota_02">Digite a segunda nota: </label>
        <div>
            <input type="text" id="nota_02" name="nota_02">
        </div>
    </div>
    <div>
        <label for="nota_03">Digite a terceira nota: </label>
        <div>
            <input type="text" id="nota_03" name="nota_03">
        </div>
    </div>
    <div>
        <label for="nota_04">Digite a quarta nota: </label>
        <div>
            <input type="text" id="nota_04" name="nota_04">
        </div>
    </div>
    <button type="submit">Enviar</button>
</form>
