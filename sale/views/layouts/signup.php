<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/7
 * Time: 9:32
 */

?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?=$this->title;?> | 注册</title>

    <link href="/inspinia/css/bootstrap.min.css" rel="stylesheet">
    <link href="/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/inspinia/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/inspinia/css/animate.css" rel="stylesheet">
    <link href="/inspinia/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<?=$content;?>

<!-- Mainly scripts -->
<script src="/inspinia/js/jquery-3.1.1.min.js"></script>
<script src="/inspinia/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/inspinia/js/plugins/iCheck/icheck.min.js"></script>
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>
</body>

</html>
