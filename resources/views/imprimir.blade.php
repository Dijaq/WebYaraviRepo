<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>Receipt example</title>
        <style type="text/css">
            * {
                font-size: 12px;
                font-family: 'Times New Roman';
            }

            td,
            th,
            tr,
            table {
                border-top: 1px solid black;
                border-collapse: collapse;
            }

            td.description,
            th.description {
                width: 75px;
                max-width: 75px;
            }

            td.quantity,
            th.quantity {
                width: 40px;
                max-width: 40px;
                word-break: break-all;
            }

            td.price,
            th.price {
                width: 40px;
                max-width: 40px;
                word-break: break-all;
            }

            .centered {
                text-align: center;
                align-content: center;
            }

            .ticket {
                width: 155px;
                max-width: 155px;
                height: 420px;
            }

            img {
                max-width: inherit;
                width: inherit;
            }

            @media print {
                .hidden-print,
                .hidden-print * {
                    display: none !important;
                }
            }
        </style>
    </head>
    <body>
        <div class="ticket">
            <!--<img src="./logo.png" alt="Logo">-->
            <img src="https://yt3.ggpht.com/-3BKTe8YFlbA/AAAAAAAAAAI/AAAAAAAAAAA/ad0jqQ4IkGE/" />
            <p class="centered">RECEIPT EXAMPLE
                <br>Address line 1
                <br>Address line 2</p>
            <table>
                <thead>
                    <tr>
                        <th class="quantity">Q.</th>
                        <th class="description">Description</th>
                        <th class="price">$$</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="quantity">1.00</td>
                        <td class="description">ARDUINO UNO R3</td>
                        <td class="price">$25.00</td>
                    </tr>
                    <tr>
                        <td class="quantity">2.00</td>
                        <td class="description">JAVASCRIPT BOOK</td>
                        <td class="price">$10.00</td>
                    </tr>
                    <tr>
                        <td class="quantity">1.00</td>
                        <td class="description">STICKER PACK</td>
                        <td class="price">$10.00</td>
                    </tr>
                    <tr>
                        <td class="quantity"></td>
                        <td class="description">TOTAL</td>
                        <td class="price">$55.00</td>
                    </tr>
                </tbody>
            </table>
            <p class="centered">Thanks for your purchase!
                <br>parzibyte.me/blog</p>
        </div>
        <button class="oculto-impresion" onclick="imprimir()">Imprimir</button>
        <script>
            function imprimir() {
              window.print();
        }
        </script>
        <!--<button id="btnPrint" class="hidden-print">Print</button>
        <script src="script.js">
            const $btnPrint = document.querySelector("#btnPrint");
            $btnPrint.addEventListener("click", () => {
                window.print();
            });
        </script>-->
    </body>
</html>

<!--<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css"> <script src="script.js"></script>
     <style type="text/css">
            * {
                font-size: 12px;
                font-family: 'Times New Roman';
            }

            td,
            th,
            tr,
            table {
                border-top: 1px solid black;
                border-collapse: collapse;
            }

            td.producto,
            th.producto {
                width: 75px;
                max-width: 75px;
            }

            td.cantidad,
            th.cantidad {
                width: 40px;
                max-width: 40px;
                word-break: break-all;
            }

            td.precio,
            th.precio {
                width: 40px;
                max-width: 40px;
                word-break: break-all;
            }

            .centrado {
                text-align: center;
                align-content: center;
            }

            .ticket {
                width: 155px;
                max-width: 155px;
            }

            img {
                max-width: inherit;
                width: inherit;
            }
        </style>
    </head>
    <body>
        <div class="ticket">
            <img
                src="https://yt3.ggpht.com/-3BKTe8YFlbA/AAAAAAAAAAI/AAAAAAAAAAA/ad0jqQ4IkGE/s900-c-k-no-mo-rj-c0xffffff/photo.jpg"
                alt="Logotipo">
            <p class="centrado">Parzibyte's blog
                <br>New New York
                <br>23/08/2017 08:22 a.m.</p>
            <table>
                <thead>
                    <tr>
                        <th class="cantidad">CANT</th>
                        <th class="producto">PRODUCTO</th>
                        <th class="precio">$$</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cantidad">1.00</td>
                        <td class="producto">CHEETOS VERDES 80 G</td>
                        <td class="precio">$8.50</td>
                    </tr>
                    <tr>
                        <td class="cantidad">2.00</td>
                        <td class="producto">KINDER DELICE</td>
                        <td class="precio">$10.00</td>
                    </tr>
                    <tr>
                        <td class="cantidad">1.00</td>
                        <td class="producto">COCA COLA 600 ML</td>
                        <td class="precio">$10.00</td>
                    </tr>
                    <tr>
                        <td class="cantidad"></td>
                        <td class="producto">TOTAL</td>
                        <td class="precio">$28.50</td>
                    </tr>
                </tbody>
            </table>
            <p class="centrado">¡GRACIAS POR SU COMPRA!
                <br>parzibyte.me</p>
        </div>


        <button class="oculto-impresion" onclick="imprimir()">Imprimir</button>
    </body>
</html>
<script>
    
    function imprimir() {
      window.print();
}
</script>-->