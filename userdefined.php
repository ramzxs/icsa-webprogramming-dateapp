<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date App</title>
</head>
<body>
    <h1>Date App</h1>

    <form action="?" method="get">
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td>Select a Date:</td>
            <td>
                <?php
                date_default_timezone_set("Asia/Kuwait");
                ?>

                <input type="date" name="dateToUse"
                    value="<?= isset($_GET['dateToUse'])
                        ? $_GET['dateToUse']
                        : date('Y-m-d') // 2024-02-03 ?>"
                        >
            </td>
        </tr>
        <tr>
            <td>Enter the Number of Days:</td>
            <td>
                <input type="number" name="numDays"
                    value="<?= isset($_GET['numDays'])
                        ? $_GET['numDays']
                        : '1' ?>"
                    >
            </td>
        </tr>
        <tr>
            <td> </td>
            <td>
                <button>Compute</button>
            </td>
        </tr>
        <tr>
            <td>Result:</td>
            <td>
                <?php
                if ( isset($_GET['numDays'])) {
                    $string = $_GET['dateToUse']
                        . ' '
                        . $_GET['numDays']
                        . ' days';
                    echo date('d F Y', strtotime($string));
                }
                ?>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>