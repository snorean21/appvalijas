<?php

namespace App\Http\Controllers;

use App\Entrada;
use App\Salida;
use App\Descripcion;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    //---------------------------------------------------------------------------------------

    /* FUNCION DE VISTA DEL HOME -> LA INTERFACE DEL ADMIN */
        public function home()
        {
            //CREAMOS LA VISTA DEL HOME
            return view('portal.home');
        }

    //---------------------------------------------------------------------------------------

    /*
        APERTURA DE LA SECCION PARA EL CRUD DE LAS ENTRADAS DE VALIJA
    */

    /* FUNCION DE VISTA DEL INDEX ENTRADA DE VALIJA  */
        public function entrada_index()
        {
            //CREMOS LA VISTA DEL INDEX
            return view('portal.entrada_valija.index');
        }

    /*
        CIERRE DE LA SECCION PARA EL CRUD DE LAS ENTRADAS DE VALIJA
    */

    //---------------------------------------------------------------------------------------

    /*
        APERTURA DE LA SECCION PARA EL CRUD DE LAS SALIDAS DE VALIJA
    */

    /* FUNCION DE VISTA DEL INDEX SALIDA VALIJA */
        public function salida_index()
        {
            /* CONSULTAMOS LA BASE DE DATOS Y MOSTRAMOS LOS DATOS EN LA PAGINA INDEX */
            $salidas = Salida::all();
            return view('portal.salida_valija.index', compact('salidas'));
        }

    /* FUNCION DE LA VISTA DE CREAR NUEVA SALIDA VALIJA */
        public function salida_create()
        {
            /* CREAMOS LA VISTA DE LA CREACION DE UN NUEVO REGISTRO */
            return view('portal.salida_valija.create');
        }

    /* CODIGO CON FUNCION DE CREAR NUEVO REGISTRO EN LA BASE DE DATOS PARA LA SALIDA DE VALIJAS */
        public function salida_store(Request $request)
        {
            /* GUARDAR DATOS EN LA DB CON EL METODO ALL QUE ENVIA TODOS LOS CAMPOS ESTABLECIDOS EN EL MODELO EN EL CAMPO PROTECTED $FILLABLE */
                Salida::create($request->all());
            /* REDIRECCIONAR AL INDEX */
                return redirect()->route('salida');
        }
    /* CODIGO CON FUNCION DE CONSULTAR POR EL ID DEL REGISTRO Y VER LOS DETALLES DEL REGISTRO */
        public function salida_show($id)
        {
            /* CREAMOS LA VISTA Y SE CONSULTA EL ID */
            $salidas= Salida::findOrFail($id);
            return view('portal.salida_valija.show', compact('salidas'));
        }
    /*  */
        public function salida_edit($id)
        {
            /* CREAMOS LA VISTA Y SE EDITA EL REGISTRO */
            $salidas= Salida::findOrFail($id);
            return view('portal.salida_valija.edit', compact('salidas'));
        }
    /**/
        public function salida_update(Request $request, $id)
        {
            //ACTUALIZAMOS DATOS EN LA BASE DE DATOS
            Salida::findOrFail($id)->update($request->all());
            //REDIRECCIONAMOS A LA VISTA INDEX
            return redirect()->route('salida');
        }
    /**/
        public function salida_destroy($id)
        {
            /* LE PASAMOS EL ID Y ELIMINAMOS CON EL METODO DELETE Y SE ACTUALIZA EL CAMPO deleted_at DEL METODO
            SoftDeletes */
            Salida::findOrFail($id)->delete();
            //Redireccionamos al vista index
            return redirect()->route('salida');
        }

    /*
        CIERRE DE LA SECCION PARA EL CRUD DE LAS SALIDAS DE VALIJA
    */

    //---------------------------------------------------------------------------------------

    /*
        APERTURA DE LA SECCION PARA EL CRUD DE LAS DESCRIPCIONES DE LAS VALIJAS
    */
        public function descripcion_index()
        {
            /* CONSULTAMOS LA BASE DE DATOS Y MOSTRAMOS LOS DATOS EN LA PAGINA INDEX */
            $descripciones = Descripcion::all();
            return view('portal.salida_valija.index', compact('descripciones'));
        }
}
