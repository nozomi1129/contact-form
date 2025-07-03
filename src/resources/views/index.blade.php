<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('../css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('../css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('../css/index.css') }}" />
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
                お問い合わせ
            </h2>

            <form class="form" action ="/contacts/confirm" name="contact" method="post">
            @csrf
                <div class="form-item">
                    <div class="form-item-label">
                        <span class="form-label">お名前</span>
                        <span class="form-label-required">必須</span>
                    </div>
                    <div class="form-text">
                        <input type="text" name="name" class="form-item-input" placeholder="テスト太郎"/>
                    </div>
                    <div class="form__error">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-item">
                    <div class="form-item-label">
                        <span class="form-label">メールアドレス</span>
                        <span class="form-label-required">必須</span>
                    </div>
                    <div class="form-text">
                        <input type="email" name="email" class="form-item-input" placeholder="test@example.com"/>
                    </div>
                    <div class="form__error">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-item">
                    <div class="form-item-label">
                        <span class="form-label">電話番号</span>
                        <span class="form-label-required">必須</span>
                    </div>
                    <div class="form-text">
                        <input type="tel" name="tel" class="form-item-input" placeholder="09012345678"/>
                    </div>
                    <div class="form__error">
                        @error('tel')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-item">
                    <div class="form-item-label">
                        <span class="form-label">お問い合わせ内容</div>
                    </div>
                    <div class="form-text">
                        <textarea name="content" class="form-item-textarea" placeholder="資料をいただきたいです"></textarea>
                    </div>
                </div>

                <input type="submit" class="form-btn" value="送信"/>

            </form>
        </div>
    </main>

</body>
</html>