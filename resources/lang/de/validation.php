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

    'accepted' => 'Die :attribute muss akzeptiert werden.',
    'accepted_if' => 'Die :attribute muss akzeptiert werden, wenn :other ist :value.',
    'active_url' => 'Die :attribute ist keine gültige URL.',
    'after' => 'Die :attribute muss ein Datum nach sein :date.',
    'after_or_equal' => 'Die :attribute muss ein Datum nach oder gleich sein :date.',
    'alpha' => 'Die :attribute darf nur Buchstaben enthalten.',
    'alpha_dash' => 'Die :attribute darf nur Buchstaben, Zahlen, Bindestriche und Unterstriche enthalten.',
    'alpha_num' => 'Die :attribute darf nur Buchstaben und Zahlen enthalten.',
    'array' => 'Die :attribute muss ein Array sein.',
    'before' => 'Die :attribute muss ein Datum davor sein :date.',
    'before_or_equal' => 'Die :attribute muss ein Datum vor oder gleich sein :date.',
    'between' => [
        'numeric' => 'Die :attribute muss dazwischen sein :min und :max.',
        'file' => 'Die :attribute muss dazwischen sein :min und :max kilobytes.',
        'string' => 'Die :attribute muss dazwischen sein :min und :max Zeichen.',
        'array' => 'Die :attribute muss dazwischen sein :min und :max Produkte.',
    ],
    'boolean' => 'Die :attribute Feld muss wahr oder falsch sein.',
    'confirmed' => 'Die :attribute Bestätigung stimmt nicht überein.',
    'current_password' => 'Das Passwort ist inkorrekt.',
    'date' => 'Die :attribute ist kein gültiges Datum.',
    'date_equals' => 'Die :attribute muss ein Datum gleich sein :date.',
    'date_format' => 'Die :attribute entspricht nicht dem Format :format.',
    'declined' => 'Die :attribute muss abgelehnt werden.',
    'declined_if' => 'Die :attributemuss abgelehnt werden, wenn :other ist :value.',
    'different' => 'Die :attribute und :other muss anders sein.',
    'digits' => 'Die :attribute muss sein :digits Ziffern.',
    'digits_between' => 'Die :attribute muss dazwischen sein :min und :max Ziffern.',
    'dimensions' => 'Die :attribute hat ungültige Bildabmessungen.',
    'distinct' => 'Die :attribute Feld hat einen doppelten Wert.',
    'email' => 'Die :attribute muss eine gültige E-Mail-Adresse sein.',
    'ends_with' => 'Die :attribute muss mit einem der folgenden enden: :values.',
    'exists' => 'Die selected :attribute ist ungültig.',
    'file' => 'Die :attribute muss eine Datei sein.',
    'filled' => 'Die :attribute Feld muss einen Wert haben.',
    'gt' => [
        'numeric' => 'Die :attribute muss größer sein als :value.',
        'file' => 'Die :attribute muss größer sein als :value kilobytes.',
        'string' => 'Die :attribute muss größer sein als :value Zeichen.',
        'array' => 'Die :attribute muss mehr haben als :value items.',
    ],
    'gte' => [
        'numeric' => 'Die :attribute muss größer oder gleich sein :value.',
        'file' => 'Die :attribute muss größer oder gleich sein :value kilobytes.',
        'string' => 'Die :attribute muss größer oder gleich sein :value Zeichen.',
        'array' => 'Die :attribute haben müssen :value Artikel oder mehr.',
    ],
    'image' => 'Die :attribute muss ein Bild sein.',
    'in' => 'Die selected :attribute ist ungültig.',
    'in_array' => 'Die :attribute Feld existiert nicht in :other.',
    'integer' => 'Die :attribute muss eine ganze Zahl sein.',
    'ip' => 'Die :attribute muss eine gültige IP-Adresse sein.',
    'ipv4' => 'Die :attribute muss eine gültige IPv4-Adresse sein.',
    'ipv6' => 'Die :attribute muss eine gültige IPv6-Adresse sein.',
    'json' => 'Die :attribute muss eine gültige JSON-Zeichenfolge sein.',
    'lt' => [
        'numeric' => 'Die :attribute muss kleiner sein als :value.',
        'file' => 'Die :attribute muss kleiner sein als :value kilobytes.',
        'string' => 'Die :attribute muss kleiner sein als :value Zeichen.',
        'array' => 'Die :attribute muss weniger haben als :value Produkte.',
    ],
    'lte' => [
        'numeric' => 'Die :attribute muss kleiner oder gleich sein :value.',
        'file' => 'Die :attribute muss kleiner oder gleich sein :value kilobytes.',
        'string' => 'Die :attribute muss kleiner oder gleich sein :value Zeichen.',
        'array' => 'Die :attribute darf nicht mehr haben als :value Produkte.',
    ],
    'max' => [
        'numeric' => 'Die :attribute darf nicht größer sein als :max.',
        'file' => 'Die :attribute darf nicht größer sein als :max kilobytes.',
        'string' => 'Die :attribute darf nicht größer sein als :max Zeichen.',
        'array' => 'Die :attribute darf nicht mehr haben als :max Produkte.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'Die :attribute muss mindestens :min.',
        'file' => 'Die :attribute muss mindestens :min kilobytes.',
        'string' => 'Die :attribute muss mindestens :min Zeichen.',
        'array' => 'Die :attribute muss mindestens haben :min Produkte.',
    ],
    'multiple_of' => 'Die :attribute muss ein Vielfaches von sein :value.',
    'not_in' => 'Die ausgewählt :attribute ist ungültig.',
    'not_regex' => 'Die :attribute Format ist ungültig.',
    'numeric' => 'Die :attribute muss eine Nummer sein.',
    'password' => 'Die Das Passwort ist inkorrekt.',
    'present' => 'Die :attribute Feld muss vorhanden sein.',
    'regex' => 'Die :attribute Format ist ungültig.',
    'required' => 'Die :attribute Feld ist erforderlich.',
    'required_if' => 'Die :attribute Feld ist erforderlich, wenn :other ist :value.',
    'required_unless' => 'Die :attribute field is required unless :other ist in :values.',
    'required_with' => 'Die :attribute Feld ist erforderlich, wenn :values ist gegenwärtig.',
    'required_with_all' => 'Die :attribute Feld ist erforderlich, wenn :values sind anwesend.',
    'required_without' => 'Die :attribute Feld ist erforderlich, wenn :values ist nicht hier.',
    'required_without_all' => 'Die :attribute Feld ist erforderlich, wenn keines von :values sind anwesend.',
    'prohibited' => 'Die :attribute Feld ist verboten.',
    'prohibited_if' => 'Die :attribute Feld ist verboten, wenn :other ist :value.',
    'prohibited_unless' => 'Die :attribute Feld ist verboten, es sei denn :other ist in :values.',
    'prohibits' => 'Die :attribute Feld verbietet :other von präsent zu sein.',
    'same' => 'Die :attribute und :other muss passen.',
    'size' => [
        'numeric' => 'Die :attribute muss sein :size.',
        'file' => 'Die :attribute muss sein :size kilobytes.',
        'string' => 'Die :attribute muss sein :size Zeichen.',
        'array' => 'Die :attribute muss enthalten :size Produkte.',
    ],
    'starts_with' => 'Die :attribute must start with one of the following: :values.',
    'string' => 'Die :attribute muss eine Zeichenfolge sein.',
    'timezone' => 'Die :attribute muss eine gültige Zeitzone sein.',
    'unique' => 'Die :attribute ist schon vergeben.',
    'uploaded' => 'Die :attribute konnte nicht hochgeladen werden.',
    'url' => 'Die :attribute muss eine gültige URL sein.',
    'uuid' => 'Die :attribute mEs muss eine gültige UUID sein.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
