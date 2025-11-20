<?php
    namespace Class;
    class Alumno{
        public function __construct(
            private string $name,
            private string $email
        ){}

        public function __toString(): string{
            return "$this->name, $this->email";
        }
    }
?>