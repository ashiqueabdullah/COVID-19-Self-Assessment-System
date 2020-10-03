<?php
include_once 'header.php';
include_once 'function.php';
?>
    <!--  ======================= Start Header Area ============================== -->

    <div class="header_area">
        <div class="container">
            <center>
                <a href="index.html"><img src="img/download.png" class="mt-5 mb-1" alt=""></a>
                <h1>COVID-19 Self-Assessment System</h1>
                <p>Please provide some information</p>
            </center>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form action="" method="post" enctype="multipart/form-data">
                    <?php
                      if(isset($_POST['submit'])){
                        $phpcls=new mainClass();
                        echo $result=$phpcls->valueSave($_POST);
                      }
                    ?>
                        <div class="form-row">
                            <div class="col-md-6">
                              <label>Please enter your Age</label>
                              <input type="number" class="form-control" name="age" placeholder="Enter age">
                            </div>
                            <div class="col-md-6">
                              <label>Body temperature</label>
                              <input type="number" class="form-control" name="tempa" placeholder="Enter Body temperature">
                            </div>
                        </div>
                        <label class="mt-1">Please select gender</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" value="M">
                          <label class="form-check-label" >
                            Male
                          </label>
                        </div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" value="F">
                          <label class="form-check-label" >
                            Female
                          </label>
                        </div>
                        <label >Please select if you have any symptom</label>
                        <small><mark>You can select multiple items from the list</mark></small>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="symptom_list[]" value="Breathing problem">
                          <label class="form-check-label">Breathing problem</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="symptom_list[]" value="Dry cough">
                          <label class="form-check-label">Dry cough</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="symptom_list[]" value="Sore throat">
                          <label class="form-check-label">Sore throat</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="symptom_list[]" value="Weakness">
                          <label class="form-check-label">Weakness</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="symptom_list[]" value="Runny nose">
                          <label class="form-check-label">Runny nose</label>
                        </div>
                        <label >Please give additional information about symptoms</label>
                        <small><mark>You can select multiple items from the list</mark></small>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="additional_symptom_list[]" value="Abdominal pain">
                          <label class="form-check-label">Abdominal pain</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="additional_symptom_list[]" value="Vomiting">
                          <label class="form-check-label">Vomiting</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="additional_symptom_list[]" value="Diarrhoea">
                          <label class="form-check-label">Diarrhoea</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="additional_symptom_list[]" value="Chest pain or pressure">
                          <label class="form-check-label">Chest pain or pressure</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="additional_symptom_list[]" value="Muscle pain">
                          <label class="form-check-label">Muscle pain</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="additional_symptom_list[]" value="Loss of taste or smell">
                          <label class="form-check-label">Loss of taste or smell</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="additional_symptom_list[]" value="Loss of taste or smell">
                          <label class="form-check-label">Rash on skin, or discoloration of fingers or toes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="additional_symptom_list[]" value="Loss of taste or smell">
                          <label class="form-check-label">Loss of speech or movement</label>
                        </div>
                      <button type="submit" name="submit" class="btn btn-primary mt-2 mb-5 w-100">Get Result</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--  ======================= End Header Area ============================== -->

    <!--  ======================= Start Main Area ================================ -->
     
    <!--  ======================= End Main Area ================================ -->

<?php
  include_once 'footer.php';
?>

    