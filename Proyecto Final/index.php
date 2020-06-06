<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

    <link rel="stylesheet" href="./css/morris.css" />
    <script src="./script/morris.min.js" charset="utf-8"></script>

    <link rel="stylesheet" href="./css/bootstrap.min.css" />

    <link rel="stylesheet" href="./css/estilos.css" />
    <title>Tabla televisores</title>
</head>
</head>

<body>

    <?php
$dat =  "datos.csv";  
$archivo = fopen($dat, "r");
$a = fgetcsv($archivo, 0, ',', '"', '"');
$A = $a[0];
$B = $a[1];
$C = $a[2];
$D = $a[3];
$E = $a[4];
$F = $a[5];
$b = 0 ;
$sum = ($B * 1) + ($C * 2) + ($D * 3 ) + ($E *4 ) + ($F * 5) ;
$prom = $sum / 25000 ;
print $prom ;
    echo("<div class=container>
            <h1 class=titulo>Número de televisores por vivienda 
            </h1>
            <div class=table-responsive>
                <table class=table table-hover>
                    <thead class=thead-dark>
                        <tr>
                            <th>Numero de televisores</th>
                            <th>0</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Cantidad</th>
                            <th>".$A."</th>
                            <th>".$B."</th>
                            <th>".$C."</th>
                            <th>".$D."</th>
                            <th>".$E."</th>
                            <th>".$F."</th>
                        </tr>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Promedio</th>
                            <th>".$prom ."</th>
                        </tr>
                    </tfoot>
                    
                </table>
            </div>
        </div>");
?>
    <div class=container>
        <h1>Graficas</h1>
        <hr>
        <div>
            <div class="col-md6">
                <h2></h2>
                <hr>
                <div id="lala"></div>
            </div>
        </div>
    </div>
    <script>
    // Use Morris.Bar
    Morris.Bar({
        element: 'lala',
        data: [{
                x: '0',
                y: <?php echo($A) ?>
            },
            {
                x: '1',
                y: <?php echo($B) ?>
            },
            {
                x: '2',
                y: <?php echo($C) ?>
            },
            {
                x: '3',
                y: <?php echo($D) ?>
            },
            {
                x: '4',
                y: <?php echo($E) ?>
            },
            {
                x: '5',
                y: <?php echo($F) ?>
            },
        ],
        xkey: 'x',
        ykeys: ['y'],
        labels: ['Y'],
        barColors: function(row, series, type) {
            if (type === 'bar') {
                var red = Math.ceil(255 * row.y / this.ymax);
                return 'rgb(' + red + ',0,0)';
            } else {
                return '#000';
            }
        }
    });
    </script>
    <!--<caption>Número de televisores/pantallas que hay en cada vivienda en una determinada ciudad </caption> -->
</body>

</html>