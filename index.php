<!-- casting(tip cevirme) -->

<?php



//    (int)


// $kesirEded=4.9;
// $tamEded=(int) $kesirEded;

// echo $tamEded;

// (int) ve intval()
// (float) ve floatval ()
// (bool) ve boolval ()
// (string) ve strval () 
// (array)

// function topla (int $a) {

// }




// $num=24;

// $f=(float) ($num / 2) - (int) ($num / 2);

// if ($f) {
//     echo "Number is odd";
// } else {
//     echo "Number is even";
// }


// round()-yuvarlaqlasdirma
// ceil()-yuxari yuvarlaqlasdirma
// floar()-asagi yuvarlaqlasdirir
// intdiv()-nadiren istifade olunur tam bolunme emeliyyatini heyata keciri ve neticeni tam eded kimi qaytarir
// number_format()-ededi mueyyen edilmis format ile yuvarlaqlasdirir.

// bcadd(), bcsub(),bcmul() ,bcmod(),bcsqr()

// PHP_ROUND_HALF_UP
// PHP_ROUND_HALF_DOWN
// PHP_ROUND_HALF_EVEN
// PHP_ROUND_HALF_ODD


// echo round (2.1,0, PHP_ROUND_HALF_UP);

class Invoice 
{
    private $subtotal;
    private $taxRate;

    public function __construct($subtotal,$taxRate)
    {
        $this->subtotal =$subtotal;
        $this->taxRate =$taxRate;
    }

    public function calculateTotal():float
    {
        $tax=$this->subtotal*$this->taxRate;

        $total=$this->subtotal + $tax;

        return round($total,0);
    }
}

$invoice=new Invoice(12312.22,0.18);

echo "Musterinin umumi borcu " .$invoice->calculateTotal(). "AZN";