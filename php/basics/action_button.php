<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Button</title>
    <style>
    body {
        margin: 0;
        padding: 0;
    }

    .action-button {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .button {
        background-color: blue;
        height: 60px;
        width: 350px;
        border: 10;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        color: white;
        font-weight: bold;
        font-style: italic;
    }

    .anchor {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 60px;
        width: 350px;
        background-color: blue;
        padding: 20px;
        margin: 0 auto;
        border-radius: 10px;
    }

    .anchor a {
        color: white;
        text-decoration: none;
        font-size: 20px;
        font-weight: bold;
        font-style: italic;
    }
    </style>
</head>

<body>
    <div class="anchor">
        <a target="_blank" href="https://www.linkedin.com/in/muhammad-ali-ijaz/">Press Me to go to LinkedIn</a>
    </div>
    <div class="action-button">
        <button class="button">
            Press Me
        </button>
    </div>
</body>

</html>