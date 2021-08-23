<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="#"/>
    </head>
    <body>
        <div class="container">
            <h2>Lista de zapatos</h2>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Género</th>
                    <th>Estilo</th>
                    <th>Color</th>
                    <th>Tamaño</th>
                    <th>Unidades</th>
                    <th>Precio</th>
                    <th>Fecha de registro</th>
                    <th>Imagén</th>
                </tr>
                <?php
                    foreach($this->MODEL->list() as $row){
                        echo '<tr>';
                        echo '<td>'.$row->id.'</td>';
                        echo '<td>'.$row->name.'</td>';
                        echo '<td>'.$row->brand.'</td>';
                        echo '<td>'.$row->gender.'</td>';
                        echo '<td>'.$row->style.'</td>';
                        echo '<td>'.$row->color.'</td>';
                        echo '<td>'.$row->size.'</td>';
                        echo '<td>'.$row->units.'</td>';
                        echo '<td>'.$row->price.'</td>';
                        echo '<td>'.$row->datetime.'</td>';
                        //echo '<td>'.$row->image.'</td>';
                        echo '</tr>';
                    }
                ?>
            </table>
            <a href="?method=create">Nuevo</a>
        </div>
    </body>
</html>