<?php  include("..\..\dbconnect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Stagiaires</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <linl rel="stylesheet" href="../../https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css">
<script type="text/javascript" src="script.js"> </script>

  
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
   
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
   

  

      <!-- Notifications Dropdown Menu -->
  
   
     
     
        <a class="nav-item" data-toggle="dropdown" href="#">
        <div class="user-panel " style="margin-top:-15%;">
        <div class="image">
          <img src="..\..\dist\img\avatar2.png" class="img-circle elevation-" alt="User Image">
         
        </div>
        </div>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <div class="modal-body">
            Sélectionnez « Déconnexion » ci-dessous si vous êtes prêt à mettre fin à votre session en cours.
          </div>
          <div class="dropdown-divider"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="deconnexion.php">
            <span><button type="button"<i class="btn btn-danger"class="fa fa-power-off me-1 ms-1"></i>Déconnexion </button></span>
            </a>

          </div>
</div>
          </ul>
      </li>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../admin/alten.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php" class="d-block" style="color:White;">Alten Fes</a>
        </div>
      </div>



    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../admin/images.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" style="color:white;">
        <?php
                    session_start();
                    $user = $_SESSION['username'];
                    $role=$_SESSION['role'];
                    // afficher un message
                    echo  nl2br("$user\n");
                    echo nl2br("$role\n");
                
      ?>
    
 
        </div>
      </div>

 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Stage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../stagiaire/data.php" class="nav-link active ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stagiaires</p>
                </a>
              </li>
</ul>
              
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Affectation_stagiaires/data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Affectation stagiaire</p>
                </a>
              </li>
</ul>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Affectation_stagiaires/data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Affectation en binome</p>
                </a>
              </li>
            
              <li class="nav-item">
            </ul>

              </li>
            
              </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Interfaces
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../admin/users.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestion des comptes</p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="../encadrent/general2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestion des encadrants</p>
                </a>
              </li>
            
                  <li class="nav-item">
                    <a href="../taches/general.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Gestion des Taches</p>
                    </a>
                  </li>
                
              
                 
                  <li class="nav-item">
                    <a href="../Attestation/ass2.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Attestations de Stage</p>
                    </a>
                  </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      
        <div class="row">
            <div class="col-12">
            <div class="container" md-4>
            <div class="card card"> 
              <div class="card-header">
               
                <div class="panel panel-primary">
                   <div class="panel-heading mb-5" align="center" style="font-size:20px;"> Modifier le stagiaire</div>
               <div class="panel-body">
                 <form method="post" action="code.php" enctype="multipart/form-data" id="quickForm">
                <input type="hidden" name="id_sta" value="<?=$_GET['id_sta']?>">

                   <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label for="nom" class="control-label"> Nom </label>
             
                        <input required type="text" name="nom" id="nom" class="form-control" required>
                    </div>

                  <div class="form-group">
                    <label for="prenom" class="control-label "> Prenom </label>
                  
                        <input required type="text" name="prenom" id="prenom" class="form-control "required>
                  
                  </div>

            
                  <div class="form-group">
                    <label for="cin" class="control-label "> CIN </label>
                  
                        <input required type="text" name="cin" id="cin" class="form-control " required="veuiller le cin">
                 
                    </div>
                    
                  <div class="form-group">
                 
                  <label for="email" class="control-label "> Email </label>
                  
                        <input  type="email" name="email" id="email" class="form-control " required>
                  
                </div>
                    </div>
                    <div class="col-sm-6">
             
             
                    <div class="form-group">
               <label for="phone" class="control-label "> TEL </label>
                  
                        <input type="tel" name="phone" id="phone" class="form-control" required>
                      </div>
             
           
                  <div class="form-group">
                    <label for="date" class="control-label col-sm-6"> DATE de NAISSANCE </label>
                  
                        <input required type="date" name="date" id="date" class="form-control" required>
           
                  </div>     

              
        
                  <div class="form-group">
                    <label for="ville" class="control-label"> VILLE </label>
                  
                        <input required type="text" name="ville" id="ville" class="form-control " required>
             

                  </div>
  

          <div class="form-group">
          

                    <label for="filliere" class="control-label"> Filliere </label>
                  
                       <select name="filliere" class="form-control" id="filliere"  required><option selected disabled>Choisir le filliere</option>
                                      <option value="developpement web et mobile">developpement web et mobile</option>
                                      <option value="Reseaux & telecoms">Reseaux & telecoms</option>
                                      <option value="Management" >Management</option>
                                      <option value="autres">Autres</option>
                       </select>
                    </div>
             
        
                    </div>
                   </div>
                   
             

          
                                

       
               <div class="form-group my-2">
                   
                      <button  class="btn btn-info" type="submit" style="float:left;">Enregistrer</button>
                </div>

                <div class="form-group my-2">
                      <input type="button" value="Retour" class="btn btn-success"  style="float:right;"onclick="history.go(-1)">
                      </div>
             </div>
        </div>
     </div>
             </form>
         
             </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<!-- Page specific script -->



<script>
$(function () {
  $.validator.addMethod(
            "regex",
            function(value, element, regexp) {
                var re = new RegExp(regexp);
                return this.optional(element) || re.test(value);
            },
            "Please check your input."
        );
  $('#quickForm').validate({
    rules: {
      nom: {
        required: true,
        regex:"^[A-Za-z.\\s]{1,20}$",
      },
      prenom: {
        required: true,
        minlength: 5
      },
      phone :{
        required: true,
        regex: "^[0-9]{10}$",
      },
      email :{
        required: true,
        regex:"[a-zA.-Z]+\@[a-zA-Z]+\.[a-z]+",
      },
      cin: {
          required: true,
          regex:"^[A-Z]{0,2}[0-9]{6}$",
      },
      ville:{

          required: true,
          regex:"^[A-Za-z.\\s]{1,20}$",
      },
      filliere :{
        required: true,

      },
      date :{
        required:true,
      },
      terms: {
        required: true
      },
    },
    messages: {
      nom: {
        required: "Veuillez saisir un nom",
      },
      prenom: {
        required: "Veuillez saisir un prenom",
        minlength: "Your password must be at least 5 characters long"
      },
      cin:{
        required: "Veuillez saisir un cin",
      },
      email:{
          required:"Veuillez saisir un email",
      },
      phone :{
        required: "Veuillez saisir un telephone",


      },
      ville: {
          required:"le champs est obligatoire",
      },
      filliere :{

        required: "Le champs est obligatoire",
      },  
      date :{
        required: "Le champs est obligatoire",
      },
     
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>

</body>
</html>
