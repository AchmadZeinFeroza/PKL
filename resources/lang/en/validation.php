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

    'accepted' => 'The :attribute harus diterima.',
    'active_url' => 'The :attribute bukan URL yang valid.',
    'after' => 'The :attribute harus tanggal setelah :Date',
    'after_or_equal' => 'The :attribute harus tanggal setelah atau sama dengan :Date',
    'alpha' => 'The :attribute hanya dapat berisi huruf.',
    'alpha_dash' => 'The :attribute hanya dapat berisi huruf, angka, tanda hubung dan garis bawah.',
    'alpha_num' => 'The :attribute hanya dapat berisi huruf dan angka.',
    'array' => 'The :attribute harus array.',
    'before' => 'The :attribute harus tanggal sebelum :Date',
    'before_or_equal' => 'The :attribute harus tanggal sebelum atau sama dengan :Date',
    'between' => [
        'numeric' => 'The :attribute harus antara :min dan :.Max',
        'file' => 'The :attribute harus antara :min dan :.Kilobyte max',
        'string' => 'The :attribute harus antara :min dan .Karakter max',
        'array' => 'The :attribute harus memiliki antara :min dan :.Item max',
    ],
    'boolean' => 'The :field attribute harus benar atau salah.',
    'confirmed' => 'The :konfirmasi attribute tidak cocok.',
    'date' => 'The :attribute bukan tanggal yang valid.',
    'date_equals' => 'The :attribute harus tanggal sama untuk:. Date',
    'date_format' => 'The :attribute tidak sesuai format :Format.',
    'different' => 'The :attribute dan :lainnya harus berbeda.',
    'digits' => 'The :attribute harus :digits angka.',
    'digits_between' => 'The :attribute harus antara :min dan:. Max digit',
    'dimensions' => 'The :attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => 'The :field attribute memiliki duplikat nilai.',
    'email' => 'The :attribute harus alamat email yang valid.',
    'ends_with' => 'The :attribute harus diakhiri dengan salah satu berikut: :nilai-nilai',
    'exists' => 'Dipilih The :attribute tidak valid.',
    'file' => 'The :attribute harus file.',
    'filled' => 'The :field attribute harus memiliki nilai.',
    'gt' => [
        'numeric' => 'The :attribute harus lebih besar dari:. Value',
        'file' => 'The :attribute harus lebih besar dari:. Nilai kilobyte',
        'string' => 'The :attribute harus lebih besar dari:. Karakter value',
        'array' => 'The :attribute harus memiliki lebih dari :nilai item.',
    ],
    'gte' => [
        'numeric' => 'The :attribute harus lebih besar dari atau sama:. Value',
        'file' => 'The :attribute harus lebih besar dari atau sama :nilai kilobyte.',
        'string' => 'The :attribute harus lebih besar dari atau sama:. Karakter value',
        'array' => 'The :attribute harus memiliki :nilai barang atau lebih.',
    ],
    'image' => 'The :attribute harus gambar.',
    'in' => 'Dipilih The :attribute tidak valid.',
    'in_array' => 'The :field attribute tidak ada di:. Lain',
    'integer' => 'The :attribute harus integer.',
    'ip' => 'The :attribute harus alamat IP yang valid.',
    'ipv4' => 'The :attribute harus alamat IPv4 yang valid.',
    'ipv6' => 'The :attribute harus alamat IPv6 valid.',
    'json' => 'The :attribute harus menjadi JSON string yang valid.',
    'lt' => [
        'numeric' => 'The :attribute harus kurang dari:. Value',
        'file' => 'The :attribute harus kurang dari:. Kilobyte value',
        'string' => 'The :attribute harus kurang dari:. Karakter value',
        'array' => 'The :attribute harus memiliki kurang dari :nilai item.',
    ],
    'lte' => [
        'numeric' => 'The :attribute harus kurang dari atau sama:. Value',
        'file' => 'The :attribute harus kurang dari atau sama:. Kilobyte value',
        'string' => 'The :attribute harus kurang dari atau sama:. Karakter value',
        'array' => 'The :attribute tidak harus memiliki lebih dari:. Item value',
    ],
    'max' => [
        'numeric' => 'The :attribute mungkin tidak lebih besar dari:. Max',
        'file' => 'The :attribute mungkin tidak lebih besar dari:. Kilobyte max',
        'string' => 'The :attribute mungkin tidak lebih besar dari:. Karakter max',
        'array' => 'The :attribute mungkin tidak memiliki lebih dari:. Item max',
    ],
    'mimes' => 'The :attribute harus file type: :values.',
    'mimetypes' => 'The :attribute harus file type: :values.',
    'min' => [
        'numeric' => 'The :attribute harus minimal :min.',
        'file' => 'The :attribute harus minimal :min kilobyte.',
        'string' => 'The :attribute harus minimal :min karakter.',
        'array' => 'The :attribute harus memiliki setidaknya :min item.',
    ],
    'not_in' => 'Dipilih The :attribute tidak valid.',
    'not_regex' => 'The :Format attribute tidak valid.',
    'numeric' => 'The :attribute harus berupa angka.',
    'password' => 'Password tidak benar.',
    'present' => 'The :Bidang attribute harus hadir.',
    'regex' => 'The :Format attribute tidak valid.',
    'required' => 'The :field attribute diperlukan.',
    'required_if' => 'The :field attribute diperlukan bila :lainnya adalah:. Value',
    'required_unless' => 'The :field attribute diperlukan kecuali :lainnya adalah di:. Nilai-nilai',
    'required_with' => 'The :field attribute diperlukan bila :nilai-nilai hadir.',
    'required_with_all' => 'The :field attribute diperlukan bila :nilai-nilai yang hadir.',
    'required_without' => 'The :field attribute diperlukan bila :nilai-nilai tidak hadir.',
    'required_without_all' => 'The :field attribute diperlukan bila tidak ada :nilai-nilai yang hadir.',
    'same' => 'The :attribute dan :pertandingan harus lainnya.',
    'size' => [
        'numeric' => 'The :attribute harus :ukuran.',
        'file' => 'The :attribute harus :ukuran kilobyte.',
        'string' => 'The :attribute harus :karakter ukuran.',
        'array' => 'The :attribute harus berisi :item ukuran.',
    ],
    'starts_with' => 'The :attribute harus dimulai dengan salah satu berikut: :nilai-nilai',
    'string' => 'The :attribute harus string.',
    'timezone' => 'The :attribute harus zona valid.',
    'unique' => 'The :attribute sudah diambil.',
    'uploaded' => 'The :attribute gagal untuk meng-upload.',
    'url' => 'The :Format attribute tidak valid.',
    'uuid' => 'The :attribute harus menjadi UUID valid.',

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
