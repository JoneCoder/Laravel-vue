<?php
require_once './vendor/autoload.php';
use App\classes\Student;

$student = new Student();
$data = $student->getInfo();

if(isset($_POST['searchKey'])){
    $data = $student->search();
}

if(isset($_POST['ID'])){
    $student->delete($_POST['ID']);
}
?>
<!DOCTYPE html>
<html lan="en-us">
    <head>
        <title>PHP Laravel vue Project</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, inital-scale=1.0"/>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav">
                          <li class="nav-item">
                            <a class="nav-link active" href="index.php">Add Student</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="view.php">View All Students</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="session.php">Session Start</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="test.php">Session End</a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">
                                    <h3>All Students Info</h3>
                                </div>
                                <div class="col">
                                <form action="" method="post">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search student info...." aria-label="Recipient's username" aria-describedby="button-addon2" name="searchKey">
                                         <div class="input-group-append">
                                            <button class="btn btn-secondary" type="submit" id="button-addon2">Search</button>
                                          </div>
                                    </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th scope="col">Student ID</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">E-mail</th>
                                      <th scope="col">Mobile</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <?php while($info = mysqli_fetch_assoc($data)){ ?>
                                    <tr>
                                      <td><?php echo $info['id']; ?></td>
                                      <td><?php echo $info['name']; ?></td>
                                      <td><?php echo $info['email']; ?></td>
                                      <td><?php echo $info['mobile']; ?></td>
                                      <td>
                                          <button type="button" class="btn btn-outline-primary edit" value="<?php echo $info['id']; ?>">Edit</button>
                                          <button type="button" class="btn btn-outline-warning delete" value="<?php echo $info['id']; ?>">Delete</button>
                                      </td>
                                      <tr>
                                      <?php } ?>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
      $(".edit").click(function(){
        var id = $(this).val();
        window.location.assign("/Laravel-vue/Day-10/project/edit.php?id=" + id);
      });
      
      $(".delete").click(function(){
          var id = $(this).val();
          if(confirm("Are you sure delete this?")){
              $.post("/Laravel-vue/Day-10/project/view.php",
            {
              ID : id
            },
              function(data,status){
                  window.location.assign("/Laravel-vue/Day-10/project/view.php");
            });
          };
          
      });
    });
</script>
    </body>
</html>