class Agregar{
  constructor(idpro,cantidad){
    this._idpro=idpro;
    this._cantidad=cantidad;
  }  
  get idpro(){
    return this._idpro;
  }
  set idpro(idpro){
    this._idpro=idpro;
  }

  get cantidad(){
    return this._cantidad;
  }
  set cantidad(cantidad){
    this._cantidad=cantidad;
  }

}
