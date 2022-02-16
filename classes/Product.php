<?php
    class Product 
    {
        protected $name;
        protected $price;

        public function __construct($name, $price) {
            try {
                $this->name = $name;
                $this->setPrice($price);
                    
            } catch (TypeError $error) {
                throw new Exception ($error->getMessage());
            }    
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Set the value of price
         *
         * @return  self
         */ 
        

        public function setPrice(float $price)
        {
            if($price < 10) {
                throw new Exception ("Il prezzo non è corretto");
            } 
            
            $this->price = $price;

            return $this;
        }
    }
?>