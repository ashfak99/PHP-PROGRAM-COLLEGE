<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Bank | Ashfak</title>
</head>
<body>
    <?php
    class customer{
        public $name;
        public $account_no;
        public $account_type;
        public $balance;

        function set_account_no(){
           $this->account_no = rand(1111111111,9999999999);
           return $this->account_no;
        }
        function set_data($name,$account_type){
            $this->name = $name;
            $this->account_type=$account_type;
        }

        function intial_balance(){
            $this->balance = 1000;
            return $this->balance;
        }
        function deposit($deposite){
            $this->balance+=$deposite;
        }
        function withdraw($withdraw){
            if($this->balance>=$withdraw)
            {
                $this->balance-=$withdraw;
            }
            else{
                echo "Insufficient Balance";
            }
        }
        function display(){
            $ac=$this->set_account_no();
            $blnc=$this->intial_balance();
            $ac_type=$this->account_type;
            echo "Name: $this->name <br>";
            echo "Account Number : $ac <br>";
            echo "Balance : $blnc <br>";
            echo "Account Type: $ac_type <br>";
        }
    }
    $ashfak=new customer();
    $ashfak->set_data('Ashfak','Saving');
    echo $ashfak->display();
    echo "<br>";
    ?>
</body>
</html>