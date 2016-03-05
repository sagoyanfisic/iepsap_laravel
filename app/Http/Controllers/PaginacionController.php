<?php

namespace iepsap\Http\Controllers;

use Illuminate\Http\Request;

use iepsap\Http\Requests;
use iepsap\Http\Controllers\Controller;

class PaginacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');

    }
    /*
     * Nosotros Controller
     */
    public  function  nosotros()
    {
        return view('nosotros.index');
    }
    public function misionvision()
    {
        return view('nosotros.viymi');
    }
    public function  director()
    {
        return view('nosotros.director');
    }
    public function  plan()
    {
        return view('nosotros.plan');
    }
    public function  historia()
    {
        return view('nosotros.historia');
    }
    /*
     * Admision Controller
     */
    public function  admision()
    {
        return view('admision.index');
    }
    public function  inicial()
    {
        return view('admision.inicial');
    }
    public function  primaria()
    {
        return view('admision.primaria');
    }
    public function  secundaria()
    {
        return view('admision.secundaria');
    }
    /*
     * Talleres
     */
    public function  talleres()
    {
        return view('talleres.index');
    }
    public function  ballet()
    {
        return view('talleres.ballet');
    }
    public function  computacion()
    {
        return view('talleres.computacion');
    }
    public function  educacion()
    {
        return view('talleres.educacionfisica');
    }
    public function  ingles()
    {
        return view('talleres.ingles');
    }
    public function  karate()
    {
        return view('talleres.karate');
    }
    /*
     *Noticia
     */
    public function  noticias()
    {
        return view('noticia.index');
    }
    /*
     * Galeria
     */
    public function  galeria()
    {
        return view('galeria.index');
    }
    /*
     * Aula Virtual
     */
    public function  aula()
    {
        return view('aulavirtual.index');
    }
    /*
     *  Contacto
     */
    public function contacto(){
        return view('contacto.index');
    }
    /*
     * Admin
     */
    public function  admin(){
        return view('admin.index');
    }
    public function login(){
        return view('admin.login');
    }


}
