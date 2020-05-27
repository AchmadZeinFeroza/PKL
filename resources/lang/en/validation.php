<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    |  following language lines contain  default error messages used by
    |  validator class. Some of se rules have multiple versions such
    | as  size rules. Feel free to tweak each of se messages here.
    |
    */

    'accepted' => ' :attribute harus diterima.',
    'active_url' => ' :attribute bukan URL yang valid.',
    'after' => ' :attribute harus tanggal setelah :Date',
    'after_or_equal' => ' :attribute harus tanggal setelah atau sama dengan :Date',
    'alpha' => ' :attribute hanya dapat berisi huruf.',
    'alpha_dash' => ' :attribute hanya dapat berisi huruf, angka, tanda hubung dan garis bawah.',
    'alpha_num' => ' :attribute hanya dapat berisi huruf dan angka.',
    'array' => ' :attribute harus array.',
    'before' => ' :attribute harus tanggal sebelum :Date',
    'before_or_equal' => ' :attribute harus tanggal sebelum atau sama dengan :Date',
    'between' => [
        'numeric' => ' :attribute harus antara :min dan :max',
        'file' => ' :attribute harus antara :min dan :max Kilobyte',
        'string' => ' :attribute harus antara :min dan :max Karakter',
        'array' => ' :attribute harus memiliki antara :min dan :max Item',
    ],
    'boolean' => ' :attribute harus benar atau salah.',
    'confirmed' => ' :konfirmasi attribute tidak cocok.',
    'date' => ' :attribute bukan tanggal yang valid.',
    'date_equals' => ' :attribute harus tanggal sama untuk:. Date',
    'date_format' => ' :attribute tidak sesuai format :Format.',
    'different' => ' :attribute dan :lainnya harus berbeda.',
    'digits' => ' :attribute harus :digits angka.',
    'digits_between' => ' :attribute harus antara :min dan:. Max digit',
    'dimensions' => ' :attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => ' :attribute memiliki duplikat nilai.',
    'email' => ' :attribute harus alamat email yang valid.',
    'ends_with' => ' :attribute harus diakhiri dengan salah satu berikut: :nilai-nilai',
    'exists' => 'Dipilih  :attribute tidak valid.',
    'file' => ' :attribute harus file.',
    'filled' => ' :attribute harus memiliki nilai.',
    'gt' => [
        'numeric' => ' :attribute harus lebih besar dari:. Value',
        'file' => ' :attribute harus lebih besar dari:. Nilai kilobyte',
        'string' => ' :attribute harus lebih besar dari:. Karakter value',
        'array' => ' :attribute harus memiliki lebih dari :nilai item.',
    ],
    'gte' => [
        'numeric' => ' :attribute harus lebih besar dari atau sama:. Value',
        'file' => ' :attribute harus lebih besar dari atau sama :nilai kilobyte.',
        'string' => ' :attribute harus lebih besar dari atau sama:. Karakter value',
        'array' => ' :attribute harus memiliki :nilai barang atau lebih.',
    ],
    'image' => ' :attribute harus gambar.',
    'in' => 'Dipilih  :attribute tidak valid.',
    'in_array' => ' :attribute tidak ada di:. Lain',
    'integer' => ' :attribute harus integer.',
    'ip' => ' :attribute harus alamat IP yang valid.',
    'ipv4' => ' :attribute harus alamat IPv4 yang valid.',
    'ipv6' => ' :attribute harus alamat IPv6 valid.',
    'json' => ' :attribute harus menjadi JSON string yang valid.',
    'lt' => [
        'numeric' => ' :attribute harus kurang dari:. Value',
        'file' => ' :attribute harus kurang dari:. Kilobyte value',
        'string' => ' :attribute harus kurang dari:. Karakter value',
        'array' => ' :attribute harus memiliki kurang dari :nilai item.',
    ],
    'lte' => [
        'numeric' => ' :attribute harus kurang dari atau sama:. Value',
        'file' => ' :attribute harus kurang dari atau sama:. Kilobyte value',
        'string' => ' :attribute harus kurang dari atau sama:. Karakter value',
        'array' => ' :attribute tidak harus memiliki lebih dari:. Item value',
    ],
    'max' => [
        'numeric' => ' :attribute mungkin tidak lebih besar dari:. Max',
        'file' => ' :attribute mungkin tidak lebih besar dari:. Kilobyte max',
        'string' => ' :attribute mungkin tidak lebih besar dari:. Karakter max',
        'array' => ' :attribute mungkin tidak memiliki lebih dari:. Item max',
    ],
    'mimes' => ' :attribute harus file type: :values.',
    'mimetypes' => ' :attribute harus file type: :values.',
    'min' => [
        'numeric' => ' :attribute harus minimal :min.',
        'file' => ' :attribute harus minimal :min kilobyte.',
        'string' => ' :attribute harus minimal :min karakter.',
        'array' => ' :attribute harus memiliki setidaknya :min item.',
    ],
    'not_in' => 'Dipilih  :attribute tidak valid.',
    'not_regex' => ' :Format attribute tidak valid.',
    'numeric' => ' :attribute harus berupa angka.',
    'password' => 'Password tidak benar.',
    'present' => ' :Bidang attribute harus hadir.',
    'regex' => ' :Format attribute tidak valid.',
    'required' => ' :attribute diperlukan.',
    'required_if' => ' :attribute diperlukan bila :lainnya adalah:. Value',
    'required_unless' => ' :attribute diperlukan kecuali :lainnya adalah di:. Nilai-nilai',
    'required_with' => ' :attribute diperlukan bila :nilai-nilai hadir.',
    'required_with_all' => ' :attribute diperlukan bila :nilai-nilai yang hadir.',
    'required_without' => ' :attribute diperlukan bila :nilai-nilai tidak hadir.',
    'required_without_all' => ' :attribute diperlukan bila tidak ada :nilai-nilai yang hadir.',
    'same' => ' :attribute dan :pertandingan harus lainnya.',
    'size' => [
        'numeric' => ' :attribute harus :size',
        'file' => ' :attribute harus :size kilobyte.',
        'string' => ' :attribute harus :size ukuran.',
        'array' => ' :attribute harus berisi :size ukuran.',
    ],
    'starts_with' => ' :attribute harus dimulai dengan salah satu berikut: :nilai-nilai',
    'string' => ' :attribute harus string.',
    'timezone' => ' :attribute harus zona valid.',
    'unique' => ' :attribute sudah diambil.',
    'uploaded' => ' :attribute gagal untuk meng-upload.',
    'url' => ' :Format attribute tidak valid.',
    'uuid' => ' :attribute harus menjadi UUID valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using 
    | convention "attribute.rule" to name  lines. This makes it quick to
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
    |  following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
