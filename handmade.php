<?php
    include_once 'header.php';
?>

<!--========================= JUMBOTRON & BANNER ===============================-->

  <div class="jumbotron paper-bg">
    <div class="row">
      <div class="col-sm-12 rounded">
      </div>
    </div>
  </div>

<!--=================== PHP CODE TO SELECT ALL FROM HANDMADE TABLE ===========================-->

  <?php
  			$sql = "SELECT * FROM handmade";
  	    $result = mysqli_query($conn, $sql) or die("Bad Insert: $sql");
  	    // $row = mysqli_fetch_array($result);
  	    // $resultCheck = mysqli_num_rows($result);
  	    // // echo $row['password']."<br>";
  ?>

<!--========================= BRUSH-PEN ICON ===============================-->

  <section class="container">
    <h1 class="text-center">Handmade Items</h1>
    <img class="brushpen center-block img-responsive" src="kettle-images/index-img/brushpen.png" alt="logo">
    <section class="item-wrapper mt-2" >
      <div class='row'>

<!--====================== PHP WHILE LOOP RENDERS DATA IN STYLED TABLES ===============================-->


<?php
$i = 0;
while($row = mysqli_fetch_assoc($result)) {

    echo "
        <div class='col-sm-3'>
        <div class='border border-primary item-box'>
        <img class='img-responsive img-thumbnail' src= {$row['img']} alt='kettle-item'>
          <h3>{$row['title']}</h3>
          <p class='price'>Price: $.{$row['price']}</p>
          <div class='panel-group'>
            <div class='panel panel-default'>
              <div class='panel-heading'>
                <h4 class='panel-title'>
                  <a data-toggle='collapse' href='#collapse{$row['id']}'>Item Description</a>
                </h4>
              </div>
              <div id='collapse{$row['id']}' class='panel-collapse collapse'>
                <div class='panel-body'>{$row['description']}</div>
<div class='panel-footer'>Call to Hold<a href='contact.php'><img class='phone-icon'src='kettle-images/smartphone.svg' alt='phone icon'></a></div>               </div>
            </div>
          </div>
          <button type='button' class='btn btn-secondary btn-lg center-block'>Check Availability</button>
          </div>
          </div>";

  $i++;
}

 ?>
</div>

      </div>
    </section>
  </section>

<!--========================= FOOTER ===============================-->


  <footer id="foot" class="text-muted">
    <div id="foot-container" class="container-fluid">
      <button id="top-btn" class="btn btn-deault btn-md">
          <a href="#">Back to Top</a>
        </button>
      <p>Visit <a href="#">jaimemaldo.com</a> for development info on this page.</p>
      <p>Coded by Jaime Maldonado 2018</p>
    </div>
  </footer>
  </section>

</body>

</html>
