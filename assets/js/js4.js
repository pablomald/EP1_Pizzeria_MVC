class  Buscar{
  constructor(nombre,telefono){
    this._nombre=nombre;
    this._telefono = telefono;
  }
  get nombre(){
    return this._nombre;
  }
  set nombre(nombre){
    this._nombre=nombre;
  }
  get telefono(){
    return this._telefono;
  }
  set telefono(telefono){
    this._telefono=telefono;
  }
}
