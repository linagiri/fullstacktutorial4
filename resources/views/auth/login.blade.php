<x-layouts.app title="Log in">
    <x-page-header title="Log in" description="Sign in to see your tasks" />
    <div class="card">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <x-form.input label="Email" name="email" type="email" />
            <x-form.input label="Password" name="password" type="password" />
            <x-button type="submit">Log in</x-button>
            <a href="{{ route('register') }}" class="btn btn-secondary">Create an account</a>
        </form>
    </div>
</x-layouts.app>