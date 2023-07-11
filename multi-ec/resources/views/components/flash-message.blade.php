@props([ 'status' => 'info']);

@php
if($status === 'info'){ $bgColor = 'bg-bule-300';}
if($status === 'error'){ $bgColor = 'bg-bule-500';}
@endphp
@if(session('message'))
    <div class="{{ $bgColor }} w-1/2 mx-auto p-2">
        {{ session('message')}}
    </div>
@endif
