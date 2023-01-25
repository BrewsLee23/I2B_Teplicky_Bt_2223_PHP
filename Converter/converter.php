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
            <label for="ConvertTo">Soustava</label>
            <input type="number" name="convert" id="numberId">
            <button type="submit">Odeslat</button>
        </form>
        <?php
            $num = $_GET['num'];
            $convert = $_GET['convert'];

            echo $num;
            echo $convert;

        ?>
    </body>
</html>