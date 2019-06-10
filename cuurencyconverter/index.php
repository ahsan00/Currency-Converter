
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "phonebook";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `currency`";
$result1 = mysqli_query($connect, $query);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simple Weight Converter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="display-4 tex-center">Currency Converter</h1>

          <form >
            <div class="form-group">
              <input type="number" id="input" placeholder="Enter Amount Of Taka" class="form-control form-control-lg">

            </div>

          </form>
            <h1 class="display-4 tex-center">Change Into</h1>

          <div class="mb-2" id="gramsoutput">
            <select class="form-control" id="foreign">
              <?php while($row1 = mysqli_fetch_array($result1)):;?>

              <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

              <?php endwhile;?>

            </select>

          </div>


          <div class="button mb-10">
            <button type="button"  class="btn-success"name="button" id =button1>Submit</button>

          </div>
          <div class="output mb-2" id="output">
            <div class="card ">
            <div class="card-block card-sucess">
              <h4>ounceGrams:</h4>
              <div id="tkoutput"></div>

            </div>

          </div>

        </div>

      </div>

    </div>
  </div>
    <script>
      //action listener
      document.getElementById("output").style.visibility = "hidden";

      document.getElementById('button1').addEventListener('click',function(){
       document.getElementById("output").style.visibility = "visible";

        var a=document.getElementById('foreign').value;
        //console.log(a);
        if(a=="Pound")
        {
          console.log('aa');
          var b=document.getElementById('input').value;
          var c=b*94;
          document.getElementById('tkoutput').innerHTML=c;

          console.log(c);

        }
      else if(a=="Euro")
        {
          var b=document.getElementById('input').value;
          var c=b*94;
          document.getElementById('tkoutput').innerHTML=c;

          console.log(c);
        }
      else  if(a=="Dollar")
        {
          var b=document.getElementById('input').value;
          var c=b*84;
          console.log(c);
        }
      else (a=="Rupee")
        {
          var b=document.getElementById('input').value;
          var c=b*94;
          document.getElementById('tkoutput').innerHTML=c;

          console.log(c);

        }





      });

    </script>




  </body>
</html>
