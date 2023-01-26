<!DOCTYPE html>

<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <title>Converter</title>
        <style>
            input {
                width: 100%;
                margin-bottom: 8px;
            }

            table {
                border-collapse: collapse;
            }

            td {
                border: 1px solid black;
                padding: 2px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <form>
            <label for="numberId">Číslo </label>
            <input type="Text" placeholder="Zadej číslo" name="num" pattern="[A-Za-z0-9]{}">
            <br>
            <label for="ConvertFom">Ze soustavy</label>
            <input type="number" placeholder="min: 2    max: 36" name="convertFrom" min="2" max="36">
            <br>
            <label for="ConvertTo">Do soustavy</label>
            <input type="number" placeholder="min: 2    max: 36" name="convertTo" min="2" max="36">
            <br>
            <button type="submit">Převést</button>
        </form>
        <?php            
            $num = $_GET['num'];
            $convertFrom = $_GET['convertFrom'];
            $convertTo = $_GET['convertTo'];
            if($num != "" && $convertFrom !="" && $convertTo !="") {
                isValid($num, $convertFrom);
                echo 'Číslo: ' . strtoupper($num) . '<br>';
                echo 'Ze soustavy: ' .  $convertFrom . '<br>';
                echo 'Do soustavy: ' . $convertTo . '<br>';
                echo 'Výsledek: ' . strrev(convertTo(toDecimal($num, $convertFrom), $convertTo)) . '<br><br>';

                echo 'Postup:<br>';
                vypisPostup($num, $convertFrom, $convertTo);
            }
            function convertTo($num, $convertTo) {
                $converted = "";
                while ($num > 0) {
                    $remainder = $num%$convertTo;
                    $num = intval(($num - $remainder)/$convertTo);
                    if ($remainder > 9)
                        $remainder = chr($remainder+55);
                    $converted .= $remainder;
                }
                return $converted;
            }

            function toDecimal($num, $convertFrom) {
                $numLen = strlen($num);
                $decimal = 0;
                for ($i = 0; $i < $numLen; $i++) {
                    $lastChar = substr($num, -1);
                    if (!(is_numeric($lastChar))) {
                        $lastChar = intval(ord(strtoupper($lastChar))) - 55;
                    }
                    $decimal = $decimal + $lastChar * ($convertFrom ** $i);
                    $num = substr($num, 0, -1);
                }
                return $decimal;
            }

            function isValid($num, $convertFrom) {
                $number = str_split($num);
                foreach ($number as $char) {
                    if (!(is_numeric($char))) {
                        $char = intval(ord(strtoupper($char)) - 55);
                    }
                    if ($char > $convertFrom) {
                        alert('Zadané číslo se v zadané soustavě nenachází');
                        exit();
                    }
                }
            }

            function vypisPostup($num, $convertFrom, $convertTo) {
                $num = strtoupper($num);
                echo "Převod čísla '" . $num . "' ze soustavy {$convertFrom}-ové do soustavy {$convertTo}-ové<br>";
                echo "<table>";
                    echo "<tr>
                        <td>
                            $convertFrom
                        </td>
                        <td>
                            10
                        </td>
                    </tr>";
                for($i = 0; $i < $convertFrom; $i++) {
                    if ($i < 10)
                        $convNum = $i;
                    else
                        $convNum = chr($i+55);
                    echo "<tr>
                        <td>
                            $convNum
                        </td>
                        <td>
                            $i
                        </td>
                    </tr>";
                }
                echo "</table>";
                if ($convertFrom != 10) {
                    echo "Číslo převedu z {$convertFrom}-ové soustavy do desítkové<br>";
                    echo "{$num} = ";
                    for($j = strlen($num); $j > 0 ; $j--) {
                        echo substr($num, -1) . " * {$convertFrom}^" . $j;
                        $num = substr($num, 0, -1);
                    }
                }
            }

            function alert($msg) {
                echo "<script type='text/javascript'>alert('$msg');</script>";
            }
        ?>       
    </body>
</html>