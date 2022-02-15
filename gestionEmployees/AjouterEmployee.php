<?php include("connect.php"); 
    if(isset($_POST['submit'])){
        $Matricule=$_POST["matricule"];
        $Nom=$_POST["nom"];
        $Prenom= $_POST["prenom"];
        $DateNaiss= $_POST["date"];
        $Dep= $_POST["departement"];
        $Salaire= $_POST["Salaire"];
        $Fonction= $_POST["fonction"];
        
        $sql=   "INSERT INTO employee (matricule,nom,prenom,dateNaiss,departement,salaire,fonction)
         VALUES ('$Matricule','$Nom','$Prenom','$DateNaiss','$Dep','$Salaire','$Fonction')";
        $test  = mysqli_query($con,$sql);
        if($test){
            
            header('location:index.php');

        }      
        else{
            die(mysqli_error($con));
            }
     
    }
       

?>

<?php include("PageConstantes/header.php");
?>
    <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card  ">
                    <div class="card-header"><h4>Nouveau employée</h4></div>
                        <div class="card-body">
                           
                            <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="matricule">Matricule</label>
                                                <input type="text" class="form-control" name="matricule"> 
                                        </div>    
                                        
                                            <div class="form-group">
                                                <label for="nom">Nom</label>
                                                <input type="text" name="nom" class="form-control">  
                                        </div>
                                        
                                            <div class="form-group">
                                                <label for="prenom">Prénom</label>
                                                <input type="text" name="prenom" class="form-control">
                                        </div>
                                            
                                            <div class="form-group">
                                                <label for="date">Date de Naissance</label>
                                                <input type="date" name="date" class="form-control">

                                        </div>
                                            <div class="form-group">
                                                    <label for="departement">Département</label>
                                                    <input type="text" name="departement" class="form-control">
                                        </div>
                                            
                                            <div class="form-group">
                                                <label for="Salaire">Salaire</label>
                                                <input type="text" name="Salaire" class="form-control">
                                        </div>
                                            
                                            <div class="form-group">
                                                <label for="fonction">Fonction</label>
                                                <input type="text" name="fonction" class="form-control">
                                        </div>
                                            
                                    <div class="form-group">
                                                <label for="photo">Photo</label>
                                                <input type="file" name="photo" class="form-control">
                                    </div>      
                                          
                                    <div class="form-group">
                                        <button class="btn btn-success" type="submit" name="submit">Valider</button>
                                    </div>      
                                        
                                
                            </form>

                        </div>
                        
                    </div>
                </div>
            </div>


    </div>

    <?php include("PageConstantes/footer.php");?>