<!DOCTYPE html>

<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <title>Kalkulačka</title>
    </head>
    <body>
        <form>
            <label for="number1id">Číslo jedna</label>
            <input type="number" name="number1name" id="number1id">
            <label for="number2id">Číslo dvě</label>
            <input type="number" name="number2name" id="number2id">

            <label for="operationId">Operace</label>
            <input type="text" name="operationName" id="operationId">

            <button type="submit">Odeslat</button>
        </form>
        <?php
            $input1 = $_GET['number1name'];
            $input2 = $_GET['number2name'];
            $operation = $_GET['operationName'];

            if (empty($input1) || empty($input2) ) {
                if ($input2 == 0) {
                    echo 'To víš že jo!';
                    return 0;
                }
                echo 'Zadej hodnoty!';
                return 0;
            }

            switch ($operation) {
                case '+';
                    echo $input1 + $input2;
                    break;
                case '-';
                    echo $input1 - $input2;
                    break;
                case '*';
                    echo $input1 * $input2;
                    break;
                case '/';
                    echo $input1 / $input2;
                    break;
                default;
                    echo 'Zadej operaci!';

            }
        ?>
    </body>
</html>