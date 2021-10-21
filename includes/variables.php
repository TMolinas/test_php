<?php

class Beanie {

    public static $inc;
    public $id;
    public $name;
    public $price;
    public $description;
    public $image;
    public $size;
    public $matter;

    const SIZE = ['S'=>'S','M'=>'M','L'=>'L','XL'=>'XL'];
    const MATTER = ['Laine', 'Laine bio', 'Synthetique', 'Cachemire'];

    /**
     * Beanie constructor.
     * @param $name
     * @param $price
     * @param $description
     * @param $image
     * @param $size
     * @param $matter
     */
    public function __construct($name, $price, $description, $image, $size, $matter)
    {
        if (!Beanie::$inc) {
            Beanie::$inc = 0;
        }
        $this->id = Beanie::$inc++;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
        $this->size = $size;
        $this->matter = $matter;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getMatter()
    {
        return $this->matter;
    }

    /**
     * @param mixed $matter
     */
    public function setMatter($matter)
    {
        $this->matter = $matter;
    }




}

$beanie1 = new Beanie(
    'Bonnet en laine',
          10,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.',
    'images/1.jpg',
    Beanie::SIZE['S'],
    Beanie::MATTER[0]);
$beanie2 = new Beanie(
    'Bonnet en laine bio',
    14,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.',
    'images/2.jpg',
    Beanie::SIZE['M'],
    Beanie::MATTER[1]);

$beanie3 = new Beanie(
    'Bonnet en laine et cachemire',
    20,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.',
    'images/3.jpg',
    Beanie::SIZE['M'],
    Beanie::MATTER[3]);

$beanie4 = new Beanie(
    'Bonnet arc-en-ciel',
    12,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.',
    'images/4.jpg',
    Beanie::SIZE['M'],
    Beanie::MATTER[0]);



$mesProduits = [
        $beanie1,
        $beanie2,
        $beanie3,
        $beanie4

    ];

$password = 'toto';
?>