{{-- 初期値を設定 --}}
@props([
    'title' => '',
    'message' => '',
    'content' =>  ''
])
{{-- cssの引き渡しを設定 --}}
<div {{ $attributes->merge([
 'class' => "broder-2 shadow-md w-1/4 p-2"
]) }}>
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>
