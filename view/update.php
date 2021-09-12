<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Editar zapato</title>
    </head>
    <body>
        <div id="container">
            <h1>Editar zapato</h1>
            <form method="POST" action="?method=save&update=true&id=<?php echo $shoe->id; ?>" enctype="multipart/form-data">
                <p>Nombre<input type="text" name="name" value="<?php echo $shoe->name; ?>"/></p>
                <p>Marca<input type="text" name="brand" value="<?php echo $shoe->brand ?>"/></p>
                <p>Genero
                    <select name="gender">
                        <option value="masculino" <?php if($shoe->gender == 'masculino'){echo 'selected';}?>>Masculino</option>
                        <option value="femenino" <?php if($shoe->gender == 'femenino'){echo 'selected';}?>>Femenino</option>
                        <option value="unisex" <?php if($shoe->gender == 'uninex'){echo 'selected';}?>>Unisex</option>
                    </select>
                </p>  
                <p>Estilo
                    <select name="style">
                        <option value="deportivo" <?php if($shoe->style == 'deportivo'){echo 'selected';}?>>Deportivo</option>
                        <option value="casual" <?php if($shoe->style == 'casual'){echo 'selected';}?>>Casual</option>
                        <option value="formal" <?php if($shoe->style == 'formal'){echo 'selected';}?>>Formal</option>
                    </select> 
                </p>
                <p>Color<input type="text" name="color" value="<?php echo $shoe->color ?>"/></p>
                <p>Tamaño<input type="text" name="size" value="<?php echo $shoe->size ?>"/></p>
                <p>Unidades<input type="text" name="units" value="<?php echo $shoe->units ?>"/></p>
                <p>Precio<input type="text" name="price" value="<?php echo $shoe->price ?>"/></P>

                <input type="submit" name="update" value="Guardar"/>
            </form>
        </div>
    </body>
</html>