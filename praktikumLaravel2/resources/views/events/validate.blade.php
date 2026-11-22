<!doctype html>
<html>
    <head>
        <title>Event Validation</title>
    </head>
    <body>
        @include('flash-message')
        <form action="{{ route('validate.event') }}" method="post">
            @csrf
            <input type="text" name="location"><br>
            <input type="text" name="name"><br>
            <input type="submit" value="Validate">
        </form>
    </body>
</html>
