<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
    <style>
        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: yellow;
        }

        .field{
            border: 1px solid #fff;
            padding: 30px;
            align-items: center;
            margin: 20px;
            display: inline;
            border-radius: 36px 35px 35px 10px;
            -webkit-border-radius: 36px 35px 35px 10px;
            -moz-border-radius: 36px 35px 35px 10px;
            background-image:; linear-gradient(yellow,gray);
        }
        .legend {
            color: #fff;
            text-align: center;
            display: flex;
        }
        .cadastrar {
            text-align: center;
            justify-content: center;
            align-items: center;
            margin: 0;
            display: flex;
        }

        .inputUser {
            border-radius: 10px;
            ;
        }

        .inputtext{
            color: #fff;
        }

        .submit-button {
            justify-content: center;
            border-radius: 15px;
            display: flex;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="?page=salvar" method="POST">
        <div class="box">
        <fieldset class="field">Da Área RJ             <br> <br>  <label class="cadastrar">Cadastre-se:</label><br>
                    <br>
                        <label for="nome" class="inputUser"></label>Nome</label>
                            <br>
                            <input type="text"  name="nome" id="nome" class="form-control" required/>  <br>
                    <label for="nome" class="inputtext">Sobrenome</label>
                           <br>               <input type="text"  name="sobrenome" id="nome" class="form-control" required/>
                        <br>
                        <br>
                        <label for="email" class="inputtext">email</label>
                            <br>
                            <input type="text"  name="email" id="email" class="form-control" required/>  <br>
                      <label for="nome" class="inputtext">Telefone</label>
                           <br>
                          <input type="text"  name="telefone" id="nome" class="form-control" required/>
                            <br>
                            <br>
                        <label for="data_nasc" class="inputtext">Data de Nascimento</label>
                            <br>    
                        <input type="date"  name="data_nasc" id="data_nasc" class="form-control" required/>
                         <br>
                         <br>
                            <p>
                            <label for=estado>Estado</label>
                            <select name=estado>
                            <option value=ac>Acre</option>
                            <option value=al>Alagoas</option>
                            <option value=ap>Amapá</option>
                            <option value=am>Amazonas</option>
                            <option value=ba>Bahia</option>
                            <option value=ce>Ceará</option>
                            <option value=df>Distrito Federal</option>
                            <option value=es>Espírito Santo</option>
                            <option value=go>Goiás</option>
                            <option value=ma>Maranhão</option>
                            <option value=mt>Mato Grosso</option>
                            <option value=ms>Mato Grosso do Sul</option>
                            <option value=mg>Minas Gerais</option>
                            <option value=pa>Pará</option>
                            <option value=pb>Paraíba</option>
                            <option value=pr>Paraná</option>
                            <option value=pe>Pernambuco</option>
                            <option value=pi>Piauí</option>
                            <option value=rj>Rio de Janeiro</option>
                            <option value=rn>Rio Grande do Norte</option>
                            <option value=rs>Rio Grande do Sul</option>
                            <option value=ro>Rondônia</option>
                            <option value=rr>Roraima</option>
                            <option value=sc>Santa Catarina</option>
                            <option value=sp>São Paulo</option>
                            <option value=se>Sergipe</option>
                            <option value=to>Tocantins</option>
                            </select>
                            </p>
                            <br>
                            <br>
                            <input type="submit" name="submit" id="submit" class="submit-button"/>
            
        </fieldset>
        </div>
    </form>
<?php
            include('config.php');
            switch(@$_REQUEST["page"]){
                case "novo":
                    include("novo-usuario.php");
            break;
                case "listar":
                    include("listar-usuarios.php");
            break;
                case "salvar":
                    include("salvar-usuario.php");
            break;
                default:
                    print "<h1>Bem Vindos</h1>";

    }

?>
</body>
</html>
