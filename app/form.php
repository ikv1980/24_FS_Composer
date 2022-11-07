<html>
    <head>
        <title>Форма отправки сообщения</title>
        <style>
            body {
                background: #eee;
                font-family: 'Montserrat', sans-serif;
                font-weight: 300;
                min-height: 100%;
                padding: 10px 20px;
                font-size: 18px;
            }
            form {padding: 5px}

            input, button, textarea {
                display: block;
                margin: 10px;
                padding: 5px 10px;
            }

            input {width: 300px}

            textarea {
                resize: none;
                height: 200px;
                width: 300px;
            }

            h1 {margin-top: 20px}
        </style>
    </head>
    <body>
        <h1>Форма отправки сообщения</h1>
        <blockquote><i>
            Проект построен при помощи Composer.<br> Добавлены две библиотеки: PhpMailer и Parsedown.<br>
            Производится отправка письма с текстом написанном в формате Markdown.
        </i></blockquote>
        <form action="" method="post">
            <input type="text" name="subject" placeholder="Введите тему письма" autocomplete="off">
            <input type="email" name="email" placeholder="Введите email" autocomplete="off">
            <textarea name="textarea" placeholder="Если ничего не писать, то отправится markDown"></textarea>
            <button type="submit">Отправить</button>
        </form>
    </body>
</html>