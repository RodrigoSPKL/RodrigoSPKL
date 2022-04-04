<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Custom styles for this template-->
        <link href="css/style.css" rel="stylesheet">
 

       
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">

        <title>CRUD Dentistas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>

<body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#7093DB; !Important;">

                <!-- Sidebar - Brand -->
                <a data-toggle="tooltip" data-placement="right" title="Sistema Integrado de Proteção de Dados" class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                    <div class="sidebar-brand-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Uni<sup>Dental</sup></div>
                </a>
                <li class='nav-item '>
                        <a class='nav-link' href="/adicionar-dentista">
                            <span class ="">Adicionar Dentista</span></a>
                </li>
                <li class='nav-item '>
                    <a class='nav-link' href="/cadastrar-especialidade">
                        <span class ="">Adicionar Especialidade</span></a>
    
                      
                </li>
                <li class='nav-item '>
                    <a class='nav-link' href="/mostra-especialidades">
                        <span class ="">Mostrar Especialidades</span></a>
    
                        
                </li>
        
            
                <!-- Divider -->
                <hr class="sidebar-divider">
    
            </ul>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
        
                <!-- Main Content -->
                <div id="content">
        
                    <!-- Topbar Navbar -->
                        <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <span><a href="/" class="btn btn-outline-secondary" >Listar</a></span>
                         
                    
        
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
        
                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                            <div class="topbar-divider d-none d-sm-block"></div>
        
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled="disabled">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Rodrigo</span>
                                    <img class="img-profile rounded-circle"
                                        src="img/undraw_profile.svg">
                                </a>
                                
        
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
        
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
        
                        </ul>
        
                    </nav>
                    <div class="container-fluid">
                            <div class="row">
                                <!-- Card do Form -->
                                <div class="card shadow mb-1 col-sm-12">
                                    <div class="card-header py-2 px-8">
                                        <h6 class="m-0 font-weight-bold text-primary">Adicionar Dentista</h6>
                                    </div>
                                        <div class="card-body">
                                            <!--Espaço para a listagem de Titular-->
                                         
                                        <form enctype="multipart/form-data" class="user" method="POST" action="/cadastrar-dentista">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                    
                                                    <input class="btn btn-primary btn-lg" type="submit" name="" id = "salvar" value="Salvar">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="nome">Nome <span data-toggle='tooltip' title="Campo obrigatório.">*</span></label>
                                                    <input type="text" class="form-control" id="nome" name="nome" required="" >
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="email">Email <span data-toggle='tooltip' title="Campo obrigatório.">*</span></label>
                                                    <input type="email" class="form-control" id="email" name="email" required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-0 mb-sm-2">                                         
                                                    <label for="cpf">CRO</label>
                                                    <input type="text" class="form-control" name="cro" id="cro" maxlength="11" required=""/>
                                                </div>
                                                <div class="col-sm-6 mb-0 mb-sm-2">                                         
                                                    <label for="cpf">CRO UF</label>
                                                    <input type="text" class="form-control" name="cro_uf" id="cro_uf" maxlength="2" required="" style="text-transform: uppercase;"/>
                                                </div>
                                            </div>
                                            
                                        </form>     
            
                                        </div>
                                </div>
                            </div>                   
                        </div>
                    </div>
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Rodrigo TESTE UniDENTAL 2022</span>
                            </div>
                        </div>
                </div> 
                    <!-- /.container-fluid -->

            </div>
               
                
            
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


        <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"> </script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"> </script>
    <script>
        $(document).ready( function () {
            $('#example').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json" //definir linguagem portugues-brasil
                },
                "lengthMenu": [[5, -1], [5]],     //limitar o numero de entradas de acordo com o soliticado
            });
        });
    </script>

</body>

<?php /**PATH C:\xampp\htdocs\processoseletivo2022_rodrigo_sousapereira\resources\views/addDentista.blade.php ENDPATH**/ ?>