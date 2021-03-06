<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted' => 'Le champ :attribute doit être accepté.',
    'active_url' => "Le champ :attribute n'est pas une URL valide.",
    'after' => 'Le champ :attribute doit être une date postérieure au :date.',
    'after_or_equal' => 'Le champ :attribute doit être une date postérieure ou égale au :date.',
    'alpha' => 'Le champ :attribute doit contenir uniquement des lettres.',
    'alpha_dash' => 'Le champ :attribute doit contenir uniquement des lettres, des chiffres et des tirets.',
    'alpha_num' => 'Le champ :attribute doit contenir uniquement des chiffres et des lettres.',
    'array' => 'Le champ :attribute doit être un tableau.',
    'before' => 'Le champ :attribute doit être une date antérieure au :date.',
    'before_or_equal' => 'Le champ :attribute doit être une date antérieure ou égale au :date.',
    'between' => [
        'numeric' => 'La valeur de :attribute doit être comprise entre :min et :max.',
        'file' => 'La taille du fichier de :attribute doit être comprise entre :min et :max kilo-octets.',
        'string' => 'Le texte :attribute doit contenir entre :min et :max caractères.',
        'array' => 'Le tableau :attribute doit contenir entre :min et :max éléments.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'Le champ de confirmation :attribute ne correspond pas.',
    'date' => "Le champ :attribute n'est pas une date valide.",
    'date_format' => 'Le champ :attribute ne correspond pas au format :format.',
    'different' => 'Les champs :attribute et :other doivent être différents.',
    'digits' => 'Le champ :attribute doit contenir :digits chiffres.',
    'digits_between' => 'Le champ :attribute doit contenir entre :min et :max chiffres.',
    'dimensions' => "La taille de l'image :attribute n'est pas conforme.",
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'email' => 'Le champ :attribute doit être une adresse email valide.',
    'exists' => 'Le champ :attribute sélectionné est invalide.',
    'file' => 'Le champ :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => 'La valeur de :attribute doit être supérieure à :value.',
        'file' => 'La taille du fichier de :attribute doit être supérieure à :value kilo-octets.',
        'string' => 'Le texte :attribute doit contenir plus de :value caractères.',
        'array' => 'Le tableau :attribute doit contenir plus de :value éléments.',
    ],
    'gte' => [
        'numeric' => 'La valeur de :attribute doit être supérieure ou égale à :value.',
        'file' => 'La taille du fichier de :attribute doit être supérieure ou égale à :value kilo-octets.',
        'string' => 'Le texte :attribute doit contenir au moins :value caractères.',
        'array' => 'Le tableau :attribute doit contenir au moins :value éléments.',
    ],
    'image' => 'Le champ :attribute doit être une image.',
    'in' => 'Le champ :attribute est invalide.',
    'in_array' => "Le champ :attribute n'existe pas dans :other.",
    'integer' => 'Le champ :attribute doit être un entier.',
    'ip' => 'Le champ :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le champ :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le champ :attribute doit être un document JSON valide.',
    'lt' => [
        'numeric' => 'La valeur de :attribute doit être inférieure à :value.',
        'file' => 'La taille du fichier de :attribute doit être inférieure à :value kilo-octets.',
        'string' => 'Le texte :attribute doit contenir moins de :value caractères.',
        'array' => 'Le tableau :attribute doit contenir moins de :value éléments.',
    ],
    'lte' => [
        'numeric' => 'La valeur de :attribute doit être inférieure ou égale à :value.',
        'file' => 'La taille du fichier de :attribute doit être inférieure ou égale à :value kilo-octets.',
        'string' => 'Le texte :attribute doit contenir au plus :value caractères.',
        'array' => 'Le tableau :attribute doit contenir au plus :value éléments.',
    ],
    'max' => [
        'numeric' => 'La valeur de :attribute ne peut être supérieure à :max.',
        'file' => 'La taille du fichier de :attribute ne peut pas dépasser :max kilo-octets.',
        'string' => 'Le texte de :attribute ne peut contenir plus de :max caractères.',
        'array' => 'Le tableau :attribute ne peut contenir plus de :max éléments.',
    ],
    'mimes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'mimetypes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'min' => [
        'numeric' => 'La valeur de :attribute doit être supérieure ou égale à :min.',
        'file' => 'La taille du fichier de :attribute doit être supérieure à :min kilo-octets.',
        'string' => 'Le texte :attribute doit contenir au moins :min caractères.',
        'array' => 'Le tableau :attribute doit contenir au moins :min éléments.',
    ],
    'not_in' => "Le champ :attribute sélectionné n'est pas valide.",
    'not_regex' => "Le format du champ :attribute n'est pas valide.",
    'numeric' => 'Le champ :attribute doit contenir un nombre.',
    'present' => 'Le champ :attribute doit être présent.',
    'regex' => 'Le format du champ :attribute est invalide.',
    'required' => 'Le champ :attribute est obligatoire.',
    'required_if' => 'Le champ :attribute est obligatoire quand la valeur de :other est :value.',
    'required_unless' => 'Le champ :attribute est obligatoire sauf si :other est :values.',
    'required_with' => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_with_all' => 'Le champ :attribute est obligatoire quand :values sont présents.',
    'required_without' => "Le champ :attribute est obligatoire quand :values n'est pas présent.",
    'required_without_all' => "Le champ :attribute est requis quand aucun de :values n'est présent.",
    'same' => 'Les champs :attribute et :other doivent être identiques.',
    'size' => [
        'numeric' => 'La valeur de :attribute doit être :size.',
        'file' => 'La taille du fichier de :attribute doit être de :size kilo-octets.',
        'string' => 'Le texte de :attribute doit contenir :size caractères.',
        'array' => 'Le tableau :attribute doit contenir :size éléments.',
    ],
    'string' => 'Le champ :attribute doit être une chaîne de caractères.',
    'timezone' => 'Le champ :attribute doit être un fuseau horaire valide.',
    'unique' => 'La valeur du champ :attribute est déjà utilisée.',
    'uploaded' => "Le fichier du champ :attribute n'a pu être téléversé.",
    'url' => "Le format de l'URL de :attribute n'est pas valide.",
    'uuid' => 'Le champ :attribute doit être un UUID valide',

    'numeroagpm' => 'Le champ :attribute doit être XXXXXXX-X-X pour l\'adhérent.',
    'numerogmpa' => 'Le champ :attribute doit être 0XXXXXXX pour l\'adherent.',
    'numeroprofil' => 'Le champ :attribute doit être PXXXXXXXX.',
    'numeroprospect' => 'Le champ :attribute doit être XXXXXXXX.',
    'numerotego' => 'Le champ :attribute doit être 1XXXXXXXXX.',
    'numerotegoagpm' => 'Le champ :attribute doit être 12XXXXXXXX.',
    'numerotegogmpa' => 'Le champ :attribute doit être 11XXXXXXXX.',
    'numerotegoagpmelargi' => 'Le champ :attribute doit être XXXXXXX-X-X ou 12XXXXXXXX.',
    'numerotegogmpaelargi' => 'Le champ :attribute doit être 0XXXXXXX ou 11XXXXXXXX.',
    'codepostal' => 'Le champ :attribute doit être un code postal valide.',
    'departement' => 'Le champ :attribute doit être un code départemental valide.',
    'profilweb_not_exist' => 'Le champ :attribute n\'existe pas.',
    'error' => 'Erreur(s) trouvée(s)',
    'login_error' => 'Identification incorrecte',
    'logout' => 'Vous êtes déconnecté',
    'forbidden' => 'Vous n\'êtes pas autorisé(e)',
    'dqeemail' => 'Le champ :attribute doit être une adresse email valide.',
    'dqetelephone' => 'Le champ :attribute doit être un numéro téléphone valide.',
    'fixeetoumobile' => 'Au moins un numéro de téléphone est obligatoire.',
    'telephonefixe' => 'Le champ :attribute doit être un numéro téléphone fixe valide.',
    'telephonemobile' => 'Le champ :attribute doit être un numéro téléphone mobile valide.',
    'telephone' => 'Le champ :attribute doit être un numéro téléphone valide.',
    'ldappassword' => 'Le champ :attribute doit contenir au moins un chiffre, une majuscule, une minuscule et un caractère spécial',
    'iban' => 'Le champ :attribute doit être un IBAN valide.',
    'immatriculation' => 'Le champ :attribute doit être une immatriculation valide.',
    'recaptcha' => 'Le recaptcha est faux. Revalidez le formulaire (attention le javascript est requis)',
    'ville' => 'Le champ :attribute n\'existe pas.',
    'zonier' => 'Le champ :attribute n\'existe pas.',
    'surface_habitable_nbpiece' => 'Incohérence entre le nombre de pièces et la superficie habitable.',
    'assureagpm' => 'Le véhicule est déjà assuré à l\'AGPM ou remplace un véhicule assuré à l\'AGPM. Dans ce cas, il est nécessaire de mettre à jour votre contrat en cours. Nous vous remercions de bien vouloir prendre contact avec nos services au 3222, choix 1 puis 2. ',
    'bonusmalus' => 'Le coefficient de réduction majoration (Bonus/Malus) ne peut être inférieur à 0,5. (exemple de valeur attendue : 0,55 pour 45% de bonus, 1,1 pour 10% de malus, ... )',
    'usagecirculation' => 'L\'usage du véhicule est incompatible avec le kilométrage annuel.',
    'garantieremorque' => 'Remorque interdite pour cet usage.',
    'nombreanneesassurancenovice' => 'Conducteur novice non autorisé pour un véhicule immobilisé',
    'nombreanneesassuranceobtentionpermis' => 'Incohérence entre la date d\'obtention du permis et le nombre d\'années d\'assurance.',
    'categorievehicule' => 'Le véhicule  est un véhicule de collection.',
    'indexvehicule' => 'Véhicule interdit AGPM',
    'vehiculehautdegamme' => 'Véhicule haut de gamme et type garage "autre"',
    'vehiculeimmobilise' => 'Véhicule immobilisé et type garage "autre"',
    'remorqueinterdit' => 'Remorque interdite pour cette formule',
    'novice' => 'Le conducteur est assuré depuis moins de :anneenovice an(s)',
    'vehiculeimmobilisenovice' => 'Véhicule interdit pour un conducteur assuré depuis moins de :anneenovice an(s)',
    'bonusmalusratio' => 'Le coefficient de réduction majoration ( Bonus / Malus ) :crm  n\'est pas cohérent avec seulement :nombreanneesassurance année(s) d\'assurance',
    'bonusmalus0_9' => 'Le coefficient de réduction-majoration est supérieur à 0.9',
    'bonusmalus1_0' => 'Le coefficient de réduction-majoration est supérieur à 1.0',
    'interruptionassurance' => 'Vous avez une interruption d\'assurance depuis plus d\'un an',
    'nombresinistres24mois' => 'Vous avez eu un ou plusieurs sinistre(s) au cours des 24 derniers mois',
    'nombreaccidents' => 'Vous avez eu un ou plusieurs accident(s)',
    'suspensionretraitpermis36mois' => 'Vous avez eu une suspension de permis au cours des 36 derniers mois',
    'resiliationassurance' => 'Vous avez été résilié par une compagnie d\'assurance',
    'dateeffet' => 'La date souhaitée de début du contrat ne peut pas être supérieure à :joureffet jours.',
    'ageconducteur' => 'Le conducteur doit avoir au minimum :ageconducteur ans pour souscrire',
    'surveillancesurdossier' => 'La tarification en ligne n\'est pas possible',
    'tarifenligne' => 'La tarification en ligne n\'est pas possible',
    'anneeconstruction' => 'L\'habitation a été construite avant 1900',
    'zonepositioninondable' => 'L\'habitation est construite en zone inondable',
    'veranda20' => 'La superficie de la véranda est supérieure à 20m²',
    'usageprofessionnel' => 'L\'habitation est utilisée à usage professionnel',
    'superficieterrain20000' => 'La superficie du terrain est supérieure à 20 000 m²',
    'construitedur' => 'L\'habitation n\'est pas construite en dur',
    'monumenthistorique' => 'L\'habitation est classée monument historique',
    'maisonsuperficie250' => 'La superficie habitable de la maison est supérieure à 250m²',
    'maisonsuperficiedependance150' => 'La superficie des dépendances de la maison est supérieure à 150m²',
    'maisonpiece8' => 'La maison a plus de 8 pièces',
    'usagehabitationetudiant' => 'Usage de l\'habitation "logement étudiant"',
    'qualitecolocataire' => 'Qualité de l\'occupant "colocataire"',
    'habitationoutremer' => 'L\'habitation est située en outre-mer',
    'habitationcorse' => 'L\'habitation est située en Corse',
    'usagehabitationautre' => 'Usage de l\'habitation "autre logement"',
    'appartementsuperficie150' => 'La superficie habitable de l\'appartement est supérieure à 150m²',
    'appartementsuperficiedependance50' => 'La superficie des dépendances de l\'appartement est supérieure à 50m²',
    'appartementpiece8' => 'L\'appartement a plus de 8 pièces',
    'profil_partenaire' => 'L\'identifiant est incorrect',
    'civilite' => 'Choisissez votre civlité',
    'choice' => 'sélectionnez',
    'arrayin' => 'L\'une des valeurs du champ ":attribute" n\'existe pas dans [:choices].',
    'nomjeunefille' => 'Le nom de jeune fille doit vide si la civilité est Monsieur',
    'votreDepartement' => 'Votre département',
    'contactform' => 'Indiquez un numéro de département',
    'mire_pattern' => 'L\'identifiant est incorrect',
    'mire_profil' => 'Le compte n\'existe pas',
    'contact_succes' => 'Message envoyé avec succes',
    'contact_erreur' => 'Erreur technique. Essayez plus tard.',
    'nomprenom' => 'Le champ :attribute non valide',
    'agenceConseiller' => 'Choisissez l\'agence ou le conseiller à contacter',
    'option676Checkbox' => 'Choisissez la catégorie du véhicule de remplacement',
    'militaireLegionnaire' => 'Votre situation professionnelle "légionnaire" ne permet d\'adhérer en ligne.',
    'departementNaissance' => 'Le département de naissance n\'est pas renseigné',
    'declaration_succes' => 'Déclaration envoyée avec succes',
    'declaration_erreur' => 'Erreur technique. Essayez plus tard.',
    'defunt_error'=>'Avec les données renseignées, il nous est impossible de retrouver le profil du defunt. Merci de vérifier son nom, son prénom et sa date de naissance.',
    'login_error_trouve_non_prospect'=>'Une fiche non prospect existe déjà',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'placeholders' => [
        'commune' => 'Code postal ou commune',
    ],

    'attributes' => [
        'name' => 'nom',
        'username' => "nom d'utilisateur",
        'email' => 'adresse e-mail',
        'first_name' => 'prénom',
        'last_name' => 'nom',
        'password' => 'mot de passe',
        'password_confirmation' => 'confirmation du mot de passe',
        'city' => 'ville',
        'country' => 'pays',
        'address' => 'adresse',
        'phone' => 'téléphone',
        'fixe' => 'téléphone fixe',
        'mobile' => 'téléphone mobile',
        'age' => 'age',
        'sex' => 'sexe',
        'gender' => 'genre',
        'day' => 'jour',
        'month' => 'mois',
        'year' => 'année',
        'hour' => 'heure',
        'minute' => 'minute',
        'second' => 'seconde',
        'title' => 'titre',
        'content' => 'contenu',
        'description' => 'description',
        'excerpt' => 'extrait',
        'date' => 'date',
        'time' => 'heure',
        'available' => 'disponible',
        'size' => 'taille',
        'numeroagpm' => 'numéro d\'adhérent',
        'numerogmpa' => 'numéro d\'adhérent',
        'numeroprofil' => 'numéro d\'adhérent',
        'numeroprospect' => 'numéro d\'adhérent',
        'numerotego' => 'numéro d\'adhérent',
        'noAdherent' => 'numéro d\'adhérent',
        'numeroAdherent' => 'numéro d\'adhérent',
        'identifiant' => 'numéro d\'adhérent',
        'send' => 'continuer',
        'Validate'=>'valider',
        'logon' => 'se connecter',
        'dateNaissance' => 'date de naissance',
        'back' => 'retour',
        'nom' => 'nom',
        'prenom' => 'prénom',
        'iban' => 'IBAN',
        'departement' => 'département',
        'immatriculation' => 'immatriculation',
        'civilite' => 'civilité',
        'identite' => 'identité',
        'situationFamiliale' => 'situation familiale',
        'csp' => 'profession',
        'adresse' => 'adresse',
        'pays' => 'pays',
        'ligneAdresse1' => 'numéro et rue',
        'ligneAdresse2' => 'bâtiment/résidence',
        'ligneAdresse3' => 'lieu-dit',
        'codePostal' => 'code postal',
        'ville' => 'ville',
        'communication' => 'communication',
        'telephoneFixe' => 'téléphone fixe',
        'telephoneMobile' => 'téléphone mobile',
        'consentement' => 'consentement',
        'consentementDesabonnement' => 'J’accepte de recevoir des offres commerciales personnalisées et sélectionnées par Tégo par e-mail.',
        'nomJeuneFille' => 'nom de jeune fille',
        'search' => 'Chercher',
        'isearch' => 'Je recherche',
        'telephone' => 'numéro de téléphone',
        'message' => 'message',
        'commune' => 'commune',
        'rgpd' => 'J\'accepte que mes données personnelles soient utilisées par Tego',
        'choixAgenceConseiller' => 'Vous souhaitez échanger avec',
        'estAdherent' => 'Ëtes-vous adherent ?',
        'objet' => 'objet',
        'option636TierceCollision' => 'Rachat franchise tierce collision',
        'option645BrisDeGlaces' => 'Rachat franchise bris de glace (franchise 90&euro;)',
        'option650ObjetsTransportesEtAccessoires' => 'Objets transport&eacute;s et accessoires (jusqu\'&agrave; 1 000 &euro;)',
        'option633GarantieMecaniqueMoteur' => 'Garantie m&eacute;canique &eacute;tendue',
        'option675Assistance0Km' => 'Assistance panne &agrave; 0 km du domicile',
        'optionVrade24' => 'Indemnisation valeur d\'achat 24 mois',
        'option676Checkbox' => 'V&eacute;hicule de remplacement de cat&eacute;gorie B ou de cat&eacute;gorie identique',
        'option676Choice' => 'V&eacute;hicule de remplacement ?',
        'optionVrade36' => 'Indemnisation valeur d\'achat 36 mois',
        'option676VehiculeDeRemplacement' => 'oui de categorie B',
        'option676VehiculeDeRemplacementMemeCategorie' => 'oui de même catégorie',
        'option676VehiculeDeRemplacementAucun' => 'non pas de véhicule ',
        'recalculate' => 'Recalculer',
        'mire' => [
            'noAdherent' => 'Numéro d\'adhérent',
            'send' => 'Suivant'],
        'ProfilMire' => [
            'noAdherent' => 'Votre numéro d\'adhérent',
            'send' => 'Se connecter'],
        'declarantNom'=>'Nom',
        'declarantPrenom'=>'Prénom',
        'declarantQualite'=>'Lien familial par rapport au defunt',
        'declarantAdresse'=>'Adresse postale',
        'declarantEmail'=>'Adresse e-mail',
        'declarantTelephone'=>'numéro de téléphone',
        'defuntCivilite'=>'Civilité',
        'defuntNom'=>'Nom',
        'defuntPrenom'=>'Prénom',
        'defuntDateNaissance'=>'Date de naissance',
        'defuntDateDeces'=>'Date du décès'
    ],
];
