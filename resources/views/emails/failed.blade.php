<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <h1>
      Payment failed    
</h1>

<h2>
    Stichting Hak Der Uitvaartfonds | Betaling mislukt

</h2>

<h1>
    Beste {{ $name }},
</h1>

<p>
    Hierbij willen wij u laten weten dat de betaling voor {{ $price }} is mislukt.

</p>

<p>
    Graag willen wij u erop attenderen dat wij de betaling zo spoedig mogelijk ontvangen.
</p> 

<p>
    Zonder een volledige betaling bent u geen lid meer.
</p>
<p>
    Alvast bedankt.
</p>

<a href="{{ route('login') }}" target="_blank" rel="noopener noreferrer">login</a>

<p>
    Met vriendelijke groet,
</p> 
<p>
    Stichting Hak Der Uitvaartfonds
</p>

<p>
    uitvaart@hakder.nl

</p>
<p>
    +31 6 38 37 06 06
</p>

<a href="www.uitvaarthakder.nl">www.uitvaarthakder.nl</a>

--------------------------------------------------------------------------------------------------

<p>
    Sevgili {{ $name }},
</p>
<p>
    {{ $price }} ödemesinin başarısız olduğunu size bildirmek isteriz.
</p>

<p>
    Ödemeyi en kısa sürede alacağımızı belirtmek isteriz.
</p>

<p>

    Artık tam ödeme yapmadan üye değilsiniz.
</p>

<p>
    Şimdiden teşekkürler.
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
