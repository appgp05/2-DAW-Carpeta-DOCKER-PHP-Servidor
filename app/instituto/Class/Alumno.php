<?php
    namespace Controladores;
    class Alumno{
        public function __construct(
            private string $name,
            private string $email
        ){}

        public function __toString(): string{
            return "$this->name ############### $this->email";
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function getEmail(): string
        {
            return $this->email;
        }


    }
?>