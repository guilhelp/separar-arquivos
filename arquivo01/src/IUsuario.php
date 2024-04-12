<?php

namespace App\Src;

interface IUsuario {
   public function autenticar(string $login, string $senha): bool;
   public function autorizar(): array;
}

