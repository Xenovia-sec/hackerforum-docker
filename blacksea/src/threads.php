<?php
require_once("auth_control.php");
require_once("DBconnect.php");
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
if (isset($_GET['topic']) && is_numeric($_GET['topic'])) {
    if ($_GET['topic'] >= 23){
        $q = $db->prepare("SELECT * FROM forum_users WHERE id=:id");
        $q->execute([
            "id" => $jwt_userid,
        ]);
        $result = $q->fetch();
        if ($result['role'] == 'rookie'){
            header("Location: index.php?msg=1");
            exit;
        }
    }
    $topic_id=$_GET['topic'];
    $q = $db->prepare("SELECT * FROM forum_threads WHERE topic_id= :id");
    $q->execute([
        "id" => $_GET['topic'],
    ]);
}
require_once("head.php");
require_once("dropdowns.php");
?>

<body style="background-color:rgb(20,20,20);">
    <div class="container-fluid mt-5">
        <div class="thread-wrapper row col-md-8">

        </div>
        <div class="main-content container-fluid justify-content-around d-flex mt-4 mb-4">
            <div class="col-md-8 main-wrapper-custom ">
                <div class="category-wrapper" style="border-radius: 10px;">
                    <div class="category-header list-group-item list-group-header-custom" style="border-radius: 10px; border-bottom: 0.1rem solid red; background-image: url(assets/img/red-matrix-bg.gif);">
                        <h3><?php echo $topics[$topic_id];?></h3>
                    </div>
                    <div class="list-group" style="border-radius: 10px;background-color: black;">
                    <?php
                        if (isset($_GET['topic']) && is_numeric($_GET['topic'])) {
                            while ($threads = $q->fetch()) {
                                $user = $db->prepare("SELECT * FROM forum_users WHERE id=:id");
                                $user->execute([
                                    "id" => $threads['user_id'],
                                ]);
                                $user_id = $user->fetch();
                                echo '<a href="thread.php?thread='.$threads['thread_id'].'" class="list-group-item list-group-item-action list-group-custom list-group-item-custom d-flex" style="background-color: black;border-radius: 10px; border-bottom: 0.1rem solid grey;">
                                <div class="content-col col d-flex align-items-center">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">'.$threads['title'].'</h5>
                                    </div>
                                </div>
                                <div class="last-creator col d-flex justify-content-around">
                                    <div class="space col-sm-7">
                                    </div>
                                    <img class="col-md-4 col" src="'.$user_id['image'].'" alt="" srcset="" style="width: 50px; border-radius: 50%; height: 50px;">
                                    <div class="creater-info">
                                        '.$user_id['username'].'
                                        <p><small>'.$threads['created_at'].'</small></p>
                                    </div>
                                    <div class="space col-sm-1">
                                    </div>
                                </div>
                            </a>';
                            }
                        }
            ?>
                        <!-- <a href="#" class="list-group-item list-group-item-action list-group-custom list-group-item-custom d-flex" style="border-radius: 10px; border-bottom: 0.1rem solid grey;">
                            <div class="content-col col">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Announcements</h5>
                                </div>
                                <p class="mb-1"><small>Descr</small></p>
                            </div>
                            <div class="last-creator col d-flex justify-content-around">
                                <div class="space col-sm-7">

                                </div>
                                <img class="col-md-4 col" src="assets/img/lastcreator.jpg" alt="" srcset="" style="width: 50px; border-radius: 50%; height: 50px;">
                                <div class="creater-info">
                                    Omnipotent
                                    <p><small>5/4/2022</small></p>
                                </div>
                                <div class="space col-sm-1">
                                </div>
                            </div>
                        </a> -->
                    </div>

                </div>
            </div>
            <div class="side-content col-sm-2">
                <div class="side-content">
                    <div class="col-md-12 category-wrapper" style="border-radius: 10px;">
                        <div class="category-header list-group-item list-group-header-custom" style="border-bottom: 0.1rem solid red; background-image: url(assets/img/red-matrix-bg.gif);">
                            <h3>Advertisements</h3>
                        </div>
                        <div class="list-group add-image h-100" style="border-radius: 10px;">
                            <img src="assets/img/advertisement.gif" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div class="side-content mt-4">
                    <div class="col-md-12 category-wrapper" style="border-radius: 10px;">
                        <div class="category-header list-group-item list-group-header-custom" style="border-bottom: 0.1rem solid red; background-image: url(assets/img/red-matrix-bg.gif);">
                            <h3>Advertisements</h3>
                        </div>
                        <div class="list-group add-image h-100" style="border-radius: 10px;">
                            <img src="assets/img/yumeko-jabami.gif" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div class="side-content mt-4">
                    <div class="col-md-12 category-wrapper" style="border-radius: 10px;">
                        <div class="category-header list-group-item list-group-header-custom" style="border-bottom: 0.1rem solid red; background-image: url(assets/img/red-matrix-bg.gif);">
                            <h3>Advertisements</h3>
                        </div>
                        <div class="list-group add-image h-100" style="border-radius: 10px;">
                            <img src="assets/img/rias-huh.gif" alt="" srcset="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
<?php
include("footer.php");
?>


