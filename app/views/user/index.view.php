<div class="container">
    <h2 class="h2">ユーザホーム</h2>
    <p>ようこそ<?= Session::load('auth_user')['name'] ?>さん</p>
    <div class="d-flex flex-column gap-2 col-6">
        <a href="edit.php" class="btn btn-primary btn-lg">登録内容の確認・変更</a>
        <a href="password.php" class="btn btn-primary btn-lg">パスワードの変更</a>
        <a href="" class="btn btn-primary btn-lg">購入履歴</a>
    </div>
</div>