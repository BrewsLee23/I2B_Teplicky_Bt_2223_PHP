<!DOCTYPE html>

<html lang="cs">
  <head>
    <meta charset="UTF-8"/>
    <title>Malá násobilka</title>
  </head>
  <body>
    <table>
      <?php
        $rows = 10;
        $cols = 10;

        for ($i = 0; $i <= $rows; $i++) {
          echo '<tr>';
            for ($j = 0; $j <= $cols; $j++) {
              if ($i == 0) {
                echo "<td>$j</td>";
              } elseif ($j == 0) {
                  echo "<td>$i</td>";
              } else
                  echo sprintf("<td>%d</td>", $i * $j);
            }
          echo '</tr>';
        }
      ?>
    </table>
        <style>
          table {
            border-collapse: collapse;
            text-align: center;
          }

          td {
            border: 1px solid black;
            padding: 8px;
          }

          tr :first-child, tr:first-child {
              background: #10FE10;
          }
        </style>
  </body>
</html>