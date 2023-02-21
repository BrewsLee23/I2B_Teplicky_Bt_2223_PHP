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

            .convert-table {
                display: flex;
                flex-direction: row;
                align-items: flex-start;
            }

            .from-decimal {
                margin-right: 2rem;
            }
        </style>
    </head>
    <body>
        <form>
            <label for="num">Číslo </label>
            <input type="Text" placeholder="Zadej číslo" name="num" pattern="[A-Za-z0-9]{}">
            <br>
            <label for="ConvertFrom">Ze soustavy</label>
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
                $numLen = strlen($num);
                $char = 1;

                echo "Převod čísla '" . $num . "' ze soustavy {$convertFrom}-ové do soustavy {$convertTo}-ové<br><br>";
                echo "Číslo převedu do desítkové soustavy:<br>";
                echo "<table>";
                    echo "<tr>
                        <td>
                            $convertFrom-ová
                        </td>
                        <td>
                            10-ová
                        </td>
                    </tr>";
                if ($convertFrom != 10) {
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
                }
                echo "</table>";
                echo $num . ' = ';
                if ($convertFrom != 10) {    
                    if (!(is_numeric(substr($num, 0, 1)))) {
                        echo ord(substr($num, 0, 1)) - 55 . ' * (' . $convertFrom . '^' . ($numLen - 1) . ")\t";
                    } else {
                        echo substr($num, 0, 1) . ' * (' . $convertFrom . '^' . ($numLen - 1) . ")\t";
                    }
                    for ($i = $numLen - 2; $i >= 0; $i--) {
                        echo ' + ';
                        if (!(is_numeric(substr($num, $char, 1)))) {
                            echo ord(substr($num, $char, 1)) - 55 . ' * (' . $convertFrom . '^' . $i . ")\t";
                        } else {
                            echo substr($num, $char, 1) . ' * (' . $convertFrom . '^' . $i . ")\t";
                        }
                        $char++;
                    }
                    echo ' = ' . toDecimal($num, $convertFrom) . '<br><br>';
                }
                    
                if ($convertTo != 10) {
                    $num = toDecimal($num, $convertFrom);
                    $convertedNum = '';
                    $numLen = strlen($num);
                    $isConverted = FALSE;
                    echo "Číslo převedu z desítkové soustavy do $convertTo-ové soustavy:<br>";
                    echo '<div class="convert-table">';
                    echo '<table class="from-decimal">';
                        echo "<tr>
                                <td> Dělenec </td>
                                <td> Dělitel </td>
                                <td> Zbytek </td>
                            </tr>";                       
                        while (!($isConverted)) {
                            echo '<tr>'.
                                '<td>' . $num . '</td>'.
                                '<td>' . $convertTo . '</td>'.
                                '<td>' . $num%$convertTo . '</td>';
                            echo '</tr>';
                            if (($num%$convertTo) > 9) {
                                $convertedNum .= chr($num%$convertTo + 55);  
                            } else {
                                $convertedNum .= $num%$convertTo;
                            } 
                            $num = intval(($num - $num%$convertTo) / $convertTo);
                            if ($num == 0) {
                                $isConverted = TRUE;
                            }
                        }
                    echo '</table><br>';

                    echo "<table>";
                    echo "<tr>
                        <td>
                            $convertTo-ová
                        </td>
                        <td>
                            10-ová
                        </td>
                    </tr>";
                    for($i = 0; $i < $convertTo; $i++) {
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
                    echo '</div>';

                    echo 'Výsledné číslo jsou číslice zbytků odspoda nahodu:<br>';
                    echo strrev($convertedNum);
                } else {

                }
                          
            }

            function alert($msg) {
                echo "<script type='text/javascript'>alert('$msg');</script>";
            }
        ?>       
    </body>
</html>