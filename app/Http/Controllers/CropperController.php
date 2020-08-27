<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Forms\CropperForm;
use Session;

class CropperController extends Controller
{
    use FormBuilderTrait;

    public function index()
    {
        Session::forget('error');
        Session::forget('success');

        $form = $this->form(CropperForm::class);

        return view('test', compact('form'));
    }

    public function validation(Request $request)
    {
        Session::forget('error');
        Session::forget('success');

        $form = $this->form(CropperForm::class);

        $image = $form->getFieldValues()['imagecrop'];

        // Or automatically redirect on error. This will throw an HttpResponseException with redirect
        $form->redirectIfNotValid();


        $nom = $image->getClientOriginalName();
        if(!file_exists('./images' . '/' . $nom) && $image->move('./images', $nom)){
            Session::put('success','Votre image est enregistrée !');
        }
        else{
            Session::put('error','Désolé mais votre image ne peut pas être enregistrée !');
        }

        return view('test', compact('form'));
    }

}
