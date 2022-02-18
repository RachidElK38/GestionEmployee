<?php include("connect.php"); 

$matr  = $_GET['matricule'];


$sql = "SELECT * FROM employee where matricule='$matr'";
$res = mysqli_query($con,$sql);
$emp = mysqli_fetch_assoc($res);




    if(isset($_POST['submit'])){
        
        $Nom=$_POST["nom"];
        $Prenom= $_POST["prenom"];
        $DateNaiss= $_POST["date"];
        $Dep= $_POST["departement"];
        $Salaire= $_POST["Salaire"];
        $Fonction= $_POST["fonction"];
        
        $sql=   "UPDATE employee set nom='$Nom',
        prenom='$Prenom',dateNaiss='$DateNaiss',departement='$Dep',
        salaire=$Salaire,fonction='$Fonction'
        where matricule='$matr'";
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
    <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto mt-4">
                    <div class="card  ">
                    <div class="card-title text-center">Nouveau employée</div>
                        <div class="card-body">
                           
                            <form action="" method="POST">
                                          
                                        
                                            <div class="form-group">
                                                <label for="nom">Nom</label>
                                                <input type="text" name="nom" class="form-control" value=<?php 
                                                echo $emp['nom']?>>  
                                        </div>
                                        
                                            <div class="form-group">
                                                <label for="prenom">Prénom</label>
                                                <input type="text" name="prenom" class="form-control"
                                                value=<?php echo $emp['prenom']?>>
                                        </div>
                                            
                                            <div class="form-group">
                                                <label for="date">Date de Naissance</label>
                                                <input type="date" name="date" class="form-control"
                                                value=<?php echo $emp['dateNaiss']?>>

                                        </div>
                                            <div class="form-group">
                                                    <label for="departement">Département</label>
                                                    <input type="text" name="departement" class="form-control"
                                                    value=<?php echo $emp['departement']?>>
                                        </div>
                                            
                                            <div class="form-group">
                                                <label for="Salaire">Salaire</label>
                                                <input type="text" name="Salaire" class="form-control"
                                                value=<?php echo $emp['salaire']?>>
                                        </div>
                                            
                                            <div class="form-group">
                                                <label for="fonction">Fonction</label>
                                                <input type="text" name="fonction" class="form-control"
                                                value=<?php echo $emp['fonction']?>>
                                        </div>
                                            
                                    <div class="form-group">
                                                <label for="photo">Photo</label>
                                                <input type="" name="photo" class="form-control">
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