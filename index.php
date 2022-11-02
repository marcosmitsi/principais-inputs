<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>02.06 - Servindo tegs para formulários</title>
    </head>
    <body>
        <main>
            <form method="get" action="">
                <fieldset>
                    <legend>Meu Formulário</legend>
                    <p>
                        Insira seu nome: <input type="text">
                    </p>
                    <p>
                        Insira seu E-mail: <input type="email">
                    </p>
                    <p>
                        Insira sua senha: <input type="password">
                    </p>
                    <p>
                        Insira seu sexo: <br>
                        <input type="radio" name="sexo" value="M">Masculino<br><!-- comment -->
                        <input type="radio" name="sexo" value="F">Feminino
                    </p>

                    <p>
                        Informe a tecnologia Proeferida<br><!-- comment -->
                        <input type="checkbox">HTML5<br>
                        <input type="checkbox">CSS3<br>
                        <input type="checkbox">PHP<br>
                        <input type="checkbox">jQuery<br>
                    </p>
                    <p>
                        Selecione um arquivo <input type="file">
                    </p>
                    <p>
                        Informe uma URL <input type="url">
                    </p>

                    <p>
                        Selecione um curso<br><!-- comment -->
                        <select>
                            <optgroup label="Curso Front End">
                                <option>HTML5 e CSS3 Essentials</option><!-- comment -->
                                <option>GIT HUB</option>
                            </optgroup>
                            <optgroup label="Curso Back ENd">
                                <option>jQuery Essentials</option>
                            </optgroup>
                        </select>
                    </p>
                     <p>
                        Range <input type="range">
                    </p>
                    <p>
                        Color <input type="color">
                    </p>
                    <p>
                        Data <input type="date">
                    </p>
                    
                    <p>
                        Time <input type="time">
                    </p>
                    <p>
                        Date e tempo <input type="datetime-local">
                    </p>
                    <p>
                        Mes <input type="month">
                    </p>
                    <p>
                        Fim de semana <input type="week">
                    </p>
                    <p>
                        
                        <button type="submit">Validar</button>
                        <button type="reset">limpar</button>
                    </p>
                </fieldset>
            </form>
        </main>
    </body>
</html>
