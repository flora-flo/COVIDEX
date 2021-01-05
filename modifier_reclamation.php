<?php
  include_once "../../Controller/reclamationC.php";
  include_once "../../Model/reclamation.php";
  include_once "layout.php";

  function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'reclamation';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
$msg = '';
$pdo = pdo_connect_mysql();
// Check if the reclamation id exists, for example update.php?id=1 will get the reclamation with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
      //  $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $titre = isset($_POST['titre']) ? $_POST['titre'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $role = isset($_POST['role']) ? $_POST['role'] : '';
        $created = isset($_POST['created']) ? $_POST['created'] : '';
     
        // Update the record
        $stmt = $pdo->prepare('UPDATE reclamation SET  titre = ?, description = ?, role = ?, created = ?, description = ? WHERE id = ?');
        $stmt->execute([ $titre, $description, $role, $created, $description, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the reclamation from the reclamations table
 $stmt = $pdo->prepare('SELECT * FROM reclamation WHERE id = ?');
   $stmt->execute([$_GET['id']]);
  $reclamation = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$reclamation) {
       exit('reclamation doesn\'t exist with that id!');
    }
} 
else {
    exit('No id specified!');
}

?>
   <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                   
                                </div>
                            </div>
                           
                        </div>
                       
                        <div class="row">
                            <div class="col-md-12">

       
     
       
    
        <form action="modifier_reclamation.php?id=<?=$reclamation['id']?>" method="post">
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Name</td>
            <td><input type='text' name='titre' value ="<?php echo $reclamation['titre'];?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>description</td>
            <td><input type='text' name='description'  value ="<?php echo $reclamation['description'];?>" class='form-control' /></td>
        </tr>
        
        <tr>
            <td>role</td>
            <td><input type='text' name='role'  value ="<?php echo $reclamation['role'];?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>created</td>
            <td><input type='text' name='created'value ="<?php echo $reclamation['created'];?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>description</td>
            <td><input type='text' name='description'value ="<?php echo $reclamation['description'];?>" class='form-control' /></td>
        </tr>
     
       
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save Changes' class='btn btn-primary' />
                <a href='listRecc.php' class='btn btn-danger'>Back</a>
            </td>
        </tr>
    </table>
</form>
<?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>

      <?php
  
  ?>
    </div>
                                    <!-- END DATA TABLE -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="copyright">
                                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>