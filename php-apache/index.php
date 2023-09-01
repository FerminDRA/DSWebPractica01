<html>
<head>
    <meta charset="UTF-8">
    <title>Nuevo Administrador</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="connection.php" method="post">
    <table id="tabGen">
        <thead>
            <tr>
                <th>Nueva persona</th>
            </tr>
        </thead>
        <tr>
            <td>
                <table id="tab">
                    <tr>
                        <td>
                            Clave de usuario: 
                            <input name="clave" type="number">
                        </td>
                        
                    </tr>
                    <tr>
                    <tr>
                        <td>
                            Nombre(s): 
                            <input name="nombre" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Direccion: 
                            <input name="direccion" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Telefono: 
                            <input name="telefono" type="text">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br>
    <table id="tab1">
        <tr>
            <td>
                <button type="submit">Guardar</button>
                <button type="reset">Cancelar</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>