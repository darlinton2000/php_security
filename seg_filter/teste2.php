<?php
    $prioridade = filter_input(INPUT_GET, 'prioridade', FILTER_VALIDATE_INT, array(
        'options' => array(
            'min_range' => 1,
            'max_range' => 4,
            'default'   => 1
        )
    ));
    
    echo "Prioridade: " . $prioridade;
?>

<form method="POST">
    <select name="prioridade">
        <option value="1">Prioridade 1</option>
        <option value="2">Prioridade 2</option>
        <option value="3">Prioridade 3</option>
        <option value="4">Prioridade 4</option>
    </select>

    <input type="submit" value="Enviar" />
</form>