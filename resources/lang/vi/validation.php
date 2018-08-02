<?php

return [
    'required' => ':attribute không được để trống',
    'min' => [
        'numeric' => ':attribute phải lớn hơn hoặc 3 :min.',
        'file'    => ':attribute phải lớn hơn hoặc bằng :min kilobytes.',
        'string'  => ':attribute phải lớn hơn hoặc bằng :min ký tự.',
        'array'   => ':attribute ít nhất :min phần tử.',
    ],
    'attributes' => [
        'name' => 'Tên'
    ]
];
