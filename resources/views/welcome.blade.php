<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black">
    <div class="container">
        <h1 class="text-4xl text-center text-primary font-bold">Laravel Components</h1>

        <div class="mt-20 flex flex-col justify-center items-center">
            <x-form.input
                label="Email"
                name="email"
                placeholder="example@mail.com"
            />

            <x-button.submit class="bg-danger hover:bg-danger-hover active:bg-danger mt-5" type="button" name="Submit" />
        </div>
    </div>
</body>
</html>