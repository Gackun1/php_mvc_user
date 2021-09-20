<div class="container">
    <h2 class="h2">会員登録</h2>
    <table class="confirm-table">
        <thead>
            <tr class="table confirm-table__head-row">
                <th scope="col" colspan="2" class="confirm-table__head-ttl">入力内容</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table confirm-table__body-row">
                <th class="confirm-table__body-ttl">氏名</th>
                <td class="confirm-table__txt"><?= @$user->value['name'] ?></td>
            </tr>
            <tr class="table confirm-table__body-row">
                <th class="confirm-table__body-ttl">メールアドレス</th>
                <td class="confirm-table__txt"><?= @$user->value['email'] ?></td>
            </tr>
            <tr class="table confirm-table__body-row">
                <th class="confirm-table__body-ttl">パスワード</th>
                <td class="confirm-table__txt">表示されません</td>
            </tr>
            <tr class="table confirm-table__body-row">
                <th class="confirm-table__body-ttl">性別</th>
                <td class="confirm-table__txt"><?= @$user->value['gender'] === 'male' ? '男性' : '女性' ?></td>
            </tr>
        </tbody>
    </table>
    <form action="add.php" method="post">
        <input type="hidden" class="form-control" name="name" value="<?= @$user->value['name'] ?>">
        <input type="hidden" class="form-control" name="email" value="<?= @$user->value['email'] ?>">
        <input type="hidden" class="form-control" name="password" value="<?= @$user->value['password'] ?>">
        <input type="hidden" class="form-control" name="gender" value="<?= @$user->value['gender'] ?>">
        <div class="button-box">
            <button class="button-box__item btn btn-primary">登録</button>
            <a href="index.php" class="button-box__item btn fw-bold text-primary bg-white border border-primary">修正</a>
        </div>
    </form>
</div>