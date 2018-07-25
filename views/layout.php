<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if  (isset($title)): echo $this->escape($title) . ' - '; endif; ?>Mini Blog</title>
</head>
<body>
    <div id="header">
        <h1><a href="<?php echo $base_url; ?>/">Mini Blog</a></h1>
    </div>

    <div id="nav">
        <p>
            <?php if ($session->isAuthenticated()): ?>
            <a href="<?php echo $base_url; ?>/">ホーム</a>
            <a href="<?php echo $base_url; ?>/account">アカウント</a>
            <?php else: ?>
            <a href="<?php echo $base_url; ?>/account/signin">ログイン</a>
            <a href="<?php echo $base_url; ?>/account/signup">アカウント登録</a>
        </p>
        <?php endif; ?>
    </div>

    <div id="main">
        <?php echo $_content; ?>
    </div>
</body>
</html>
