@if ($errors->any())
    <div {!! $attributes->merge(['class' => 'alert alert-danger dashboard-msg']) !!} role="alert">
        <div class="text-danger dashboard-msg">{{ __('Whoops! Something went wrong.') }}</div>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
