<?php
require_once("auth_control.php");
require_once("DBconnect.php");
session_start();

$topics = array(
    1 => "Announcements",
    2 => "Introductions",
    3 => "World News",
    4 => "The Lounge",
    5 => "Anime & Manga",
    6 => "Not Safe For Work",
    7 => "Databases",
    8=> "Other Leaks",
    9 => "Dehashed Combolist",
    10 => "Dumped Doxes",
    11=> "General",
    12 => "Leaks Market",
    13 => "Hosting/VPS",
    14 => "Programming",
    15 => "Security and Anonymity",
    16 => "Graphics",
    17 => "Vouch Section",
    18 => "Doxing Tutorials",
    19 => "Coding Tutorials",
    20 => "General Tutorials",
    21=> "SE Tutorials",
    22=> "Scam Reports",
    23=> "VIP News",
    24=> "VIP Leaks",
    25=> "VIP Vulnerabilities",

);

if(isset($_POST['title']) && isset($_POST['content'])){
    $q = $db->prepare("INSERT INTO forum_threads(title,content,created_at,topic_id,user_id) VALUES (:title,:content,:created_at,:topic_id,:user_id)");
    $q->execute([
        "title"=> htmlspecialchars($_POST['title']),
        "content"=> $_POST['content'],
        "created_at"=> date('d-m-Y H:i:s',time()),
        "topic_id"=> $_POST['topic'],
        "user_id"=> $_SESSION['id'],
    ]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="content-body">
<div class="container">
    <form action="#" method="post">
        <div class="form-wrapper shadow p-3 mb-5 bg-body rounded m-4 p-5">
        <div class="mb-3">
            <h4>Add Thread</h4>
        </div>
        <hr>
        <div class="mb-3">
            <label for="name" class="form-label" style="color: black;">topic id</label>
            <select class="form-control" name="type" id="sel1">
                        <?php
                        foreach ($topics as $opt => $val) {
                            echo '<option value="' . $opt . '">' . $val . '</option>';  
                        }
                        ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label" style="color: black;">title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label" style="color: black;">content</label>
            <textarea name="content" id="myeditor" rows="10" cols="80"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</div>
<script type="text/javascript" src="hack-karadenizzzrr/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
document.addEventListener( 'DOMContentLoaded',function()
{
 CKEDITOR.replace( 'myeditor' );	
});
</script>
</body>
</html>