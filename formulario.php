
<!doctype htmal>

<html>
    <head>
        <title> Meu Primeiro Formulario</title>
        <meta charset="UTF-8" >
    </head>

    <body>
        <div align="center" >
            <form method="POST" action="requisitos.php">
                <p>
                <h2>Meu Primeiro Formulario</h2>             
                </p>

                <p>
                    <label><h3>Cadastro dos Dados</h3></label> 
                </p>
                <fieldset>
                    <p>
                        <label>Nome:</label>
                        <input type="text" name="name" value="" riquired="true" />
                    </p>

                    <p>
                        <label>Idade:</label>
                        <input type="text" name="age"  value="" riquired="true" />
                    </p>     
                    <p>
                        <label>Peso:</label>
                        <input type="number" name="peso"  value="" step="0.01" riquired="true" />
                    <p/>
                    <p>
                        <label>Telefone</label> 
                        <input type="number" name="phone"  value="" riquired="true"/>
                    </p>
                    <p>
                        <label>Endereço</label>
                        <input type="text" name="address" value="" riquired="true"/>
                    </p>
                    <p>
                        <input type="submit" value="Enviar"/>
                    </p>

                </fieldset>
            </form>
        </div>
    </body>

</html>
