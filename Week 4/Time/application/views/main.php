<html>
<head>
    <title>Date and Time</title>
    <link href="/assets/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div>
        <h1>The current time and date:</h1>
        <h2><?= $this->session->userdata['date'] ?> </h2>
        <h2><?= $this->session->userdata['time']?> </h2>
    </div>
</body>
</html>