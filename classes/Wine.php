<?php 

    require_once __DIR__ ."/Winery.php";
    require_once __DIR__ ."/Product.php";

    class Wine  extends Product
    {
        protected $winery;
        protected $region;
        protected $color;

        public function __construct($name, $price, $winery) {
            try {
                $this->name = $name;
                $this->setPrice($price);
                $this->setWinery($winery);
                    
            } catch (TypeError $error) {
                throw new Exception ($error->getMessage());
            }    
        }



        /**
         * Get the value of winery
         */ 
        public function getWinery()
        {
                return $this->winery;
        }

        /**
         * Set the value of winery
         *
         * @return  self
         */ 
        public function setWinery(Winery $winery)
        {
                $this->winery = $winery;

                return $this;
        }

        /**
         * Get the value of region
         */ 
        public function getRegion()
        {
                return $this->region;
        }

        /**
         * Set the value of region
         *
         * @return  self
         */ 
        public function setRegion($region)
        {
                $this->region = $region;

                return $this;
        }

        /**
         * Get the value of color
         */ 
        public function getColor()
        {
                return $this->color;
        }

        /**
         * Set the value of color
         *
         * @return  self
         */ 
        public function setColor($color)
        {
                $this->color = $color;

                return $this;
        }
    }
?>