<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Resistores</title>
</head>
<body>
    <h1>Calculadora de Resistores</h1>
    
    <form method="post" action="">
        <label for="cor">Selecione uma cor:</label>
        <select name="cor" id="cor">
            <option value="SemCor">Escolha uma cor abaixo</option>
            <option value="Preto">Preto</option>
            <option value="Marrom">Marrom</option>
            <option value="Vermelho">Vermelho</option>
            <option value="Laranja">Laranja</option>
            <option value="Amarelo">Amarelo</option>
            <option value="Verde">Verde</option>
            <option value="Azul">Azul</option>
            <option value="Violeta">Violeta</option>
            <option value="Cinza">Cinza</option>
            <option value="Branco">Branco</option>
        </select>
        <button type="submit">Obter Valor</button>
    </form>
    
    <?php
  //Lista de cores
    $cores = array(
        'Preto' => 0,
        'Marrom' => 1,
        'Vermelho' => 2,
        'Laranja' => 3,
        'Amarelo' => 4,
        'Verde' => 5,
        'Azul' => 6,
        'Violeta' => 7,
        'Cinza' => 8,
        'Branco' => 9
    );

    // Função pra escolhe
    function corExiste($cor) {
        global $cores;
        return array_key_exists($cor, $cores);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $corSelecionada = $_POST["cor"];
        
        if (corExiste($corSelecionada)) {
            $valorNumerico = $cores[$corSelecionada];
            
            switch ($corSelecionada) {
                case 'Preto':
                    $corTexto = '#000';
                    break;
                case 'Marrom':
                    $corTexto = '#8B4513';
                    break;
                case 'Vermelho':
                    $corTexto = '#FF0000';
                    break;
                case 'Laranja':
                    $corTexto = '#FFA500';
                    break;
                case 'Amarelo':
                    $corTexto = '#FFFF00';
                    break;
                case 'Verde':
                    $corTexto = '#008000';
                    break;
                case 'Azul':
                    $corTexto = '#0000FF';
                    break;
                case 'Violeta':
                    $corTexto = '#9400D3';
                    break;
                case 'Cinza':
                    $corTexto = '#808080';
                    break;
                case 'Branco':
                    $corTexto = '#FFFFFF';
                    break;
                default:
                    $corTexto = '#000';
                    break;
            }
            
            echo "<p>A cor selecionada é <bold><span id='maiscula' style='color: $corTexto;'>$corSelecionada</span></bold> e o valor numérico é $valorNumerico.</p>";
        } else {
            echo "<p>Por favor, escolha uma cor na lista acima.</p>";
        }
    }
    ?>
    <style>
        #maiscula {
            text-transform: uppercase;
        }
    </style>
</body>
</html>
