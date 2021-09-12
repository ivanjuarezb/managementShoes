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
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                <?php
                    foreach($this->MODEL->list() as $shoe){
                        echo '<tr>';
                        echo '<td>'.$shoe->id.'</td>';
                        echo '<td>'.$shoe->name.'</td>';
                        echo '<td>'.$shoe->brand.'</td>';
                        echo '<td>'.$shoe->gender.'</td>';
                        echo '<td>'.$shoe->style.'</td>';
                        echo '<td>'.$shoe->color.'</td>';
                        echo '<td>'.$shoe->size.'</td>';
                        echo '<td>'.$shoe->units.'</td>';
                        echo '<td>'.$shoe->price.'</td>';
                        echo '<td>'.$shoe->datetime.'</td>';
                        echo '<td><img src="'.'resources/images/'.$shoe->image.'"/></td>';
                        echo '<td><a href="?method=update&id='.$shoe->id.'">Editar</td>';
                        echo '<td><a href="?method=delete&id='.$shoe->id.'&nameImage='.$shoe->image.'">Eliminar</td>';
                        echo '</tr>';
                    }
                ?>
            </table>
            <a href="?method=create">Nuevo</a>
        </div>
    </body>
</html>