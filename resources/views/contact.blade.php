@extends ('layout')

@section ('content')
    <form method="POST" action="/contact">
        @csrf

        <div class="">
            <label for="email">Email Address</label>
            <input type="text" id="email" name="email">

            @error('email')
                <div class="text-red-500 text-xs">{{ $message }}</div>
            @enderror
            <button type="submit">Email Me</button>

            @if (session('message'))
                <div>
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </form>
@endsection