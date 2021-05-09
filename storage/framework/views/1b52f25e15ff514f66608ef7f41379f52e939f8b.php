<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../resources/css/style.css">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
    <header class="header">
        <div class="menu">
            <a href="main" class="item">Fact of the day</a>
            <a href="add" class="item">Add facts</a>
        </div>
    </header>
    <?php echo $__env->yieldContent('content'); ?>
    <footer class="footer">
        <div class="phrase">
            <p class="fot-text">@All  rights reserved</p>
        </div>
    </footer>
</body>

</html><?php /**PATH D:\WAMP\wamp64\www\macpow\resources\views/layout/app.blade.php ENDPATH**/ ?>