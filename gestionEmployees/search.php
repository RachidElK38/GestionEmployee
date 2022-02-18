<?php 
$search = $_REQUEST['search'];
?>

<?php include("connect.php");?>
<?php include("PageConstantes/header.php");?>
    <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <input type="text" name="search">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Matricule</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Date Naissance</th>
                                        <th>Departement</th>
                                        <th>Salaire</th>
                                        <th>Fonction</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    
                                    $sql = "SELECT * FROM employee 
                                    WHERE matricule LIKE %$search% or 
                                    departement LIKE  %$search% 
                                    or nom LIKE  %$search% ";
                                    $emps = mysqli_query($con,$sql);
                                    if($emps){
                                        foreach($emps as $emp)
                                        {

                                            echo'<tr>
                                                <td>'.$emp['matricule'].'</td>
                                                <td>'.$emp['nom'].'</td>
                                                <td>'.$emp['prenom'].'</td>
                                                <td>'.$emp['dateNaiss'].'</td>
                                                <td>'.$emp['departement'].'</td>
                                                <td>'.$emp['salaire'].'</td>
                                                <td>'.$emp['fonction'].'</td>
                                                <td> <img src="'.$emp['photo'].'" width=200>  </td>
                                                <td>
                                                <a href="update.php?matricule='.$emp['matricule'].'" class="btn btn-warning ">Editer</a>
                                                <a href="delete.php?matricule='.$emp['matricule'].'" class="btn btn-warning "  >Supprimer</a>
                                            </td>
                                            </tr>  ';                                        
                                        }
                                        
                                    }
                                    ?>
                                </tbody>
                        </table>
                    </div>
                        
                        </div>
                        
                </div>
            </div>


    </div>

    <?php include("PageConstantes/footer.php");?>