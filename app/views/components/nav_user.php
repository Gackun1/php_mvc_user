<?php require_once 'helpers/Session.php'; $Session = new Session();?>
<header class="navbar navbar-expand bg-light">
    <nav class="container-fluid flex-wrap">
        <div class="navbar-collapse">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-md-auto">
                    <a class="nav-link text-dark" href="<?= BASE_URL ?>index.php">ホーム</a>
                </li>
                <?php if(Session::load('auth_user')) : ?>
                <li class="nav-item col-md-auto">
                    <a class="nav-link text-dark" href="<?= BASE_URL ?>user/index.php">マイページ</a>
                </li>
                <li class="nav-item col-md-auto">
                    <a class="nav-link text-dark" href="<?= BASE_URL ?>user/edit.php">ユーザ情報</a>
                </li>
                <li class="nav-item col-md-auto">
                    <a class="nav-link text-dark" href="<?= BASE_URL ?>user/password.php">パスワード</a>
                </li>
                <li class="nav-item col-md-auto">
                    <a class="nav-link text-dark" href="<?= BASE_URL ?>user/user_item.php">購入履歴</a>
                </li>
                <?php endif; ?>
            </ul>
            <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                <?php if(Session::load('auth_user')) : ?>
                <li class="nav-item col-md-auto me-2">ようこそ<?= Session::load('auth_user')['name'] ?>さん</li>
                <li class="nav-item col-md-auto"><a class="btn btn-primary" href="<?= BASE_URL ?>user/logout.php">Sign Out</a></li>
                <?php else : ?>
                <li class="nav-item col-md-auto"><a class="btn btn-primary" href="<?= BASE_URL ?>login/">Sign In</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>