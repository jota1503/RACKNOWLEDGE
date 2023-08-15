class usuario {
    constructor(
        prim_nom, seg_nom, prim_ape, seg_ape, fechaNaci, tip_doc, num_doc, telefono, correo, idroles, idnivel, idtemas, idsoporte){
        this._prim_nombre = prim_nom;
        this._seg_nombre = seg_nom;
        this._prim_ape = prim_ape;
        this._seg_ape = seg_ape;
        this._fechaNaci = fechaNaci;
        this._tip_doc = tip_doc;
        this._num_doc = num_doc;
        this._telefono = telefono;
        this._correo = correo;
        this._idroles = idroles;
        this._idnivel = idnivel;
        this._idtemas = idtemas;
        this._idsoporte = idsoporte;
    }
    iniciarSesion(){};
    realizarActividades(){};
    indagarDatosCuriosos(){};
}

class nivel_educativo extends usuario{
    constructor(nivelEducativo){
    this._nivelEducativo = nivelEducativo;
    }
    seleccionarNivelEducativo(){};
}

class roles extends usuario{
    constructor(roles){
        this._roles = roles;
    }
    seleccionarRol(){};
}

class soporte extends usuario{
    constructor(solicitud, telefono, correo){
        this._solicitud = solicitud;
        this._telefono = telefono;
        this._correo = correo;
    }
    solucionarFallos(){};
}

class configuracion{
    constructor(perfil, privacidad_y_seguridad, foto, informacion, estado, metodo_de_pago, id_soporte){
        this._perfil = perfil;
        this._privacidad_y_seguridad = privacidad_y_seguridad;
        this._foto = foto;
        this._informacion = informacion;
        this._estado = estado;
        this._metodo_de_pago = metodo_de_pago;
        this._id_soporte = id_soporte;
    }
    realizarMinijuegos(){};
}

class temas{
    constructor(titulo, descripcion, categoria, id_minijuegos){
        this._titulo = titulo;
        this._descripcion = descripcion;
        this._categoria = categoria;
        this._id_minijuegos = id_minijuegos;
    }
    observarDatosCuriosos(){};
}

class minijuegos{
    constructor(nombre, descripcion, categoria, puntuacion, id_evaluaciones){
        this._nombre = nombre;
        this._descripcion = descripcion;
        this._categoria = categoria;
        this._puntuacion = puntuacion;
        this._id_evaluacion = id_evaluaciones;
    }
    realizarMinijuegos(){};
}

class evaluacion{
    constructor(nombre, nota, genero, categoria, puntuacion){
        this._nombre = nombre;
        this._nota = nota;
        this._genero = genero;
        this._categoria = categoria;
        this._puntuacion = puntuacion;
    }
    realizarEvaluaciones(){};
}