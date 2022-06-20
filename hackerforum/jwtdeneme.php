<?php
require_once('config.php');
$jwt = (new JWT());
$payload = [
    'id' => '1',
    'name' => 'John Doe',
    'iss' => 'jwt.local',
    'aud' => 'example.com'
];
$token = $jwt->generate($payload);
    if ($jwt->is_valid($token)){
        echo "valid";
    }
    //echo $token;
    // $payload = [
    //     'id' => '1',
    //     'name' => 'John Doe'
    // ];
    // $token = $jwt->generate($payload);
    // echo $jwt->is_valid($token);

    // echo $jwt->is_valid('test');
    exit;
?>

<div class="container mt-5">
        <div class="thread-wrapper row col-md-8">
            <?php
            if (isset($_GET['thread']) && is_numeric($_GET['thread'])) {
                while ($threads = $q->fetch()) {
                    $thread_title = $threads['title'];
                    $thread_id = $threads['thread_id'];
                    $user = $db->prepare("SELECT * FROM forum_users WHERE id=:id");
                    $user->execute([
                        "id" => $threads['user_id'],
                    ]);
                    echo '<div class="thread-title mb-4">
                                <h4>' . $threads['title'] . '</h4>
                              </div>';
                    $user_id = $user->fetch();
                    echo '<div class="thread-box mb-3 col col-md-3">
                        <div class="user-image row" style="width: fit-content;margin-right: 0.9rem;">
                            <img src="./' . $user_id['image'] . '" style="width: 150px;border-radius: 50%;" alt="">
                        </div>
                        <div class="thread-body row d-flex align-items-center">
                            <div class="thread-title row">

                                <div class="">Username: ' . $user_id['username'] . '</div>
                            </div>
                        </div>
                </div>
                <div class="thread-content-wrapper col mt-3">
                    <div class="content w-100">
                        ' . $threads['content'] . '
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
                    echo '<div class="thread-title mb-4">
                                <h4>' . $thread_title . '</h4>
                              </div>';
                    $user_id = $user_comment->fetch();
                    echo '<div class="thread-box mb-3 col col-md-3">
                        <div class="user-image row" style="width: fit-content;margin-right: 0.9rem;">
                            <img src="./' . $user_id['image'] . '" style="width: 150px;border-radius: 50%;" alt="">
                        </div>
                        <div class="thread-body row d-flex align-items-center">
                            <div class="thread-title row">

                                <div class="">Username: ' . $user_id['username'] . '</div>
                            </div>
                        </div>
                </div>
                <div class="thread-content-wrapper col mt-3">
                    <div class="content w-100">
                        ' . $comments['message'] . '
                    </div>
                </div>';
                }
            }
            ?>
            <!--
                <div class="thread-title mb-4">
                    <h4>Thread Title</h4>
                </div>
                <div class="thread-box mb-3 col col-md-3">
                        <div class="user-image row" style="width: fit-content;margin-right: 0.9rem;">
                            <img src="images/users/admin.gif" style="width: 150px;border-radius: 50%;height: 130px;" alt="">
                        </div>
                        <div class="thread-body row d-flex align-items-center">
                            <div class="thread-title row">

                                <div class="">Username: admin</div>
                            </div>
                        </div>
                </div>
                <div class="thread-content-wrapper col mt-3">
                    <div class="content w-100">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis harum asperiores consequatur earum sunt dolore facilis mollitia labore. Possimus, non officia. Velit dolorem eligendi et. Corrupti dignissimos sunt ea nobis.
                    </div>
                </div>-->
            <!-- <form action="#" method="post">
                <div class="mb-3">
                    <input type="hidden" value="<?php echo "$thread_id"; ?>" name="thread">
                    <label for="name" class="form-label" style="color: black;">content</label>
                    <textarea name="content" id="myeditor" rows="10" cols="80"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> -->
        </div>
    </div>