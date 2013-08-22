<?php
return array (
  'Criar usuario' => 
  array (
    'type' => 0,
    'description' => 'Criar Usuario',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Gerenciamento de Usuario' => 
  array (
    'type' => 1,
    'description' => 'Gerenciamento de Usuario',
    'bizRule' => NULL,
    'data' => NULL,
    'children' => 
    array (
      0 => 'Criar usuario',
    ),
  ),
  'Analista de Sistema' => 
  array (
    'type' => 2,
    'description' => 'Analista de Sistema',
    'bizRule' => NULL,
    'data' => NULL,
    'children' => 
    array (
      0 => 'Gerenciamento de Usuario',
    ),
  ),
  'Atualizar Usuarios' => 
  array (
    'type' => 0,
    'description' => 'Atualizar Usuarios',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'Teste' => 
  array (
    'type' => 1,
    'description' => 'teste',
    'bizRule' => NULL,
    'data' => NULL,
    'children' => 
    array (
      0 => 'Atualizar Usuarios',
      1 => 'Criar usuario',
    ),
  ),
  'Coordenador de TI' => 
  array (
    'type' => 2,
    'description' => 'Coordenador de TI',
    'bizRule' => NULL,
    'data' => NULL,
    'children' => 
    array (
      0 => 'Teste',
    ),
    'assignments' => 
    array (
      2 => 
      array (
        'bizRule' => NULL,
        'data' => NULL,
      ),
    ),
  ),
);
