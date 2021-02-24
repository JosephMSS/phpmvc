<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>ProgressBar</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/styles.css">
<script src="<?= BASE_URL ?>assets/js/script.js"></script>
<style>
        .progressBar-container {
            border: black 5px solid;
            width: 50%;
        }

        .progressBar {
            height: 20px;
            width: <?php echo $progress . '%' ?>;
            /* width:50% ; */
            background-color: green;
        }
    </style>
</head>

<body>
    <h1 class="red">Index</h1>
    <h2 class="red">Instructions</h2>
    <p>In the first text box the number of the progress that was made is written and in the second box the total is written. When these two boxes are full, press the button "Sent", after clicking the button the bar will be filled progress with the percentage according to the data entered
</p>
    <form action="<?= BASE_URL ?>Page/progressBar" method="post">
        <div class="grid-container">

            <div class="grid-content">
                <label for="quantity">Quantity</label>
                <input type="number" min="0" name="quantity" id="quantity" required="required">
            </div>
            <div class="grid-content">
                <label for="goal">Goal</label>
                <input type="number" min="0" name="goal" id="goal" required="required">
            </div>
            <input type="submit" value="send">
        </div>
    </form>
    <button onclick="hide()">Hide/show Progress Bar</button>
    <div id="bar">
        <strong>Progress: <?php echo $progress . '%' ?></strong>
        <div class="progressBar-container">
            <div class="progressBar"></div>
        </div>
    </div>
</body>

</html>