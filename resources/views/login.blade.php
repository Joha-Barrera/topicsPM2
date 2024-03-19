<x-layout>
    <!-- Be present above all else. - Naval Ravikant -->
    <h1> Log In</h1>
<form action="/login" method="POST">
    @csrf
</div>
<div>
    <x-layout tittle="Email" type="text" nombre="email"/>
    @error('email')
    <p> {{$message}}</p>
    @enderror
</div>
<div>
    <x-layout tittle="password" type="text" nombre="password"/>
     @error('password')
    <p> {{$message}}</p>
    @enderror
</div>
<button type="submit" class="text-x1 border p-6">Log in</button>
</form>
</x-layout>
