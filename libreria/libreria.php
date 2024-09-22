<?php
include "db.php";
class Cliente {
  private $id;
  private $identificacion;
  private $nombre;
  private $numero_telefono;
  public function __construct($identificacion, $nombre, $numero_telefono) {
    $this->identificacion = $identificacion;
    $this->nombre = $nombre;
    $this->numero_telefono = $numero_telefono;
  }
  public function getIdentificacion() {
    return $this->identificacion;
  }
  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }
  public function getNombre() {
    return $this->nombre;
  }
  public function setNumeroTelefono($numero_telefono) {
    $this->numero_telefono = $numero_telefono;
  }
  public function getNumeroTelefono() {
    return $this->numero_telefono;
  }
}
class Libro {
  private $id;
  private $isbn;
  private $titulo;
  private $autor;
  private $numero_edicion;
  private $costo_diario;
  public function __construct($isbn, $titulo, $autor, $nuero_edicion, $costo_diario) {
    $this->id;
    $this->isbn = $isbn;
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->numero_edicion = $nuero_edicion;
    $this->costo_diario = $costo_diario;
  }
  public function getId() {
    return $this->id;
  }
  public function getIsbn() {
    return $this->isbn;
  }
  public function setTitulo($titulo) {
    $this->titulo = $titulo;
  }
  public function getTitulo() {
    return $this->titulo;
  }
  public function setAutor($autor) {
    $this->autor = $autor;
  }
  public function getAutor() {
    return $this->autor;
  }
  public function setNumeroEdidcion($numero_edicion) {
    $this->numero_edicion = $numero_edicion;
  }
  public function getNumeroEdicion() {
    return $this->numero_edicion;
  }
  public function setCostoDiario($costo_diario) {
    $this->costo_diario = $costo_diario;
  }
  public function getCostoDiario() {
    return $this->costo_diario;
  }
}
class Prestamo {
  private $id;
  private $libro_prestado;
  private $fecha_prestado;
  private $fecha_entrega;
  public function __construct($libro_prestado, $fecha_prestado, $fecha_entrega) {
    $this->id;
    $this->libro_prestado = [];
    $this->fecha_prestado = [];
    $this->fecha_entrega = [];
  }
  public function getId() {
    return $this->id;
  }
  public function setLibroPrestado($libro_prestado) {
    $this->libro_prestado = $libro_prestado;
  }
  public function getLibroPrestado() {
    return $this->libro_prestado;
  }
  public function setFechaPrestado($fecha_prestado) {
    $this->fecha_prestado = $fecha_prestado;
  }
  public function getFechaPrestado() {
    return $this->fecha_prestado;
  }
  public function setFechaEntrega($fecha_entrega) {
    $this->fecha_entrega = $fecha_entrega;
  }
  public function getFechaEntrega() {
    return $this->fecha_entrega;
  }
}
class Devolucion {
  private $fecha_devuelto;
  private $monto_pagado;
  private $id;
  public function __construct($fecha_devuelto, $moto_pagado) {
    $this->id;
    $this->fecha_devuelto = [];
    $this->monto_pagado = [];
  }
  public function setFechaDevuelto($fecha_devuelto) {
    $this->fecha_devuelto = $fecha_devuelto;
  }
  public function getFechaDevuelto() {
    return $this->fecha_devuelto;
  }
  public function setMontoPagado($monto_pagado) {
    $this->monto_pagado = $monto_pagado;
  }
  public function getMontoPagado() {
    return $this->monto_pagado;
  }
  public function getId() {
    return $this->id;
  }
}
