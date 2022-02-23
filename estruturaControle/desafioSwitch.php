<div class="titulo">Desafio Switch</div>

<form action = "#" method = "post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value = "km-milha">KM > Milha</option>
        <option value = "milha-km">Milha > KM</option>
        <option value = "metro-km">Metros > KM</option>
        <option value = "km-metro">KM > Metros</option>
        <option value = "fh-celsius">FH > Celcius</option>
        <option value = "celsius-fh">Celcius > FH</option>
    </select>
    <button> calcular</button>
</form>
<style>
    form > *{
        font-size: 1.5rem;
    }
</style>
<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
$entrada = $_POST['param'] ?? 0;

switch($_POST['conversao']){
    case 'km-milha':
        $resultado = $entrada * FATOR_KM_MILHA;
        $mensagem =  " $entrada KM = $resultado Milhas";
        break;
    case 'milha-km':
        $resultado = $entrada / FATOR_KM_MILHA;
        $mensagem = "$entrada Milhas = $resultado KM";
        break;
    case 'metro-km':
        $resultado = $entrada / FATOR_METRO_KM;
        $mensagem = "$entrada Metros = $resultado KM";
        break;
    case 'km-metro':
        $resultado = $entrada * FATOR_METRO_KM;
        $mensagem = "$entrada KM = $resultado Metros";
        break;

    case 'fh-celsius':
        $resultado =  ($entrada - 32)/ 1.8;
        $mensagem = "{$entrada}° Fahrenheit = {$resultado}° Celsius";
        break;
      
    case 'celsius-fh':
        $resultado = ($entrada * 1.8) + 32;
        $mensagem = "{$entrada}° Celsius = {$resultado}° Fahrenheit";
        break;
    default:
    $mensagem = "Nenhum valor foi calculado!";

}
echo$mensagem;


