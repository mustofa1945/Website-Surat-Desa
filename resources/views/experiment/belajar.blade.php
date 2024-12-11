<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    @php
    $isActive = true;
@endphp
 
<span @style([
    'background-color: blue',
    'font-weight: bold' => $isActive,
])>halo</span>
 
<span style="background-color: red; font-weight: bold;">halo</span>


    <script>
        const data = {{ Js::from($array) }}
        console.log(data.name)
    </script>
</body>

</html>
