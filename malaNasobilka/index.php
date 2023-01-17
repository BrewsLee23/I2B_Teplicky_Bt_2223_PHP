<!DOCTYPE html>

<html lang="cs">
  <head>
    <meta charset="UTF-8"/>
    <title>Malá násobilka</title>
  </head>
  <body>
    <table>
      <tr>
        <?php
          for ($i = 0; $i < 11; $i++) {
            ?>
              <td class="light-blue">
                <?php
                  echo $i;
                ?>
              </td>
            <?php
          }
          ?>
      </tr>
        <?php
          for ($i = 1; $i <= 10; $i++) {
            ?>
            <tr>
              <td class="light-blue">
                <?php
                  echo $i;
                ?>
              </td>
            <?php
            for ($j = 1; $j <= 10; $j++) {
              ?>
                <td>
                  <?php
                    echo $i * $j;
                  ?>
                </td>
              <?php
            }
            ?>
            </tr>
            <?php
          }
        ?>
    </table>

    <style>
      table {
        border-collapse: collapse;
        text-align: center;
      }

      td, th {
        border: 1px solid black;
        padding: 8px;
      }

      .light-blue {
        background-color: lightblue;
        font-weight: bold;
      }
    </style>
  </body>
</html>