<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<div id="result"></div>

<body>
    <textarea onkeyup="genrate_qurcode(this.value)" cols="50" rows="5"></textarea>
</body>
<script>
    function genrate_qurcode(sample) {
        $.ajax({
            type: 'post',
            url: 'genrator.php',
            data: {
                sample: sample
            },
            success: function(code) {
                $('#result').html(code);
            }

        });
    }
</script>

</html>