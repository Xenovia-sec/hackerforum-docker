<?php
require_once("DBconnect.php");
require_once("auth_control.php");
$date = date('H:i',time());

if (isset($_POST['message']) && isset($_POST['send_to']) && is_numeric($_POST['send_to'])){
    $ins = $db->prepare("INSERT INTO admin_messages(message,owner,user_id,send_to) VALUES (:message,:owner,:user_id,:send_to)");
    $ins->execute([
        "message"=> htmlspecialchars($_POST['message']),
        "owner"=> htmlspecialchars($jwt_username),
        "user_id"=> $jwt_userid,
        "send_to"=> $_POST['send_to'],
    ]);
}


$q = $db->prepare("SELECT * FROM admin_messages");
$q->execute();
if ($jwt_userid == 1){
    $send_to = 2;
}else{
    $send_to = 1;
}
require_once('head.php');
include('dropdowns.php');
?>
<!--<div class="container">-->
<div class="main-content container-fluid justify-content-around d-flex mt-4 mb-4">
    <div class="side-content col-sm-3">
        <div class="side-content">
            <div class="col-md-12 category-wrapper" style="border-radius: 10px;">
                <a href="#" class="list-group-item list-group-item-action list-group-custom list-group-item-custom d-flex" style="border-radius: 10px; border-bottom: 0.1rem solid grey;">
                    <div class="content-col row">
                        <div class="last-creator col d-flex justify-content-around">
                            <img class="col-md-4 col" src="assets/img/lastcreator.jpg" alt="" srcset="" style="width: 50px; border-radius: 50%; height: 50px;">
                        </div>
                        <div class="col d-flex w-100 align-items-center">
                            <h5 class="mb-1">omnipotent</h5>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>
    <div class="message-wrapper d-flex col-md-6 row" style="min-height: 60vh;border: red solid 1px;padding: 11px;border-radius: 15px;">
        <div class="messagebox w-100">
            <div class="message-row row justify-content-center mt-2 mb-2">
                <div class="message text-center">
                    <span class="badge badge-danger"><?= $date ?></span>
                </div>
            </div>
            <?php
            while ($result = $q->fetch()) {
                if ($result['user_id'] == $jwt_userid || $result['send_to'] == $jwt_userid){
                    if($result['send_to'] == $jwt->get_userid($_COOKIE['auth_type'])){
                        echo '<div class="message-row row justify-content-start mt-2">
                        <div class="message text-center" style="background-color: red;border-top-right-radius: 25px;border-bottom-right-radius: 25px;width: fit-content;max-width: 500px;">
                            <p class="mt-3"><strong>'.$result['message'].'</strong></p>
                        </div>
                    </div>';
                    }else{
                        echo '<div class="message-row row justify-content-end mt-2">
                        <div class="message " style="background-color: red;border-top-left-radius: 25px;border-bottom-left-radius: 25px;width: fit-content;max-width: 500px;">
                            <p class="mt-3"><strong>'.$result['message'].'</strong></p>
                        </div>
                    </div>';
                    }
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="container justify-content-end d-flex">
    <div class="row col-md-6">
        <form action="#" method="post">
            <div class="mb-3">
                <input type="hidden" value="<?php echo "$send_to"; ?>" name="send_to">
                <label for="name" class="form-label" style="color: black;"></label>
                <textarea style="color: aliceblue;background-color: black;" name="message" id="" rows="5" cols="80"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php
include('footer.php');
?>