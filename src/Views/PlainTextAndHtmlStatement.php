<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Statement</title>
</head>

<body>
    <h2>Plain Text Statement</h2>
    <pre><?= htmlspecialchars($plainText, ENT_QUOTES, 'UTF-8') ?></pre>

    <h2>HTML Statement</h2>
    <?= $htmlText ?>
</body>

</html>