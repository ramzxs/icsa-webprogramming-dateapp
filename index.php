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
                <td>Current Date/Time:</td>
                <td>
                    <?php
                    date_default_timezone_set("Asia/Kuwait");
                    echo date('d F Y h:i:sA'); // Y-m-d H:i:s
                    ?>
                </td>
            </tr>
            <tr>
                <td>Enter the Number of Days:</td>
                <td>
                    <input type="number" name="numDays"
                        value="<?= isset($_GET['numDays'])
                            ? $_GET['numDays']
                            : '10' ?>"
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
                    if (isset($_GET['numDays'])) {
                        // "2024-02-03 -9 days" -> time -> format
                        $string = date('Y-m-d H:i:s')
                            . ' '
                            . $_GET['numDays']
                            . ' days';
                        echo date('d F Y h:i:sA', strtotime($string));
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>