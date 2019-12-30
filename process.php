<?php 


// Connect TO A Database
$db_conn = mysqli_connect("127.0.0.1", "root", "", "learningajax");

echo "Processing \n";

// Check For Post Variable 
if(isset($_POST['name'])){
    // Integrating db
    $name = mysqli_real_escape_string($db_conn, $_POST['name']);
    echo 'POST : Your Name Is : '.$_POST['name'];

    $query = "INSERT INTO users(name) VALUES('$name')";

    if(mysqli_query($db_conn, $query)) {
        echo "\n Users Added...\n";
    } else {
        echo "ERROR : ".mysqli_error($db_conn);
    }
}

// Check For Get Variable
if(isset($_GET['name'])){
    echo 'GET : Your Name Is : '.$_GET['name'];
}

