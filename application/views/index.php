

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html>

    <head>

        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

		<?php include 'includes.php';?>

        <title><?php echo $page_title;?> | <?php echo $system_title;?></title>

    </head>

    

    

<body>

    <?php include 'header.php';?>

    <?php include $this->session->userdata('login_type').'/navigation.php';?>

    <div class="main-content">

		<?php include 'page_info.php';?>

        <div class="container-fluid padded">

        <?php
            $login_type = $this->session->userdata('login_type');
            $page_to_include = "";

            if ($login_type === 'pharmacist') {
                $page_to_include = "admin/" . $page_name . '.php';
            } else {
                $page_to_include = $login_type . '/' . $page_name . '.php';
            }

            include $page_to_include;
         ?>

        </div>        

	<?php include 'footer.php';?>

    </div>

    

</body>

</html>