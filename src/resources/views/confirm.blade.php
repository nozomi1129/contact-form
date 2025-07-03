<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('../css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('../css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('../css/confirm.css') }}" />
</head>
<body>

    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Contact Form
            </a>
        </div>
    </header>

    <main>
        <div class="content">
            <h2 class="content__ttl">
                お問い合わせ内容確認
            </h2>

            <form class="confirm-form" action ="/thanks" method="post">
            @csrf
            <div class="confirm-table">
                <table class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お名前</th>
                        <td class="confirm-table__text"><input type="text" name="name" value="{{ $contact['name'] }}" readonly /></td>
                    </tr>

                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">メールアドレス</th>
                        <td class="confirm-table__text"><input type="text" name="email" value="{{ $contact['email'] }}" readonly /></td>
                    </tr>

                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">電話番号</th>
                        <td class="confirm-table__text"><input type="text" name="tel" value="{{ $contact['tel'] }}" readonly /></td>
                    </tr>

                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせ内容</th>
                        <td class="confirm-table__text"><input type="text" name="content" value="{{ $contact['content'] }}" readonly /></td>
                    </tr>
                </table>
                    <input type="submit" class="confirm-btn" value="送信"/>
            </div>
            </form>
        </div>
    </main>
</body>