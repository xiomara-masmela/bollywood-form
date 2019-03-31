<!DOCTYPE html>

<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!--  <link rel="stylesheet" type="text/css" href="./CSS/stylesheet.css" media="screen"/> -->
  <title>Cinema Bolywood</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
  <script src="jquery.min.js"></script>
  <script src="./ajax.js"> </script>
  <script src="./toggle.js"></script>
  <script src="./jsvalidation.js"></script>
</head>
<?php require_once("db.php");?>


<body>
  <div class="container">
      <div class="row mt-4 pt-3"> 
         <div class="col-2"></div>
        <div class="col-8">
            <section>
              <h4 class=" display-4 text-danger">Please book your movie</h4>
        
              </section>
          <form class="" name="bollywoodForm" action="./action.php" method="post" onsubmit="return validateForm()">
                          <div class="form-group">
                                  <div class="input">
                                    <label for="fname" id="fnamelabel" >First Name</label>
                                    <input type="text" class="form-control"name="fname" id="fname" placeholder="Write First Name" required/>  
                                    </div>
                              </div>        
                           <div class="form-group">
                                <div class="input">
                                    <label for="lname" id="lnamelabel" >Last Name</label>
                                    <input type="text" class="form-control"name="lname" id="lname" placeholder="Write Last Name" required/>
                                  </div>
                                
                                
                              </div>
                             <div class="form-group">
                                <div class="input">
                                    <label for="mnumber" id="mnumberlabel" >Mobile Number</label>
                                    <input type="number" class="form-control" name="mnumber" id="mnumber" placeholder="Write your mobile number" required/>
                                  </div>   
                               </div>
                              <div class="form-group"> 
                                <div class="input">
                                    <label for="email" id="emaillabel" >Email account</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Write your Email" required/>
                                  </div>  
                              </div>
                              <div class="form-group"> 
                                   <button type="button" class="btn btn-light border border-primary" id="nextbutton">Next</button>

                                </div>

                              <div class="form -group select" id="selectStep">
                                  <label>Movie:</label>
                                    <select class="form-control" name="movie" id="movie">
                                    <option value=''>Choose your Movie-</option>
                                     <?php
                                        $sql = "select * from `movie_info`";
                                          $res = mysqli_query($con, $sql);
                                            if(mysqli_num_rows($res) > 0) {
                                            while($row = mysqli_fetch_object($res)) {
                                              echo "<option value='".$row->movieID."'>".$row->title."</option>";
                                            }
                                          }
                                        ?>
                                      </select>
                                    </div>

                                <div class="form-group">
                                      <label>Session :</label>
                                      <select class="form-control" name="session" id="session"><option>Choose your Session</option></select>
                                  </div>

                              
                              <div class="form-group"> 
                                <button type="submit" class="btn btn-primary btn-block" id="submitbutton" name="submit" value="Submit">Submit</button>
                               </div>
                               <div class="form-group"> </div>
                      
        </form>
    </div>
    <div class="col-2"></div>
  </div>                                        
  
  <footer class="footer">
      <div class="row mt-5 mb-5 text-center">
            <div class="col-12">
              <h4>Xiomara Masmela Morera 2018</h4>
            </div>
        
      </div>
  </footer>
  

  </body>

</html>
