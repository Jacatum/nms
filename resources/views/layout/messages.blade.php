@if (\Session::has('success'))
<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    @if (is_array(session('success')))
    <ul class="mb-0">
        @foreach (session('success') as $message)
        @if ($message)
        <li>{{ $message }}</li>
        @endif
        @endforeach
    </ul>
    @else
    {{ \Session::get('success') }}
    @endif
</div>
@endif