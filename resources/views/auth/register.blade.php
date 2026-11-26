<x-layouts.app title="Register">
    <x-page-header title="Create an account" description="Register to manage your own tasks" />
    <div class="card">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <x-form.input label="Name" name="name" />
            <x-form.input label="Email" name="email" type="email" />
            <x-form.input label="Password" name="password" type="password" />
            <x-form.input label="Confirm Password" name="password_confirmation" type="password" />
            <x-button type="submit">Register</x-button>
            <a href="{{ route('login') }}" class="btn btn-secondary">I already have an account</a>
        </form>
    </div>
</x-layouts.app>