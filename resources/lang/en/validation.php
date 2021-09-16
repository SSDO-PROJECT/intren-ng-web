<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute must be accepted.',
    'active_url' => ':attribute is not a valid URL.',
    'after' => ':attribute must date after :date.',
    'after_or_equal' => ':attribute must tanggal setelah atau sama dengan :date.',
    'alpha' => ':attribute hanya boleh berisi huruf.',
    'alpha_dash' => ':attribute hanya boleh berisi huruf, angka, dan strip.',
    'alpha_num' => ':attribute hanya boleh berisi huruf dan angka.',
    'array' => ':attribute must berupa sebuah array.',
    'before' => ':attribute must tanggal sebelum :date.',
    'before_or_equal' => ':attribute must tanggal sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => ':attribute must antara :min dan :max.',
        'file' => ':attribute must antara :min dan :max kilobytes.',
        'string' => ':attribute must antara :min dan :max karakter.',
        'array' => ':attribute must antara :min dan :max item.',
    ],
    'boolean' => ':attribute must berupa true atau false',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
    'date' => ':attribute bukan tanggal yang valid.',
    'date_equals' => ':attribute must tanggal yang sama dengan :date.',
    'date_format' => ':attribute tidak cocok dengan format :format.',
    'different' => ':attribute dan :other must berbeda.',
    'digits' => ':attribute must berupa angka :digits.',
    'digits_between' => ':attribute must antara angka :min dan :max.',
    'dimensions' => ':attribute must merupakan dimensi gambar yang sah.',
    'distinct' => ':attribute memiliki nilai yang duplikat.',
    'email' => ':attribute must be a valid email address.',
    'ends_with' => ':attribute must diakhiri dengan: :values.',
    'exists' => ':attribute selected is invalid.',
    'file' => ':attribute must in the form of a file.',
    'filled' => ':attribute required to be filled..',
    'gt' => [
        'numeric' => ':attribute must lebih besar dari :value.',
        'file' => ':attribute must lebih besar dari :value kilobytes.',
        'string' => ':attribute must lebih besar dari :value karakter.',
        'array' => ':attribute must memiliki lebih dari :value item.',
    ],
    'gte' => [
        'numeric' => ':attribute must lebih besar dari atau sama dengan :value.',
        'file' => ':attribute must lebih besar dari atau sama dengan :value kilobytes.',
        'string' => ':attribute must lebih besar dari atau sama dengan :value karakter.',
        'array' => ':attribute must memiliki :value item atau lebih.',
    ],
    'image' => ':attribute must berupa gambar.',
    'in' => ':attribute yang dipilih tidak valid.',
    'in_array' => ':attribute tidak terdapat dalam :other.',
    'integer' => ':attribute must merupakan bilangan bulat.',
    'ip' => ':attribute must berupa alamat IP yang valid.',
    'ipv4' => ':attribute must berupa alamat IPv4 yang valid.',
    'ipv6' => ':attribute must berupa alamat IPv6 yang valid.',
    'json' => ':attribute must berupa JSON string yang valid.',
    'lt' => [
        'numeric' => ':attribute must kurang dari :value.',
        'file' => ':attribute must kurang dari :value kilobytes.',
        'string' => ':attribute must kurang dari :value karakter.',
        'array' => ':attribute must memiliki kurang dari :value item.',
    ],
    'lte' => [
        'numeric' => ':attribute must kurang dari atau sama dengan :value.',
        'file' => ':attribute must kurang dari atau sama dengan :value kilobytes.',
        'string' => ':attribute must kurang dari atau sama dengan :value karakter.',
        'array' => ':attribute tidak boleh lebih dari :value item.',
    ],
    'max' => [
        'numeric' => ':attribute semustnya tidak lebih dari :max.',
        'file' => ':attribute semustnya tidak lebih dari :max kilobytes.',
        'string' => ':attribute semustnya tidak lebih dari :max karakter.',
        'array' => ':attribute semustnya tidak lebih dari :max item.',
    ],
    'mimes' => ':attribute must dokumen berjenis : :values.',
    'mimetypes' => ':attribute must berupa file bertipe: :values.',
    'min' => [
        'numeric' => ':attribute must minimal :min.',
        'file' => ':attribute must minimal :min kilobytes.',
        'string' => ':attribute must minimal :min karakter.',
        'array' => ':attribute must minimal :min item.',
    ],
    'not_in' => ':attribute yang dipilih tidak valid.',
    'not_regex' => ':attribute format tidak valid.',
    'numeric' => ':attribute must berupa angka.',
    'password' => 'Kata sandi tidak benar',
    'present' => ':attribute wajib ada.',
    'regex' => 'Format :attribute tidak valid.',
    'required' => ':attribute required to be filled.',
    'required_if' => ':attribute wajib diisi bila :other adalah :value.',
    'required_unless' => ':attribute wajib diisi kecuali :other memiliki nilai :values.',
    'required_with' => ':attribute wajib diisi bila terdapat :values.',
    'required_with_all' => ':attribute wajib diisi bila terdapat :values.',
    'required_without' => ':attribute wajib diisi bila tidak terdapat :values.',
    'required_without_all' => ':attribute wajib diisi bila tidak terdapat ada :values.',
    'same' => ':attribute dan :other must sama.',
    'size' => [
        'numeric' => ':attribute must berukuran :size.',
        'file' => ':attribute must berukuran :size kilobyte.',
        'string' => ':attribute must berukuran :size karakter.',
        'array' => ':attribute must mengandung :size item.',
    ],
    'starts_with' => ':attribute must dimulai dengan: :values.',
    'string' => ':attribute must berupa string.',
    'timezone' => ':attribute must berupa zona waktu yang valid.',
    'unique' => ':attribute sudah ada sebelumnya.',
    'uploaded' => ':attribute gagal mengunggah.',
    'url' => 'Format :attribute tidak valid.',
    'uuid' => ':attribute must berupa UUID yang valid.',

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
    | The language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        "user.name" => "User Name",
        "user.password_confirmation" => "User Password Confirmation",
        "user.password" => "User Password",
        "user.address" => "User Address",
        "user.phone" => "User Phone",
        "user.email" => "User Email"
    ],

];
