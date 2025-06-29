@props(['employer', 'width' => '90'])
<img src="{{ (strpos($employer->logo, 'http') === 0) ? $employer->logo : Storage::url($employer->logo) }}" width="{{ $width}}" alt="" class="rounded-xl" />