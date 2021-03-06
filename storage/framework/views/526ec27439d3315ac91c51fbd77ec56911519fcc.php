<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/style.css" rel="stylesheet">
       
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">


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
                        <span><a href="/adicionar-dentista" class="btn btn-outline-secondary" >Adicionar D.</a></span>
                         
                    
        
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
                                        <h6 class="m-0 font-weight-bold text-primary">Lista Dentistas</h6>
                                    </div>
                                        <div class="card-body">
                                           
                                            <!--Espaço para a listagem de Titular-->
                                            <table id="example" class="table table-striped responsive nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Nome</th>
                                                        <th>Email</th>
                                                        <th>CRO</th>
                                                        <th>CRO UF</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $dentistas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dentista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td> <?php echo e($dentista->name); ?></td>
                                                        <td> <?php echo e($dentista->email); ?></td>
                                                        <td> <?php echo e($dentista->cro); ?></td>
                                                        <td style="text-transform: uppercase;"> <?php echo e($dentista->cro_uf); ?></td>
                                                        <td> <a href="/mostra-especialidadesAtb/<?php echo e($dentista->id); ?>" style="color: blue;"class='btn btn-sucess btn-xs'><span ></span> Especialidades</a></td>
                                                        <td> <a href="/excluir-dentistas/<?php echo e($dentista->id); ?>" class="btn btn-danger" ><span class="glyphicon glyphicon-remove"></span> excluir</a></td>
                                                        <td> <a href="/editar-dentistas/<?php echo e($dentista->id); ?>" class="btn btn-primary" ><span class="glyphicon glyphicon-remove"></span> Editar</a></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>       
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
   
    <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"> </script>

    <script>
        $(document).ready( function () {
            $('#example').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json" //definir linguagem portugues-brasil
                },
                "lengthMenu": [[5, -1], [5]],     //limitar o numero de entradas de acordo com o soliticado
                responsive: true,
                 
            });
        });

        var table = $('#example').DataTable;

        table.on( 'responsive-resize', function ( e, datatable, columns ) {
            var count = columns.reduce( function (a,b) {
                return b === false ? a+1 : a;
            }, 0 );
        
            console.log( count +' column(s) are hidden' );
        } );
                
        
           
    </script>

</body><?php /**PATH C:\xampp\htdocs\processoseletivo2022_rodrigo_sousapereira\resources\views/welcome.blade.php ENDPATH**/ ?>