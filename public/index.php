<?php

class Color{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct(int $red, int $green, int $blue)
    {
        $this->red = $this->validation($red);
        $this->green = $this->validation($green);
        $this->blue = $this->validation($blue);
    }

    public function validation(int $number)
    {
        if ($number >= 0 && $number <= 255) {
            return $number;

        } else {
            die('is not validate');
        }
    }

    public function mixColor(Color $color)
    {
        $colorThree = new Color(0, 0, 0);
        $colorThree->red = round(($color->red + $this->red)/2);;
        $colorThree->green = round(($color->green + $this->green)/2);
        $colorThree->blue = round(($color->blue + $this->blue)/2);
        $colorThree = new Color($colorThree->red,$colorThree->green,$colorThree->blue );
        return $colorThree;

    }

}

$colorOne = new Color(121,201,101);
$colorTwo = new Color(190,125,220);

$mixColor = $colorOne->mixColor($colorTwo);
$arrayColor = (array)$mixColor;

$rgbColor = implode(',',$arrayColor);

print_r($rgbColor);
?>

<body style="background-color: rgb(<?php echo $rgbColor; ?>)">

</body>
