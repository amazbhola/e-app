@php
    $bgClass = 'bg-violet-700';

    switch ($task->status) {
        case 'active':
            $bgClass = 'bg-violet-700';
            break;
        case 'pending':
            $bgClass = 'bg-orange-700';
            break;
        case 'done':
            $bgClass = 'bg-gray-800';
            break;

        default:
            # code...
            break;
    }
@endphp


<a class="{{$bgClass}} text-gray-100 px-3 py-1 text-xs" href="">{{ $task->status }}</a>
