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

    'accepted' => ':attribute harus accepted.',
    'active_url' => ':attribute is not a valid URL.',
    'after' => ':attribute harus a date after :date.',
    'after_or_equal' => ':attribute harus a date after or equal to :date.',
    'alpha' => ':attribute may only contain letters.',
    'alpha_dash' => ':attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => ':attribute hanya boleh mengandung huruf dan angka',
    'array' => ':attribute harus an array.',
    'before' => ':attribute harus a date before :date.',
    'before_or_equal' => ':attribute harus a date before or equal to :date.',
    'between' => [
        'numeric' => ':attribute harus between :min and :max.',
        'file' => ':attribute harus between :min and :max kilobytes.',
        'string' => ':attribute harus between :min and :max characters.',
        'array' => ':attribute harus between :min and :max items.',
    ],
    'boolean' => ':attribute field must be true or false.',
    'confirmed' => ':attribute konfirmasi salah',
    'date' => ':attribute is not a valid date.',
    'date_equals' => ':attribute harus a date equal to :date.',
    'date_format' => ':attribute does not match the format :format.',
    'different' => ':attribute and :other must be different.',
    'digits' => ':attribute harus :digits digits.',
    'digits_between' => ':attribute harus between :min and :max digits.',
    'dimensions' => ':attribute has invalid image dimensions.',
    'distinct' => ':attribute field has a duplicate value.',
    'email' => ':attribute harus email yang valid',
    'ends_with' => ':attribute harus with one of the following: :values.',
    'exists' => 'The selec:attribute is invalid.',
    'file' => ':attribute harus a file.',
    'filled' => ':attribute field must have a value.',
    'gt' => [
        'numeric' => ':attribute harus greater than :value.',
        'file' => ':attribute harus greater than :value kilobytes.',
        'string' => ':attribute harus greater than :value characters.',
        'array' => ':attribute harus more than :value items.',
    ],
    'gte' => [
        'numeric' => ':attribute harus greater than or equal :value.',
        'file' => ':attribute harus greater than or equal :value kilobytes.',
        'string' => ':attribute harus greater than or equal :value characters.',
        'array' => ':attribute harus :value items or more.',
    ],
    'image' => ':attribute harus sebuah gambar',
    'in' => 'The selec:attribute is invalid.',
    'in_array' => ':attribute field does not exist in :other.',
    'integer' => ':attribute harus an integer.',
    'ip' => ':attribute harus a valid IP address.',
    'ipv4' => ':attribute harus a valid IPv4 address.',
    'ipv6' => ':attribute harus a valid IPv6 address.',
    'json' => ':attribute harus a valid JSON string.',
    'lt' => [
        'numeric' => ':attribute harus less than :value.',
        'file' => ':attribute harus less than :value kilobytes.',
        'string' => ':attribute harus less than :value characters.',
        'array' => ':attribute harus less than :value items.',
    ],
    'lte' => [
        'numeric' => ':attribute harus less than or equal :value.',
        'file' => ':attribute harus less than or equal :value kilobytes.',
        'string' => ':attribute harus less than or equal :value characters.',
        'array' => ':attribute harus have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute tidak boleh lebih dari :max.',
        'file' => ':attribute tidak boleh lebih dari :max kilobytes.',
        'string' => ':attribute tidak boleh lebih dari :max huruf.',
        'array' => ':attribute may not have more than :max items.',
    ],
    'mimes' => ':attribute harus a file of type: :values.',
    'mimetypes' => ':attribute harus a file of type: :values.',
    'min' => [
        'numeric' => ':attribute harus minimal :min.',
        'file' => ':attribute harus at least :min kilobytes.',
        'string' => ':attribute harus minimal :min huruf.',
        'array' => ':attribute harus at least :min items.',
    ],
    'not_in' => 'The selec:attribute is invalid.',
    'not_regex' => ':attribute format is invalid.',
    'numeric' => ':attribute harus a number.',
    'password' => 'Password salah',
    'present' => ':attribute field must be present.',
    'regex' => ':attribute format is invalid.',
    'required' => ':attribute harus diisi',
    'required_if' => ':attribute field is required when :other is :value.',
    'required_unless' => ':attribute field is required unless :other is in :values.',
    'required_with' => ':attribute field is required when :values is present.',
    'required_with_all' => ':attribute field is required when :values are present.',
    'required_without' => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'same' => ':attribute and :other must match.',
    'size' => [
        'numeric' => ':attribute harus :size.',
        'file' => ':attribute harus :size kilobytes.',
        'string' => ':attribute harus :size characters.',
        'array' => ':attribute harus :size items.',
    ],
    'starts_with' => ':attribute harus with one of the following: :values.',
    'string' => ':attribute harus a string.',
    'timezone' => ':attribute harus a valid zone.',
    'unique' => ':attribute has already been taken.',
    'uploaded' => ':attribute failed to upload.',
    'url' => ':attribute format is invalid.',
    'uuid' => ':attribute harus a valid UUID.',

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
