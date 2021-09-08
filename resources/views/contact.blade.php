<x-app-layout title="Contact Page">
    <h1>contact</h1>

    <form action="/contact/store" method="post">
    @csrf


    <button type="submit">submit</button>
    </form>
</x-app-layout>