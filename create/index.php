<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "urlshort");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    echo "adding link to queue...";
    $link = $_POST['link'];
    
    echo '<br>';
    echo "generating string...";
    function generateRandomString($length = 5) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    $txxt = generateRandomString();
    
    echo '<br>';
    echo "creating redirection page...";
    chdir('../url/'); mkdir($txxt); chdir($txxt); touch('index.php'); 
    $ok = '<?php header("location: ' . $link . '"); ?>';
    $file = fopen('index.php','w');
    fwrite($file, $ok);
    fclose($file);
    
    echo '<br>';
    echo "adding data to database...";
    $sql = "INSERT INTO `links` (`url`, `alias`, `time`) VALUES ('$link', '$txxt', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    
    if($result) {
       echo '<br>';
        echo "successfully created...";
        $_SESSION['alias'] = $txxt;
        header('Location: ../'); 
    }
    else {
        echo "error";
    }
}
else {
    header("location: ../");
}

?>