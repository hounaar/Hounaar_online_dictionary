<?php
include_once "D:/Install/code/xamp/htdocs/dict/src/php/connection.php";
include_once "D:/Install/code/xamp/htdocs/dict/src/php/header.php";



if(isset($_GET['q'])){

    $q = mysqli_real_escape_string($connection,$_GET['q']);
    $connection->query("SET @p0='$q'");
    $query = $connection->query("CALL `selector`(@p0);");
    if($query->num_rows>0){
        while($row = $query->fetch_assoc()){

            echo '<div class="container">
            <hr>
    
            <h6>Dictionary</h6>
            <div class="col definitions">
                Definitions from <a href="">Oxford Language</a>
            </div>
            <div class="col"><h3><b>'.$row['vocabs'].'</b></h3></div>
            <div class="col pronounciation">
               - Prounounciation : <i class="pronounce">'.$row['pronounciation'].'</i>
            </div>
            <div class="col">
               - <i class="speech">'.$row['speech'].'</i>
            </div>
            <div class="col">
              - Meaning: <b>'. $row['meaning'].'</b>
            </div>
            <div class="col">
                - Synonyms:
                <i class="syns">'.$row['syns'].'</i>
            </div>
            <div class="col">
                - Phrases : 
                <div class="col phrases"><i>'. $row['eg1'].'</i></div>
                <div class="col phrases"><i>'. $row['eg2'].'</i></div>
                <div class="col phrases"><i>'. $row['eg3'].'</i></div>
                <div class="col phrases"><i>'. $row['eg4'].'</i></div>
    
    
            </div>
        
    
        </div>';
      
        }
        
    } else {
        echo '<br/>';
        echo "<b><h2 style='margin-left:30px;'>No results Found :(</h2></b>";
    }
}


?>
    


    


 <?php
include_once "D:/Install/code/xamp/htdocs/dict/src/php/footer.php";

?>