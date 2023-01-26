<!DOCTYPE html>

<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <title>Converter</title>
    </head>
    <body>
        <form>
            <label for="numberId">Číslo </label>
            <input type="number" placeholder="V desítkové soustavě" name="num" id="numberId">
            <br>
            <label for="ConvertTo">Soustava</label>
            <input type="number" name="convert" id="numberId">
            <br>
            <button type="submit"">Odeslat</button>
        </form>
        <?php
            $num = (string)$_GET['num'];
            $convert = $_GET['convert'];
            if ($convert < 2)
                echo "Wrong Input!";

            echo 'Číslo: ' . $num . '<br>';
            echo 'Do soustavy: ' . $convert . '<br>';

            echo 'Výsledek: ' . strrev(convert($num, $convert));

            function convert($num, $convert) {
                $converted = "";
                while($num > 0) {
                    $remainder = $num%$convert;
                    $num = intval(($num - $remainder)/$convert);
                    if($remainder > 9)
                        $remainder = chr($remainder+55);
                    $converted .= $remainder;
                }
                return $converted;
            }
        ?>
        <style>
            input {
                width: 100%;
            }
            form > * {
                margin-bottom: 8px;
            }
        </style>
    </body>
</html>