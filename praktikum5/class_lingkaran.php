<?php
/** 
 * Access modifier:
 * 1. public : atribut / method dapat di akses walaupun di luar class
 * 2. private : atribut / method hanya dapat diakses di dalam class
 * 3.protected : mirip seperti private, tetapi dapat juga diakses oleh class
 */
class Lingkaran {
    // properti / atribut
    private $jari;
    const PHI = 3.14;
    public function __construct( $r )
    {
        $this->jari = $r;
    }
    public function getLuas ()   
{
    return 0.5 * self::PHI * $this->jari * $this->jari ;
}
public function getKeliling()
{
    return 2 * self::PHI * $this->jari;
}
} // tutup class
?>
