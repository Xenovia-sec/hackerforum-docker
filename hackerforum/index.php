<?php
require_once("DBconnect.php");
//$date = date('d-m-Y H:i:s',time());
require_once('head.php');
?>
<?php
include('dropdowns.php');
?>
<div class="main-content container-fluid justify-content-around d-flex mt-4 mb-4">
    <div class="col-md-8 main-wrapper-custom ">
    <?php
            if (isset($_GET["msg"]) && $_GET["msg"]== 1){
                echo '<div class="alert alert-danger" role="alert">
                        <strong> Permisson Alert </strong>You can\'t get into VIP section 
                    </div>';
            }
        ?>
        <div class="category-wrapper" style="border-radius: 10px;">
            <div class="category-header list-group-item list-group-header-custom" style="border-bottom: 0.1rem solid red; background-image: url(assets/img/red-matrix-bg.gif);">
                <h3>General</h3>
            </div>
            <div class="list-group" style="border-radius: 10px;">
                <!--Announcement with profile pic
                 <a href="#" class="list-group-item list-group-item-action list-group-custom list-group-item-custom d-flex"
                style="border-radius: 10px; border-bottom: 0.1rem solid grey;">
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
                <a href="threads.php?topic=1" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Announcements</h5>
                    </div>
                    <p class="mb-1"><small>Check here for news and updates regarding the forums.</small></p>
                </a>
                <a href="threads.php?topic=2" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Introductions</h5>
                    </div>
                    <p class="mb-1"><small>New members can introduce themselves here.</small></p>
                </a>
                <a href="threads.php?topic=3" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">World News</h5>
                    </div>
                    <p class="mb-1"><small>Discuss what's going on in the real world here.</small></p>
                </a>
                <a href="threads.php?topic=5" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Anime & Manga</h5>
                    </div>
                    <p class="mb-1"><small>Discuss anime, manga, and Japanese culture here.</small></p>
                </a>

            </div>
        </div>
        <!--LEAKS-->
        <div class="category-wrapper mt-5" style="border-radius: 10px;">
            <div class="category-header list-group-item list-group-header-custom" style="border-bottom: 0.1rem solid red; background-image: url(assets/img/red-matrix-bg.gif);">
                <h3>Leaks</h3>
            </div>
            <div class="list-group" style="border-radius: 10px;">
                <a href="threads.php?topic=7" class="list-group-item list-group-item-action list-group-custom " style="border-radius: 10px; border-bottom: 0.1rem solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Databases</h5>
                    </div>
                    <p class="mb-1"><small>Database dumps are posted here.</small></p>
                </a>
                <a href="threads.php?topic=8" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Other Leaks</h5>
                    </div>
                    <p class="mb-1"><small>Ransomware Leaks, Stealer logs, or other kinds of data that isn't considered a database.</small></p>
                </a>
                <a href="threads.php?topic=9" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Dehashed Combolist</h5>
                    </div>
                    <p class="mb-1"><small>Combolists are posted here.</small></p>
                </a>
            </div>
        </div>
        <!--Marketplace-->
        <div class="category-wrapper mt-5" style="border-radius: 10px;">
            <div class="category-header list-group-item list-group-header-custom" style="border-bottom: 0.1rem solid red; background-image: url(assets/img/red-matrix-bg.gif);">
                <h3>Marketplace</h3>
            </div>
            <div class="list-group" style="border-radius: 10px;">
                <a href="threads.php?topic=11" class="list-group-item list-group-item-action list-group-custom " style="border-radius: 10px; border-bottom: 0.1rem solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">General</h5>
                    </div>
                    <p class="mb-1"><small>Anything that doesn't fit into other sections.</small></p>
                </a>
                <a href="threads.php?topic=12" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Leaks Market</h5>
                    </div>
                    <p class="mb-1"><small>A place to buy/sell/trade databases and leaks.</small></p>
                </a>
                <a href="threads.php?topic=13" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Hosting/VPS</h5>
                    </div>
                    <p class="mb-1"><small>Hosting services for sale. e.g. Webhosting/Servers.</small></p>
                </a>
                <a href="threads.php?topic=14" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Programming</h5>
                    </div>
                    <p class="mb-1"><small>Programming services for sale. e.g. PHP/Python.</small></p>
                </a>
                <a href="threads.php?topic=15" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Security and Anonymity</h5>
                    </div>
                    <p class="mb-1"><small>Security services for sale. e.g. VPN/Proxies.</small></p>
                </a>
                <a href="threads.php?topic=16" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Graphics</h5>
                    </div>
                    <p class="mb-1"><small>Graphics design services for sale. e.g. Photoshop/Blender</small></p>
                </a>
                <a href="threads.php?topic=17" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Vouch Section</h5>
                    </div>
                    <p class="mb-1"><small>Vouch for people or give out vouch copies!</small></p>
                </a>
            </div>
        </div>
        <!--Tutorials-->
        <div class="category-wrapper mt-5" style="border-radius: 10px;">
            <div class="category-header list-group-item list-group-header-custom" style="border-bottom: 0.1rem solid red; background-image: url(assets/img/red-matrix-bg.gif);">
                <h3>Tutorials</h3>
            </div>
            <div class="list-group" style="border-radius: 10px;">
                <a href="threads.php?topic=18" class="list-group-item list-group-item-action list-group-custom " style="border-radius: 10px; border-bottom: 0.1rem solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Doxing Tutorials</h5>
                    </div>
                    <p class="mb-1"><small>Post your own tutorials on Doxing here.</small></p>
                </a>
                <a href="threads.php?topic=19" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Coding Tutorials</h5>
                    </div>
                    <p class="mb-1"><small>Tutorials on Java, Visual Basic, .NET Framework, and more should be posted here.</small></p>
                </a>
                <a href="threads.php?topic=20" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">General Tutorials</h5>
                    </div>
                    <p class="mb-1"><small>Post tutorials that don't fit into any other topics here.</small></p>
                </a>
                <a href="threads.php?topic=21" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">SE Tutorials</h5>
                    </div>
                    <p class="mb-1"><small>Social engineering tutorials and discussions.</small></p>
                </a>
            </div>
        </div>
        <!--STAFF-->
        <div class="category-wrapper mt-5" style="border-radius: 10px;">
            <div class="category-header list-group-item list-group-header-custom" style="border-bottom: 0.1rem solid red; background-image: url(assets/img/red-matrix-bg.gif);">
                <h3>Staff</h3>
            </div>
            <div class="list-group" style="border-radius: 10px;">
                <a href="threads.php?topic=22" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Scam Reports</h5>
                    </div>
                    <p class="mb-1"><small>Report users of this forum for scamming.</small></p>
                </a>
            </div>
        </div>
        <!--VIP-->
        <div class="category-wrapper mt-5" style="border-radius: 10px;">
            <div class="category-header list-group-item list-group-header-custom" style="border-bottom: 0.1rem solid red; background-image: url(assets/img/red-matrix-bg.gif);">
                <h3>VIP</h3>
            </div>
            <div class="list-group" style="border-radius: 10px;">
                <a href="threads.php?topic=23" class="list-group-item list-group-item-action list-group-custom " style="border-radius: 10px; border-bottom: 0.1rem solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">VIP News</h5>
                    </div>
                    <p class="mb-1"><small>VIP News</small></p>
                </a>
                <a href="threads.php?topic=24" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">VIP Leaks</h5>
                    </div>
                    <p class="mb-1"><small>VIP Leaks</small></p>
                </a>
                <a href="threads.php?topic=25" class="list-group-item list-group-item-action list-group-custom" style="border-radius: 10px; border-bottom: 1px solid grey;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">VIP Vulnerabilities</h5>
                    </div>
                    <p class="mb-1"><small>VIP Vulnerabilities</small></p>
                </a>
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
<!--
<div class="col-md-2 category-wrapper border-1 border border-danger" style="border-radius: 10px;">
    <div> Category<div>
            Topics
        </div>
</div>-->
</div>
</div>
<?php
include('footer.php');
?>