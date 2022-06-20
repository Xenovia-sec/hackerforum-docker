<?php
require_once("auth_control.php");
require_once("DBconnect.php");
if (isset($_POST['content']) && isset($_POST['thread'])) {
    $q2 = $db->prepare("INSERT INTO forum_comments(user_id,thread_id,message,created_at) VALUES (:user_id,:thread_id,:message,:created_at)");
    $q2->execute([
        "user_id" => $jwt_userid,
        "thread_id" => $_POST['thread'],
        "message" => $_POST['content'],
        "created_at" => date('d-m-Y H:i:s', time())
    ]);
    //header("Location: thread.php?thread=" . $_POST['thread']);
}
if (isset($_GET['thread']) && is_numeric($_GET['thread'])) {
    $q = $db->prepare("SELECT * FROM forum_threads WHERE thread_id= :id");
    $q->execute([
        "id" => $_GET['thread'],
    ]);
    $thread = $q->fetch();
    if ($thread['topic_id'] >= 23){
        $q = $db->prepare("SELECT * FROM forum_users WHERE id=:id");
        $q->execute([
            "id" => $jwt_userid,
        ]);
        $result = $q->fetch();
        if ($result['role'] == 'rookie'){
            header("Location: index.php");
            exit;
        }
    }
    $q = $db->prepare("SELECT * FROM forum_threads WHERE thread_id= :id");
    $q->execute([
        "id" => $_GET['thread'],
    ]);
}
require_once("head.php");
require_once("dropdowns.php");
?>

<body style="background-color:rgb(20,20,20); color:aliceblue;">
    <div class="main-wrapper">
        <?php
        if (isset($_GET['thread']) && is_numeric($_GET['thread'])) {
            while ($threads = $q->fetch()) {
                $thread_title = $threads['title'];
                $thread_id = $threads['thread_id'];
                $user = $db->prepare("SELECT * FROM forum_users WHERE id=:id");
                $user->execute([
                    "id" => $threads['user_id'],
                ]);
                echo '<div class="mb-4" style="margin-left: 3rem;margin-top: 2rem;">
                        <div class="title-hader ml-4">
                            <h4 class="">' . $threads['title'] . '</h4>
                        </div>
                    </div>';
                $user_id = $user->fetch();
                echo '<div class="main-content container-fluid justify-content-around d-flex mt-4 mb-4">
                <div class="side-content col-sm-2">
                    <div class="side-content">
                        <div class="col-md-12 category-wrapper" style="border-radius: 10px;">
                            <div class="d-flex justify-content-around category-header list-group-item list-group-header-custom" style="border-bottom: 0.1rem solid red; background-image: url(assets/img/red-matrix-bg.gif);">
                                <div class="col" style="border-radius: 10px;">
                                    <img style="width: 60px;border-radius: 50%;height: 65px;" src="' . $user_id['image'] . '" alt="" srcset="">
                                </div>
                                <div class="col" style="color: aliceblue;">
                                    <h5>' . $user_id['username'] . '</h5>
                                    <h6>' . strtoupper($user_id['role']) . '</h6>
                                </div>
                            </div>
                            <div class="h-100 d-flex align-items-around" style="border-radius: 10px; background-color:rgb(10, 0, 0);min-height: 30vh;">
                                <table class="" style="width: 100%;height: 90%;padding-top: 15px;">
                                    <tr class="mb-3" style="">
                                        <td>
                                            <h6 class="m-2"><span class="badge bg-danger">Like:</span></h6>
                                        </td>
                                        <td>15</td>
                                    </tr>
                                    <tr class="">
                                        <td>
                                            <h6 class="m-2"><span class="badge bg-danger">Dislike:</span></h6>
                                        </td>
                                        <td>0</td>
                                    </tr>
                                    <tr class="">
                                        <td>
                                            <h6 class="m-2"><span class="badge bg-danger">Threads:</span></h6>
                                        </td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="m-2"><span class="badge bg-danger">Reputation:</span></h6>
                                        </td>
                                        <td>+70</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="m-2"><span class="badge bg-danger">Joined:</span></h6>
                                        </td>
                                        <td>05.05.2022</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
    
                </div>
    
                <div class="col-md-9 main-wrapper-custom ">
    
                    <div class="category-wrapper" style="border-radius: 10px;">
    
                        <div class="list-group " style="border-radius: 10px; background-color:rgb(10, 0, 0); min-height: 39vh;">
    
                            <ul class="menu p-4">
                                <li><i class="fa-solid fa-thumbs-up"></i></li>
                                <li><i class="fa-solid fa-thumbs-down"></i></li>
                                <li>' . $threads['created_at'] . '</li>
                            </ul>
                            <div class="thread-content-wrapper col mt-3 p-4">
                                <div class="content w-100">
                                    <p> ' . $threads['content'] . '</p>
    
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
    
            </div>';
            }
            $q_comment = $db->prepare("SELECT * FROM forum_comments WHERE thread_id= :id");
            $q_comment->execute([
                "id" => $_GET['thread'],
            ]);
            while ($comments = $q_comment->fetch()) {
                $user_comment = $db->prepare("SELECT * FROM forum_users WHERE id=:id");
                $user_comment->execute([
                    "id" => $comments['user_id'],
                ]);
                $user_id = $user_comment->fetch();
                echo '<div class="main-content container-fluid justify-content-around d-flex mt-4 mb-4">
                <div class="side-content col-sm-2">
                    <div class="side-content">
                        <div class="col-md-12 category-wrapper" style="border-radius: 10px;">
                            <div class="d-flex justify-content-around category-header list-group-item list-group-header-custom" style="border-bottom: 0.1rem solid red; background-image: url(assets/img/red-matrix-bg.gif);">
                                <div class="col" style="border-radius: 10px;">
                                    <img style="width: 60px;border-radius: 50%;height: 65px;" src="' . $user_id['image'] . '" alt="" srcset="">
                                </div>
                                <div class="col" style="color: aliceblue;">
                                    <h3>' . $user_id['username'] . '</h3>
                                    <h6>' . strtoupper($user_id['role']) . '</h6>
                                </div>
                            </div>
                            <div class="h-100 d-flex align-items-around" style="border-radius: 10px; background-color:rgb(10, 0, 0);min-height: 30vh;">
                                <table class="" style="width: 100%;height: 90%;padding-top: 15px;">
                                    <tr class="mb-3" style="">
                                        <td>
                                            <h6 class="m-2"><span class="badge bg-danger">Like:</span></h6>
                                        </td>
                                        <td>15</td>
                                    </tr>
                                    <tr class="">
                                        <td>
                                            <h6 class="m-2"><span class="badge bg-danger">Dislike:</span></h6>
                                        </td>
                                        <td>0</td>
                                    </tr>
                                    <tr class="">
                                        <td>
                                            <h6 class="m-2"><span class="badge bg-danger">Threads:</span></h6>
                                        </td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="m-2"><span class="badge bg-danger">Reputation:</span></h6>
                                        </td>
                                        <td>+70</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="m-2"><span class="badge bg-danger">Joined:</span></h6>
                                        </td>
                                        <td>05.05.2022</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
    
                </div>
    
                <div class="col-md-9 main-wrapper-custom ">
    
                    <div class="category-wrapper" style="border-radius: 10px;">
    
                        <div class="list-group " style="border-radius: 10px; background-color:rgb(10, 0, 0); min-height: 39vh;">
    
                            <ul class="menu p-4">
                                <li><i class="fa-solid fa-thumbs-up"></i></li>
                                <li><i class="fa-solid fa-thumbs-down"></i></li>
                                <li>' . htmlspecialchars($comments['created_at']) . '</li>
                            </ul>
                            <div class="thread-content-wrapper col mt-3 " style="margin-left: 1.5rem;">
                                <div class="content w-100">
                                    ' .htmlspecialchars($comments['message']) . '
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
    
            </div>';
            }
        }
        ?>
        <!-- <div class="main-content container-fluid justify-content-around d-flex mt-4 mb-4">
            <div class="side-content col-sm-2">
                <div class="side-content">
                    <div class="col-md-12 category-wrapper" style="border-radius: 10px;">
                        <div class="d-flex justify-content-around category-header list-group-item list-group-header-custom" style="border-bottom: 0.1rem solid red; background-image: url(assets/img/red-matrix-bg.gif);">
                            <div class="col" style="border-radius: 10px;">
                                <img style="width: 60px;border-radius: 50%;height: 65px;" src="assets/img/advertisement.gif" alt="" srcset="">
                            </div>
                            <div class="col" style="color: aliceblue;">
                                <h3>Username</h3>
                                <h6>VIP</h6>
                            </div>
                        </div>
                        <div class="h-100 d-flex align-items-around" style="border-radius: 10px; background-color:rgb(10, 0, 0);min-height: 30vh;">
                            <table class="" style="width: 100%;height: 90%;padding-top: 15px;">
                                <tr class="mb-3" style="">
                                    <td>
                                        <h6 class="m-2"><span class="badge bg-danger">Like:</span></h6>
                                    </td>
                                    <td>15</td>
                                </tr>
                                <tr class="">
                                    <td>
                                        <h6 class="m-2"><span class="badge bg-danger">Dislike:</span></h6>
                                    </td>
                                    <td>0</td>
                                </tr>
                                <tr class="">
                                    <td>
                                        <h6 class="m-2"><span class="badge bg-primary">Threads:</span></h6>
                                    </td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="m-2"><span class="badge bg-primary">Reputation:</span></h6>
                                    </td>
                                    <td>+70</td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="m-2"><span class="badge bg-primary">Joined:</span></h6>
                                    </td>
                                    <td>05.05.2022</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-9 main-wrapper-custom ">

                <div class="category-wrapper" style="border-radius: 10px;">

                    <div class="list-group " style="border-radius: 10px; background-color:rgb(10, 0, 0); min-height: 39vh;">

                        <ul class="menu p-4">
                            <li><i class="fa-solid fa-thumbs-up"></i></li>
                            <li><i class="fa-solid fa-thumbs-down"></i></li>
                            <li>22:47 - 05.05.2022</li>
                        </ul>
                        <div class="thread-content-wrapper col mt-3 p-4">
                            <div class="content w-100">
                                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis harum asperiores consequatur earum sunt dolore facilis mollitia labore. Possimus, non officia. Velit dolorem eligendi et. Corrupti dignissimos sunt ea nobis.</p>

                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis harum asperiores consequatur earum sunt dolore facilis mollitia labore. Possimus, non officia. Velit dolorem eligendi et. Corrupti dignissimos sunt ea nobis.</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div> -->
            <div class="i d-flex justify-content-center">
        <form action="#" method="post">
            <div class="mb-3 row">
                <input type="hidden" value="<?php echo "$thread_id"; ?>" name="thread">
                <label for="name" class="form-label" style="color: black;"></label>
                <textarea style="color: aliceblue;background-color: black;" name="content" id="" rows="10" cols="80"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    <?php
    include("footer.php");
    ?>