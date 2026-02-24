<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, height=device-height, target-densitydpi=medium-dpi">
        <link rel="preconnect" href="//fonts.googleapis.com">
        <link rel="preconnect" href="//fonts.gstatic.com" crossorigin="">
        <link href="//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="index_v2.css">
    </head>
    <body>
        <div style="width: 49%; float: left;">
            <iframe id="azlogCalc" src="http://62.109.31.113/calc/iframe.php" style="border: none; width: 500px; height: 900px" seamless></iframe>
        </div>
        <div style="width: 49%; float: left; padding-top: 50px;">
            <textarea class="copytextarea" style="display:block; width: 70%; height: 100px;" disabled><iframe id="azlogCalc" src="http://62.109.31.113/calc/iframe.php" style="border: none; width: 500px; height: 900px" seamless></iframe></textarea>
            <button class="btn_main copy" style="margin-top: 25px; width: 70%;">Копировать код для вставки</button>
        </div>
        <!-- /.calcblock__results -->

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
        <script src="index3.js"></script>
        <script src="index2.js"></script>

        <script>
            var copyTextareaBtn = document.querySelector('.copy');

            copyTextareaBtn.addEventListener('click', function (event) {
                $('.copytextarea').attr('disabled', false);
                var copyTextarea = document.querySelector('.copytextarea');
                copyTextarea.focus();
                copyTextarea.select();

                try {
                    var successful = document.execCommand("copy");
                    var msg = successful ? 'successful' : 'unsuccessful';
                    console.log('Copying text command was ' + msg);
                } catch (err) {
                    console.log('Oops, unable to copy');
                }
                $('.copytextarea').attr('disabled', true);
            });
        </script>
    </body>
</html>