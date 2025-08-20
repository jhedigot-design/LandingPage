<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator with Functions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
            margin-top: 50px;
        }
        .calc {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        input, select {
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            border: none;
            background: #4CAF50;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #45a049;
        }
        h2 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="calc">
        <h1>PHP Calculator</h1>
        <form method="post">
            <input type="number" name="num1" step="any" required>
            <select name="operation">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="mul">*</option>
                <option value="div">/</option>
            </select>
            <input type="number" name="num2" step="any" required>
            <br><br>
            <button type="submit" name="submit">Calculate</button>
        </form>

        <?php
   
        function addNumbers($a, $b) {
            return $a + $b;
        }

        function subNumbers($a, $b) {
            return $a - $b;
        }

        function mulNumbers($a, $b) {
            return $a * $b;
        }

        function divNumbers($a, $b) {
            if ($b == 0) {
                return "Error: Division by zero!";
            }
            return $a / $b;
        }

     
        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = "";

            switch ($operation) {
                case "add":
                    $result = addNumbers($num1, $num2);
                    break;
                case "sub":
                    $result = subNumbers($num1, $num2);
                    break;
                case "mul":
                    $result = mulNumbers($num1, $num2);
                    break;
                case "div":
                    $result = divNumbers($num1, $num2);
                    break;
            }
            echo "<h2>Result: $result</h2>";
        }
        ?>
    </div>
</body>
</html>
