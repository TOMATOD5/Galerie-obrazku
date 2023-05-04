<?php
class Galerie
{
    private array $soubory = array();
    
    
    public function __construct(private string $slozka, private int $sloupcu) {}
    
    
    public function nacti() : void
    {
        $slozka = dir($this->slozka);

        while ($polozka = $slozka->read()) 
        {
            if (strpos($polozka, '_nahled.') && is_file($this->slozka . '/' . $polozka))
            {
                $this->soubory[] = $polozka;
            }
        }
        $slozka->close();
    }
    
    
    public function vypis() : void
    {
        echo('<table id="galerie"><tr>');
        $sloupec = 0;
        foreach ($this->soubory as $soubor)
        {
            $nahled = $this->slozka . '/' . $soubor;
            $obrazek = $this->slozka . '/' . str_replace('_nahled.', '.', $soubor) ;
            echo('<td><a href="' . htmlspecialchars($obrazek) . '" rel="lightbox[galerie]"><img src="' . htmlspecialchars($nahled) . '" alt=""></a></td>');
            $sloupec++;
            if ($sloupec >= $this->sloupcu)
            {
                echo('</tr><tr>');
                $sloupec = 0;
            }
        }
        echo('</tr></table>');
    }

}
