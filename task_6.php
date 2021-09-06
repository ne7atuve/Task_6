<?php

$blocks = [

[
    "img" => "img/demo/authors/sunny.png",
    "alt" => "Sunny A.",
    "circle" => "img-thumbnail img-responsive rounded-circle",
    "width" => "5rem",
    "height" => "5rem",
    "indent" => "ml-2 mr-3",
    "interval" => "m-0",
    "developer" => "Sunny A. (UI/UX Expert)",
    "spacing" => "m-0 fw-300",
    "twitter" => "https://twitter.com/@myplaneticket",
    "visit_site" => "text-info fs-sm",
    "target" => "_blank",
    "href" => "@myplaneticket",
    "wrap" => "https://wrapbootstrap.com/user/myorange",
    "tittle" => "Contact Sunny",
    "icon_message" => "fal fa-envelope"
],

[
    "img" => "img/demo/authors/josh.png",
    "alt" => "Jos K.",
    "circle" => "img-thumbnail img-responsive rounded-circle",
    "width" => "5rem",
    "height" => "5rem",
    "indent" => "ml-2 mr-3",
    "interval" => "m-0",
    "developer" => "Jos K. (ASP.NET Developer)",
    "spacing" => "m-0 fw-300",
    "twitter" => "https://twitter.com/@atlantez",
    "visit_site" => "text-info fs-sm",
    "target" => "_blank",
    "href" => "@atlantez",
    "wrap" => "https://wrapbootstrap.com/user/Walapa",
    "tittle" => "Contact Jos",
    "icon_message" => "fal fa-envelope"
],

[
    "img" => "img/demo/authors/jovanni.png",
    "alt" => "Jovanni Lo",
    "circle" => "img-thumbnail img-responsive rounded-circle",
    "width" => "5rem",
    "height" => "5rem",
    "indent" => "ml-2 mr-3",
    "interval" => "m-0",
    "developer" => "Jovanni L. (PHP Developer)",
    "spacing" => "m-0 fw-300",
    "twitter" => "https://twitter.com/@lodev09",
    "visit_site" => "text-info fs-sm",
    "target" => "_blank",
    "href" => "@lodev09",
    "wrap" => "https://wrapbootstrap.com/user/lodev09",
    "tittle" => "Contact Jovanni",
    "icon_message" => "fal fa-envelope"
],

[
    "img" => "img/demo/authors/roberto.png",
    "alt" => "Jovanni Lo",
    "circle" => "img-thumbnail img-responsive rounded-circle",
    "width" => "5rem",
    "height" => "5rem",
    "indent" => "ml-2 mr-3",
    "interval" => "m-0",
    "developer" => "Roberto R. (Rails Developer)",
    "spacing" => "m-0 fw-300",
    "twitter" => "https://twitter.com/@sildur",
    "visit_site" => "text-info fs-sm",
    "target" => "_blank",
    "href" => "@sildur",
    "wrap" => "https://wrapbootstrap.com/user/sildur",
    "tittle" => "Contact Roberto",
    "icon_message" => "fal fa-envelope"
],


];


?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <?php foreach($blocks as $list): ?>
                            <div class="<?php if ($list["alt"] == "Sunny A." or $list["alt"] == "Jos K.") echo "rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0"; else echo "banned rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0" ?>">
                                <img src="<?php echo $list["img"]; ?>" 
                                     alt="<?php echo $list["alt"]; ?>" 
                                     class="<?php echo $list["circle"]; ?>" 
                                     style="width: <?php echo $list["width"]; ?>; 
                                     height: <?php echo $list["height"]; ?>;">
                                     <div class="<?php echo $list["indent"]; ?>">
                                    <h5 class="<?php echo $list["interval"]; ?>">
                                        <?php echo $list["developer"]; ?>
                                        <small class="<?php echo $list["spacing"]; ?>">
                                            <?php if($list["developer"] == "Sunny A. (UI/UX Expert)") echo "Lead Author"; else echo "Partner &amp; Contributor" ?>
                                        </small>
                                    </h5>
                                    <a href="<?php echo $list["twitter"]; ?>" 
                                        class="<?php echo $list["visit_site"]; ?>" 
                                        target="<?php echo $list["target"]; ?>">
                                        <?php  echo $list["href"]?></a> -
                                    <a href="<?php echo $list["wrap"]; ?>" 
                                        class="<?php echo $list["visit_site"]; ?>" 
                                        target="<?php echo $list["target"]; ?>">
                                        <i class="<?php echo $list["icon_message"] ?>"></i></a>
                                </div>
                            </div>
                             <?php endforeach; ?>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
</main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>