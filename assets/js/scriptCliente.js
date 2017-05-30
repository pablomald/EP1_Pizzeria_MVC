class  Cliente{
  constructor(nombre,direccion,telefono){
    this._nombre=nombre;
    this._telefono = telefono;
    this._direccion = direccion;
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
  get direccion(){
    return this._direccion;
  }
  set direccion(direccion){
    this._direccion=direccion;
  }
}
