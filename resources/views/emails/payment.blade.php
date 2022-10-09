<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Payment received</title>
</head>

<body>

    <h1>
        Payment received:

    </h1>
<h2>

    Stichting Hak Der Uitvaartfonds | Betaling ontvangen
</h2>

<p>Beste {{ $name }},</p>

<p>Hierbij willen wij u laten weten dat de betaling voor {{ $price }} is ontvangen.</p>
<p>
<p>Bekijk uw factuur in het portaal.</p>

<a href="{{ route('login') }}" target="_blank" rel="noopener noreferrer">login</a>

<p>Met vriendelijke groet,</p>
<p>Stichting Hak Der Uitvaartfonds</p>
<a href="uitvaart@hakder.nl">uitvaart@hakder.nl</a>

<p>+31 6 38 37 06 06</p>
<a href="www.uitvaarthakder.nl">www.uitvaarthakder.nl</a>



<hr>


<p>
    Sevgili {{ $name }},
</p> 
<p>

    {{ $price }} için ödemenin alındığını size bildirmek isteriz.
</p>
<p>

    Faturanızı portalda görüntüleyin.
</p>

<a href="{{ route('login') }}" target="_blank" rel="noopener noreferrer">login</a>

<p>

    İçtenlikle,
</p>
<p>

    Stichting Hak Der Uitvaartfonds
</p>
<a href="uitvaart@hakder.nl">uitvaart@hakder.nl</a>
<p>
    +31 6 38 37 06 06

</p>

<a href="www.uitvaarthakder.nl">www.uitvaarthakder.nl</a>


</body>

</html>
