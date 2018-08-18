<?php

return [
    'required' => ':attribute không được để trống',
    'numeric' => ':attribute phải là số',
    'integer' => ':attribute phải là số nguyên',
    'min' => [
        'numeric' => ':attribute phải lớn hơn :min.',
        'file'    => ':attribute phải lớn hơn hoặc bằng :min kilobytes.',
        'string'  => ':attribute phải lớn hơn hoặc bằng :min ký tự.',
        'array'   => ':attribute ít nhất :min phần tử.',
    ],
    'max' => [
        'numeric' => ':attribute phải bé hơn :max.',
        'file'    => ':attribute phải bé hơn hoặc bằng :max kilobytes.',
        'string'  => ':attribute phải bé hơn hoặc bằng :max ký tự.',
        'array'   => ':attribute nhiều nhất :max phần tử.',
    ],
    'email' => ':attribute phải đúng định dạng.',
    'unique'               => ':attribute đã tồn tại.',
    'attributes' => [
        'name' => 'Tên',
        'price' => 'Giá',
        'discount' => 'Giảm giá',
        'description' => 'Mô tả',
        'email' => 'Email',
        'phone' => 'Số điện thoại',
        'address' => 'Địa chỉ',
    ]
];
