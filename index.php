<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
    
    <title>Home - Churrasco App</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light  navbar-default">
        <a class="navbar-brand app" href="index.php">Churrasco App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
            </li>
          </ul>
        </div>
      </nav>
        <div id="main" class="container-fluid">
            <div id="top" class="row" style="justify-content: center;">
                <div class="col-md-3">
                    <h2>Itens</h2>
                </div>
             
                
             
                <div class="col-md-3">
                    <a class="btn btn-primary pull-right h2" href="add/add.html">Novo Item</a>
                </div>
            </div> <!-- /#top -->
        
            <hr />
            <div id="list" class="row">
                <div class="table-responsive col-md-12">
                    <table class="table table-striped" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome do Funcionário</th>
                                <th>Bebida do Funcionário</th>
                                <th>Bebida do Convidado</th>
                                <th class="actions">Ações</th>
                             </tr>
                        </thead>
                        <tbody>
             
                            <tr>
                                <td>1001</td>
                                <td>Moyses Levi Zalewski Pietsch dos Santos</td>
                                <td>Sim</td>
                                <td>Não</td>
                                <td class="actions">
                                    <a class="btn btn-warning btn-xs" href="edit/edit.html">Editar</a>
                                    <a class="btn btn-danger btn-xs" id="deletebtn" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                                </td>
                            </tr>
             
                        </tbody>
                     </table>
                 </div>
            </div> <!-- /#list -->
        
            <div id="bottom" class="row" style="justify-content: center;">
                <div class="col-md-12">
         
                    <ul class="pagination">
                        <li class="disabled"><a>&lt; Anterior</a></li>
                        <li class="disabled"><a>1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
                    </ul><!-- /.pagination -->
             
                </div>
            </div> <!-- /#bottom -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      $('#deletebtn').on('click', function(){
          alert('Deleted');
      });
    });


    </script>
  </body>
</html>