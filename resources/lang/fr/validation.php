<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Le :attribute doit être accepté.',
    'active_url'           => 'Le :attribute n\'est pas une URL valide.',
    'after'                => 'Le :attribute doit être une date après :date.',
    'alpha'                => 'Le :attribute ne peut contenir que des lettres.',
    'alpha_dash'           => 'Le :attribute ne peut contenir que des lettres, chiffres et tirets.',
    "ascii_only"           => "Le :attribute ne peut contenir que des lettres, chiffres et tirets.",
    'alpha_num'            => 'Le :attribute ne peut contenir que des lettres and numbers.',
    'array'                => 'Le :attribute doit être un tableau.',
    'before'               => 'Le :attribute doit être une date avant :date.',
    'between'              => [
        'numeric' => 'Le :attribute Doit être entre :min et :max.',
        'file'    => 'Le :attribute Doit être entre :min et :max kilooctets.',
        'string'  => 'Le :attribute Doit être entre :min et :max caractères.',
        'array'   => 'Le :attribute must have between :min et :max articles.',
    ],
    'boolean'              => 'Le :attribute champ doit être vrai ou faux.',
    'confirmed'            => 'Le :attribute cla confirmation ne correspond pas.',
    'date'                 => 'Le :attribute Ce n\'est pas une date valide.',
    'date_format'          => 'Le :attribute ne correspond pas au format :format.',
    'different'            => 'Le :attribute et :other doit être différent.',
    'digits'               => 'Le :attribute doit être :digits chiffres.',
    'digits_between'       => 'Le :attribute Doit être entre :min et :max chiffres.',
    'dimensions'           => 'Le :attribute a des dimensions d\'image non valides.',
    'distinct'             => 'Le :attribute le champ a une valeur en double.',
    'email'                => 'Le :attribute Doit être une adresse e-mail valide.',
    'exists'               => 'La sélection :attribute est invalide.',
    'file'                 => 'Le :attribute doit être un fichier.',
    'filled'               => 'Le :attribute Champ requis.',
    'image'                => 'Le :attribute doit être une image.',
    'in'                   => 'La sélection :attribute est invalide.',
    'in_array'             => 'Le :attributele champ n\'existe pas dans :other.',
    'integer'              => 'Le :attribute doit être un entier.',
    'ip'                   => 'Le :attribute doit être une adresse IP valide.',
    'json'                 => 'Le :attribute doit être une chaîne JSON valide.',
    'max'                  => [
        'numeric' => 'Le :attribute ne peut être supérieur à :max.',
        'file'    => 'Le :attribute ne peut être supérieur à :max kilooctets.',
        'string'  => 'Le :attribute ne peut être supérieur à :max caractères.',
        'array'   => 'Le :attribute ne peut pas avoir plus de :max articles.',
    ],
    'mimes'                => 'Le :attribute doit être un fichier de type: :values.',
    'min'                  => [
        'numeric' => 'Le :attribute doit être au moins :min.',
        'file'    => 'Le :attribute doit être au moins :min kilooctets.',
        'string'  => 'Le :attribute doit être au moins :min caractères.',
        'array'   => 'Le :attribute must have at least :min articles.',
    ],
    'not_in'               => 'La sélection :attribute est invalide.',
    'numeric'              => 'Le :attribute doit être a number.',
    'present'              => 'Le :attribute field doit être present.',
    'regex'                => 'Le :attribute format est invalide.',
    'required'             => 'Le :attribute est requis.',
    'required_if'          => 'Le :attribute est requis quand :other est :value.',
    'required_unless'      => 'Le :attribute est requis unless :other est dans :values.',
    'required_with'        => 'Le :attribute est requis quand :values est présent.',
    'required_with_all'    => 'Le :attribute est requis quand :values est présent.',
    'required_without'     => 'Le :attribute est requis quand :values n\'est pas présent.',
    'required_without_all' => 'Le :attribute est requis quand aucun de :values sont présents.',
    'same'                 => 'Le :attribute et :other doivent correspondre.',
    'size'                 => [
        'numeric' => 'Le :attribute doit être :size.',
        'file'    => 'Le :attribute doit être :size kilooctets.',
        'string'  => 'Le :attribute doit être :size caractères.',
        'array'   => 'Le :attribute doit contenir :size articles.',
    ],
    'string'               => 'Le :attribute doit être une chaîne.',
    'timezone'             => 'Le :attribute doit être une zone valide.',
    'unique'               => 'Le :attribute a déjà été pris.',
    'url'                  => 'Le :attribute format est invalide.',
    "letters"              => "Le nom d'utilisateur doit contenir au moins une lettre ou un chiffre",
    "account_not_confirmed" => "Votre compte n'est pas confirmé, veuillez vérifier votre email",
	"user_suspended"        => "Votre compte a été suspendu, veuillez nous contacter en cas d'erreur",

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

    'attributes' => [
      'agree_gdpr' => 'box I agree with the processing of personal data',
    ],

];
