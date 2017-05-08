<html>
    <head>
        <title>Questionários</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="controller/questao.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1> Cadastro de Questões</h1>
                <hr>
            </div>

            <div class="row">
                <form class="form-group"> 


                    <div class="row">
                        <div class="form-group col-lg-4" id="curso">
                            
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="aula">Selecione a Aula:</label>
                            <select class="form-control" id="aula" name="aula">
                                <option> </option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group  col-lg-8">
                        <label for="questao">Questão:</label>
                        <div class="row">
                            <textarea class="form-control" name="questao" ></textarea>
                        </div>
                    </br>
                        <div class="form-group radio">
                        
                        <div class="row">
                            <div class="col-sm-1">
                                <input type="radio"  name="radios" id="radios-0" class="form-control"/>
                            </div>
                            <div class="col-lg-11">
                                <textarea class="form-control" name="resp1" ></textarea>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-sm-1">
                                <input type="radio" name="radios" id="radios-1" class="form-control"/>
                            </div>
                            <div class="col-lg-11">
                                <textarea class="form-control" name="resp2" ></textarea>
                            </div>
                        </div>
                            </br>
                        <div class="row">
                            <div class="col-sm-1">
                                <input type="radio" name="radios" id="radios-2" class="form-control"/>
                            </div>
                            <div class="col-lg-11">
                                <textarea class="form-control" name="resp3" ></textarea>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-sm-1">
                                <input type="radio" name="radios" id="radios-3" class="form-control"/>
                            </div>
                            <div class="col-lg-11">
                                <textarea class="form-control" name="resp4" ></textarea>
                            </div>
                        </div>
                        </br>
                        </div>
                        <div class="form-group" align="center">
                            <button type="submit" class="btn btn-lg btn-success"> 
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar dados
                            </button>
                        </div>

                </form>
            </div>
        </div>
        
            <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>