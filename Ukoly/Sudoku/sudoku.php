<!DOCTYPE html>

<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <title>Sudoku</title>
        <style>
            .squares {
                display: flex;
                flex-direction: row;
            }

            .block {
                display: inline-flex;
                flex-direction: column;
                border: solid coral 3px;
                border-collapse: collapse;
            }

            .row-blocks {
                display: flex;
                flex-direction: row;
            }

            input {
                margin: 0;
                height: 1.5rem;
                width: 1.5rem;
                text-align: right;
                font-size: 1rem;
            }

            input:focus {
                outline: none;
            }

            input:hover {
                cursor: default;
            }

        </style>
    </head>
    <body>
        <form>
            <div class="row-blocks">
                <div class="block">
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                </div>
                <div class="block">
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                </div>
                <div class="block">
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                </div>
            </div>
            <div class="row-blocks">
                <div class="block">
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                </div>
                <div class="block">
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                </div>
                <div class="block">
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                </div>
            </div>
            <div class="row-blocks">
                <div class="block">
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                </div>
                <div class="block">
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                </div>
                <div class="block">
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                    <div class="squares">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                        <input type="number" min="1" max="9" step="1">
                    </div>
                </div>
            </div>
        </form>

            <?php
                
            ?>

    </body>
</html>