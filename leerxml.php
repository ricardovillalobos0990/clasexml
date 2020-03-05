<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<article>
<section>
		<h1>  CD Disponibles</h1>
		<table>

			<th>Id</th>
			<th>Autor</th>
			<th>Pais</th>
			<th>Precio</th>
			<th>Año</th>

			<?php
            //$xml = simplexml_load_file("https://adsitarde.000webhostapp.com/cd.xml");
            $xml = simplexml_load_file("cd.xml");

           
            foreach ($xml->CD as $cd) {
                echo "<tr>";
                echo "<td>";
                echo $cd->TITULO;
                echo "</td>";
                echo "<td>";
                echo $cd->ARTISTA;
                echo "</td>";
                echo "<td>";
                echo $cd->ORIGEN;
                echo "</td>";
                echo "<td>";
                echo $cd->PRECIO;
                echo "</td>";
                echo "<td>";
                echo $cd->ANO;
                echo "</td>";


                echo "</tr>";
            }

            ?>

		</table>

	</section>
    </article>
    
</body>
</html>