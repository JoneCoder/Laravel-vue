<?php
require_once './vendor/autoload.php';
use App\classes\Student;

if(isset($_POST['mobile'])){
    $student = new Student();
    $message = $student->create();
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
                    <div class="col-md-6 offset-3">
                    <?php if(isset($message)){ ?>
                    <div class="alert alert-success" role="alert">
                          Student information save successfully!
                    </div>
                    <?php } ?>
                        <div class="card">
                            <div class="card-header"><h3>Add Student Info</h3></div>
                            <div class="card-body">
                                <form action="" method="post">
                                  <div class="row">
                                    <div class="form-group col-6">
                                      <input type="text" class="form-control" placeholder="First name" name="firstName">
                                    </div>
                                    <div class="form-group col-6">
                                      <input type="text" class="form-control" placeholder="Last name" name="lastName">
                                    </div>
                                    <div class="form-group col-12">
                                      <input type="email" class="form-control" placeholder="E-mail" name="email">
                                    </div>
                                    <div class="form-group col-12">
                                      <input type="text" class="form-control" placeholder="Phone Number" name="mobile">
                                    </div>
                                    <div class="form-group col-auto">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>