<html>
<head>
    <title>Random Words</title>
    <link rel="stylesheet" type="text/css" href="/assets/stylesheet.css">
    <link rel="icon" type="image/png" href="assets/LK_Favicon.png">
</head>
<body>
    <h2>Random Word (attempt #<?=$this->session->userdata('counter')?>)</h2>
    <div id = "box">
        <form action = "/main/generate" method = "post">
            <h1><?= $this->session->userdata('randomString');?></h1>
            <input id = "submitBtn" type = "submit" value = "Generate">
        </form>
    </div>

</body>
</html>