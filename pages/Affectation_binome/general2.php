
<?php  include("..\..\dbconnect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>affectation en bionme</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <lin rel="stylesheet" type="../../css/bootstrap.css">
</head>
<body class="hold-transition sidebar-mini">
</head>
<body class="hold-transition sidebar-mini">
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
   


  
      <!-- ProfileCOMPTE -->
      <li class="nav-item dropdown">
    
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
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
            <a href="../admin/deconnexion.php">
            <span><button type="button"<i class="btn btn-danger"class="fa fa-power-off me-1 ms-1"></i>Déconnexion </button></span>
            </a>

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

      <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../admin/images.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" style="color:white;">
        <?php
                    session_start();
                    $user = $_SESSION['username'];
                    $role=$_SESSION['role'];
                    //afficher le message
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
                <a href="../stagiaire/data.php" class="nav-link ">
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
                <a href="../Affectation_binome/general2.php" class="nav-link active">
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
                  <p>Gestion des Encadrants</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Taches/general.php" class="nav-link " >
                  <i class="far fa-circle nav-icon"></i>
                  <p> Gestions des Taches</p>
                </a>
              </li>
      
              
              
                  <li class="nav-item">
                    <a href="../Attestation/ass2.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Attestations </p>
                    </a>
                  </li>
            </ul>
          </li>

    
   
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tables</h1>
          </div>          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Affectation en binôme</h3>  
                <button class="btn btn-success" style="float:right;" type="button" data-toggle="modal" data-target="#exampleModalCenter">Affecter le binôme+</button>
                </div>
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Affectation en binôme</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="ajouter_affecter2.php" enctype="multipart/form-data" id="quickForm">
                    <div class="modal-body">
                              
                     <div class="row">
                       <div class="col-sm-6">
                         <div class="form-group">
                            
                            <label> Departement</label>
                            <?php

                                    $query="SELECT * FROM encdrants";
                                    $query_run=mysqli_query($conn,$query);
                                    if(mysqli_num_rows($query_run)>0)
                                    {

                                      ?>
                                        <select name="departement_affe"  id="departement_affe"class="form-control" required><option selected disabled>Chosir le departement</option>
                                            <?php foreach($query_run as $item){
                                                ?>
                                                <option value="<?= $item['id_enca']?>"><?=$item['departement']?></option>
                                               
                                                <?php } ?>

                                        </select>
                                        <?php 
                                        } 
                                
                                        ?>
                                    
                                      </div>

                         <div class="form-group">
                            
                            <label> Projets</label>
                            <?php

                                    $query="SELECT * FROM taches";
                                    $query_run=mysqli_query($conn,$query);
                                    if(mysqli_num_rows($query_run)>0)
                                    {

                                      ?>
                                        <select name="projets" class="form-control" id="projets" required> <option selected disabled>Choisir le projets</option>
                                            <?php foreach($query_run as $item){
                                                ?>
                                                <option value="<?= $item['id_taches']?>"><?=$item['projets']?></option>
                                               
                                                <?php } ?>

                                        </select>
                                        <?php 
                                        } 
                                
                                        ?>
                                    
                                      </div>

                         <div class="form-group">
                            
                            <label> Nom & Prenom de l'encadrant</label>
                            <?php

                                    $query="SELECT * FROM encdrants";
                                    $query_run=mysqli_query($conn,$query);
                                    if(mysqli_num_rows($query_run)>0)
                                    {

                                      ?>
                                        <select name="encadrantsId" class="form-control" id="encadrantsId" required><option selected disabled>-</option>
                                            <?php foreach($query_run as $item){
                                                ?>
                                                <option value="<?= $item['id_enca']?>"><?=$item['nom_encadrant']?></option>
                                               
                                                <?php } ?>

                                        </select>
                                        <?php 
                                        } 
                                
                                        ?>
                                    
                                      </div>

                        <div class="form-group">
                            
                            <label> Premier Stagiaire</label>
                            <?php

                                    $query="SELECT * FROM stages";
                                    $query_run=mysqli_query($conn,$query);
                                    if(mysqli_num_rows($query_run)>0)
                                    {

                                      ?>
                                        <select name="premier_stagiaires" id="premier_stagiaires" class="form-control" required><option selected disabled>-</option>
                                            <?php foreach($query_run as $item){
                                                ?>
                                                <option value="<?= $item['id_sta']?>"><?=$item['prenom']?></option>
                                               
                                                <?php } ?>

                                        </select>
                                        <?php 
                                        } 
                                
                                        ?>
                                    
                                      </div>
                                      </div>
                                      <div class="col-sm-6">

                                      <div class="form-group">
                            
                            <label> Deuxieme Stagiaire</label>
                            <?php

                                    $query="SELECT * FROM stages";
                                    $query_run=mysqli_query($conn,$query);
                                    if(mysqli_num_rows($query_run)>0)
                                    {

                                      ?>
                                        <select name="deuxiem_stagiaire" id="deuxiem_stagiaire" class="form-control" required><option selected disabled>-</option>
                                            <?php foreach($query_run as $item){
                                                ?>
                                                <option value="<?= $item['id_sta']?>"><?=$item['nom']?></option>
                                               
                                                <?php } ?>

                                        </select>
                                        <?php 
                                        } 
                                
                                        ?>
                                    
                                      </div>
                            
                                  <div class="form-group">
                                      <label for="date_fin_bino">La date debut:</label>
                                      <input type="date"  class="form-control" name="date_debut_bino" id="date_debut_bino" required>
                                      
                                      
                                  </div>
                                
                                      
                                  <div class="form-group">
                                      <label for="date_fin_bino">La date fin:</label>
                                      <input type="date"  class="form-control" name="date_fin_bino" id="date_fin_bino" required>
                                      
                                      
                                  </div>
                                    </div>
                                 </div>
                                
                                
                              <div class="form-group my-2">
                               
                              <button  class="btn btn-primary" type="submit" style="float:left;">Enregistrer</button>
                              <button class="btn btn-success" type="submit" style="float:right" data-dismiss="modal">Fermer</button>
                              
                              </div>
                              </div>
                       </div>
                      </form>
                  </div>
                </div>
              
              </div>
      </div>

    
              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>  
                    <th>N</th>
                    <th>Nom de l'encadrant</th>
                    <th>Département</th>
                    <th>Premier Stagiaire</th>
                    <th>Deuxieme Stagiaire</th>
                    <!-- <th>Projets</th>--> 
                    <th>Date debut</th>
                    <th>Date fin</th>
                    <th>Operations</th> 
                  </tr>
                  </thead>
                  <tbody>
                
                <?php 
               
                // $sql="SELECT id_binome,nom_encadrant,nom,prenom,departement,date_debut_bino,date_fin_bino  FROM (affecter_binome,encdrants,stages) WHERE  encdrants.id_enca=affecter_binome.encadrantsId AND  stages.id_sta=affecter_binome.premier_stagiaires  AND stages.id_sta=affecter_binome.deuxiem_stagiaire";  
                 $sql="SELECT * FROM affecter_binome";
                 $sql="SELECT id_binome,nom_encadrant,departement,nom,prenom,date_debut_bino,date_fin_bino FROM (affecter_binome,encdrants,stages) WHERE encdrants.id_enca=affecter_binome.encadrantsId AND stages.id_sta=affecter_binome.premier_stagiaires" ;
                   $result=mysqli_query($conn,$sql);
                   if($result)
                   {
                       while($row =mysqli_fetch_assoc($result)){
                           //echo $row;
                         $id_binome=$row['id_binome'];
                         $nom_encadrant=$row['nom_encadrant'];
                        $departement=$row['departement'];
                         $nom=$row['nom'];
                         $prenom=$row['prenom'];
                        // $prenom=$row['prenom'];
                        // $departement=$row['departement'];
                      //  $projets=$row['projets'];
                         $date_debut_bino=$row['date_debut_bino'];
                          $date_fin_bino=$row['date_fin_bino'];

                           
                       ?>
                           <tr>       
                           <td><?php echo $id_binome; ?></td>
                           <td><?php echo $nom_encadrant; ?></td> 
                           <td><?php echo $departement; ?></td> 
                           <td><?php echo $nom; ?></td> 
                           <td><?php echo $prenom; ?></td>
                        
                           <td><?php echo $date_debut_bino;?></td>
                           <td><?php echo $date_fin_bino;?></td>
                       
                        <td class="mx-1 my-1 py-1 px-1">

                            <form input type="hidden" value="<?=$row["id_binome"]?>">

                            <button class="btn btn-lock  mx-1 my-1 py-1 px-1" type="button"><a onclick='return confirm("Etes-vous Modifer???")'href="update_affecter2.php?id_binome=<?=$row['id_binome']?>" class="btn btn-info  mx-1 my-1 py-1 px-1"  ><span class="fa fa-edit"></span></a></button>
                        
                            
                     
                            
                     
                           <form input type="hidden" value="<?=$row["id_binome"]?>">
                          <button class="btn btn-lock  mx-1 my-1 py-1 px-1" type="button"><a onclick='return confirm("Afficher le profile ???")' href="profile_affecta2.php?id_affecter=<?=$row['id_binome']?>"  class="btn btn-success  mx-1 my-1 py-1 px-1"><span class="fa fa-download"></span></a></button> 

                       </td>
                       </tr>
                           </tr>
                           <?php
                            }
                       
                     }
                  
                 
                 ?>
           
 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
  </div>
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
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
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
      departement_affe: {
        required: true,
      
      },

      projets:{
          required:true,
         
      },
      encadrantsId:{

        required:true,
     
      },
      premier_stagiaires:{
        required:true,
    
      },
      deuxiem_stagiaire :{
        required:true,
      },
      date_debut_bino:{
        required:true,

      },

      date_fin_bino:{
        required:true,

      },

      terms: {
        required: true
      },
    },
    messages: {
      departement_affe: {
        required:"Le champs est obligatoire",
      },
      projets :{
        required:"Le champs est obligatoire ",
        
      },
      encadrantsId: {
        required: "Le champs est obligatoire",
      
      },

      premier_stagiaires :{
        required: "Le champs est obligatoire",
      },
      deuxiem_stagiaire :{
          required :"Le champs est obligatoire",
      },
      date_debut_bino:{
        required :"Le champs est obligatoire",
      },
      date_fin_bino:{
        required :"Le champs est obligatoire",
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
