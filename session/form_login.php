<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Página de Login</title>
</head>
<body>
    
    <h1>Forneça seus dados de acesso</h1>
    <form method="post" action="acesso.php">
        <input type="text"
               name="usuario"
               id="usuario"
               placeholder="Informe usuário:"
        />
        
        <br/>
        <input type="password"
               name= "senha"
               id="senha"
               placeholder="Informe senha:"
        />
        
        <br/>
        <input type="submit"
               value="Acessar sistema"
        />       

    </form>
</body>
</html>