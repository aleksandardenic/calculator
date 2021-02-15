<?php
class Calc
{  
    public $op1;
    public $op2;
    public $operator;

    public function __construct($op1, $op2, $operator)
    {
        $this->op1 = $op1;
        $this->op2 = $op2;
        $this->operator = $operator;
    }

    public function calcMethod()
    {

        if((!is_numeric($this->op1)) || (!is_numeric($this->op2)))
        {
            echo "value must bi numeric";
        }
        else{
            switch($this->operator) 
            {
                case '+':
                $result = $this->op1 + $this->op2;
                break;

                case '-':
                $result =  $this->op1 - $this->op2;
                break;

                case '*':
                $result =  $this->op1 * $this->op2;
                break;

                case '/':
                $result =  $this->op1 / $this->op2;
                break;

                default:
                $result =  "Error";
            }  
        
        echo "Result is" ." " .$result;
        }
    }
}
?>
