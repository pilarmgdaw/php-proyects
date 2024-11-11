<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Coches</title>
    <style>
        th {
            width: 8rem;
            text-align: left;
            border-bottom: 1px solid black;
        }

        td {
            width: 8rem;
        }
    </style>
</head>
<body>
    <h1>Ejemplo 5: Listado de coches</h1>
    <table>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Color</th>
            <th>Propietario</th>
        </tr>

        <!-- Iterar sobre $rowset, que es el conjunto de coches -->
        <?php foreach ($rowset as $row): ?>
            <tr>
                <!-- Acceder a las propiedades del objeto coche -->
                 
                <td><?php echo $row->getMarca(); ?></td>
                <td><?php echo $row->getModelo(); ?></td>
                <td><?php echo $row->getColor(); ?></td>
                <td><?php echo $row->getPropietario(); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>