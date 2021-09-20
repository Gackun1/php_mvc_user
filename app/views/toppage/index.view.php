<div class="container">
    <main id="top" class="d-flex justify-content-center">
        <div class="w-50 mt-3 p-5 bg-light">
            <?php if(Session::load('auth_user')) : ?>
            <a href="user/" class="w-100 btn btn-lg btn-primary mb-4">マイページ</a>
            <a href="user/logout.php" class="w-100 btn btn-lg fw-bold text-primary bg-white border border-primary">ログアウト</a>
            <?php else : ?>
            <a href="login/" class="w-100 btn btn-lg btn-primary mb-4">ログイン</a>
            <a href="regist/" class="w-100 btn btn-lg fw-bold text-primary bg-white border border-primary">会員登録</a>
            <?php endif; ?>
        </div>
    </main>
</div>