<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class CropperForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('image','file',[
                'label' => 'Choisissez une image à découper : ',
                'attr' => ['id' => 'fileToUpload',
                    'class' => 'form-control-file text-center'],
                'rules' => 'image',
                'error_messages' => [
                    'image.image' => 'Le fichier doit être une image.'
                ]
            ])
            ->add('imagecrop','file',[
                'label' => 'Choisissez une image à enregistrer : ',
                'attr' => ['id' => 'fileToUploadCrop',
                    'class' => 'form-control-file text-center',
                    'name' => 'file'],
                'rules' => 'required|image',
                'error_messages' => [
                    'image.required' => 'La sélection d\'une image est obligatoire.',
                    'image.image' => 'Le fichier doit être une image.'
                ]
            ])
            ->add('enregistrer','submit',[
                'attr' => ['class' => 'btn btn-primary']
            ])
            ->setMethod('POST');
    }
}
