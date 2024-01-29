<!DOCTYPE html>
<html>
<head>
    <title>Currency Exchange</title>
        <style>
       
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

    h1 {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
     }

    main {
    padding: 20px;
     }

     form {
        background-color:lightblue ;
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
    text-align: center;
    }

     label {
     margin-bottom: 10px;
      }

      select,
      input[type="number"] {
       padding: 5px;
       margin-bottom: 10px;
       border-radius: 5px;
       border: none;
       }

     button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
     }

        footer {
        background-color: #f1f1f1;
        padding: 20px;
        text-align: center;
        }
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

    </style>
    
</head>
<body>
    <h1>Currency Exchange</h1>
    <form method="post" action="">Foreign to MYR <br>Select Currency:</label>
        <select name="currency" id="currency">
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="SGD">SGD</option>
            <option value="AUD">AUD</option>
            <option value="IDR">IDR</option>
            <option value="BDT">BDT</option>
            <option value="JPY">JPY</option>
            <option value="CNY">CNY</option>
            <option value="HKD">HKD</option>
            <option value="KRW">KRW</option>
            <option value="THB">THB</option>
            <option value="SAR">SAR</option>
        </select>
        <br>
        <br>
        <label for="type">Type:</label>
        <select name="type" id="type">
            <option value="normal">Normal</option>
            <option value="staff">Staff</option>
        </select>
        <label for="amount">Foreign Amount:</label>
        <input type="number" name="amount" id="amount" required>
        <br>
        <br>
        <button type="submit">Exchange</button>
    </form>

    <form method="post" action="">
        <label for="currency">MYR to Foreign Currency<br>Select Currency:</label>
        <select name="currency" id="currency">
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="SGD">SGD</option>
            <option value="AUD">AUD</option>
            <option value="IDR">IDR</option>
            <option value="BDT">BDT</option>
            <option value="JPY">JPY</option>
            <option value="CNY">CNY</option>
            <option value="HKD">HKD</option>
            <option value="KRW">KRW</option>
            <option value="THB">THB</option>
            <option value="SAR">SAR</option>
        </select>
        <br>
        <label for="amount"> MYR Amount:</label>
        <input type="number" name="amount" id="amount" required>
        <br>
        <label for="type">Type:</label>
        <select name="type" id="type">
            <option value="normal">Normal</option>
            <option value="staff">Staff</option>
        </select>
        <br>
        <br>
        <button type="submit">Exchange</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $currency = $_POST["currency"];
        $amount = $_POST["amount"];
        $type = $_POST["type"];

        $exchangeRates = [
            "USD" => 0.21,
            "EUR" => 0.19,
            "SGD" => 0.28,
            "AUD" => 0.32,
            "IDR" => 3306.93,
            "BDT" => 23.13,
            "JPY" => 31.26,
            "CNY" => 1.51,
            "HKD" => 1.65,
            "KRW" => 281.70,
            "THB" => 7.52,
            "SAR" => 0.79,
        ];

        if ($type == "staff") {
            $amount *= 0.25;
        }

        $convertedAmount = $amount / $exchangeRates[$currency];

        echo "<table>";
        echo "<table style='background-color: lightgray;'>";
        echo "<tr><th>Currency</th><th>Amount</th><th>Converted Amount</th></tr>";
        echo "<tr><td>$currency</td><td>$amount</td><td>$convertedAmount</td></tr>";
        echo "</table>";
    }
    ?>
     <footer>
        <p>&copy; 2023 Bank Bumirakyat. All rights reserved.</p>
    </footer>
</body>
</html>