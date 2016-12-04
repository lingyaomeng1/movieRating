<div class="col-md-9">
    <?php
    $getcat = $_GET['category'];
    $con = mysqli_connect("localhost","root","root" , "movierating", "8889");
    $sql="SELECT * FROM Movies WHERE Category='$getcat'";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)){
      echo "<hr>";
      echo "<div>";
        echo "<div class='col-sm-3 col-md-3'>";
          $cover = $row['cover'];
          $title = $row['title'];
          echo "<img src='$cover' style='width: 140px;height: 208px;'>";
        echo "</div>";
        echo "<div class='col-sm-9 col-md-9'>";
          echo "<h2>" . $title . "</h2>";
          $director = $row['director'];
          $stars = $row['stars'];
          $writers = $row['writers'];
          $date = $row['release_date'];
          echo "<p>Director: " . $director . "</p>";
          echo "<p>Writers: " . $writers . "</p>";
          echo "<p>Stars: " . $stars . "</p>";
          echo "<p>Release Date: " . $date . "</p>";
          echo "</br></br><hr>";
        echo "</div>";
      echo "</div>";
    }
    ?>
</div>
