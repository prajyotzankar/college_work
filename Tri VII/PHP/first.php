<html>
    <head>
        <title>Palindrome</title>
    </head>
    <body>
        <form action="php_code_1.php" method="Get">
            Enter a number : <input type="text" name="num_1"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php
    class account{
        $acc_no;
        $balance;
        $cust_name;

        function accept()
        {
            echo "Enter the Acc no : ", "\n";
            echo "Enter the Name : ", "\n";
            echo "Enter the Balance : ", "\n";
            return $this->amt;
        }

        function deposite($deposite_amt)
        {
            $this->balance = $this->balance + $deposite_amt;
            echo "New balance = ".strval($this->balance), "\n";
        }

        function withdrawal($debit_amt)
        {
            $this->balance = $this->balance - $debit_amt;
            echo "New balance = ".strval($this->balance), "\n";
        }
       
        function main($args)
        {
            $amt;
            $option = 1;
            $transaction = new Bank();
            $sc = "Inputs";
            echo "1->Deposite", "\n";
            echo "2->Withdrawal", "\n";
            while ($option != 0)
            {
                echo "Enter the option", "\n";
                $option = (int) readline();
                switch ($option)
                {
                    case 1:
                        $transaction->deposite($transaction->accept());
                        break;
                    case 2:
                        $transaction->withdrawal($transaction->accept());
                        break;
                }
            }
        }
}
