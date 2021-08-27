<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Nuevo zapato</title>
    </head>
    <body>
        <div id="container">
            <h1>Nuevo zapato</h1>
            <form method="POST" action="?method=save" enctype="multipart/form-data">
                <p>Nombre<input type="text" name="name"/></p>
                <p>Marca<input type="text" name="brand"/></p>
                <p>Genero
                    <select name="gender">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="unisex">Unisex</option>
                    </select>
                </p>  
                <p>Estilo
                    <select name="style">
                        <option value="deportivo">Deportivo</option>
                        <option value="casual">Casual</option>
                        <option value="formal">Formal</option>
                    </select> 
                </p>
                <p>Color<input type="text" name="color"/></p>
                <p>Tamaño<input type="text" name="size"/></p>
                <p>Unidades<input type="text" name="units"/></p>
                <p>Precio<input type="text" name="price"/></P>
                <p>Fecha<input type="date" name="date"/></p>
                <p>Imagen<input type="file" name="image"/></p>

                <input type="submit" name="" value="Guardar"/>
            </form>
        </div>
    </body>
</html>