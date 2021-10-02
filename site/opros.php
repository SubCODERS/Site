<!DOCTYPE html>
<html lang="en">
<head>		
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <meta name = "format-detection" content = "telephone=no">
    <title>subCODErrs</title>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" type="text/css"  href="main.css" />

</head>
<body>
    <div class="quiz-box" id="quiz">
        <div class="quiz-header">
            <h2 id="question">Question text</h2>
            <ul>
                <li>
                    <input type="radio" name="answer" id="a" class="answer">
                    <label for="a" id="a_text">Вопрос</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="b" class="answer">
                    <label for="b" id="b_text">Вопрос</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="c" class="answer">
                    <label for="c" id="c_text">Вопрос</label>
                </li>
            </ul>
        </div>
        <button id="submit">Подвердить</button>
    </div>
    <!-- Scripts -->
    <script src="main.js"></script>
</body>  
</html>