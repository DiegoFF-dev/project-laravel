@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
{{ config('app.name') }}
@endcomponent
@endslot

![Logo de Programación y más][logo]

{{-- Body --}}
<h2> Informações sobre o acampamento </h2>
<hr>
<p>Seja Bem vindo, <b>{{$request->name}}</b> ao Treinamento de Liderança, O Profeta e o Gestor!</p>
<p>A seguir, algumas informações importantes e relevantes sobre o treinamento. </p>
<p>
    Saída prevista as 14:00hrs do dia 15 de Maio, da nossa sede que fica no seguinte endereço:
    <br>
    Rua Nova Aurora, 1340 - Sítio Cercado / Curitiba - PR <a href='https://goo.gl/maps/YTHRUU7sunMjUH7XA'> (Clique
        Aqui
        para Abrir no Google Maps) </a>
    <br>
    Retorno no dia 17 de Maio, previsto para as 16:00 hrs no mesmo local.
    <br>
    <br>
    O treinamento acontecerá na Cidade de Contenda - PR
    <br>
    <br>
    Não poderá ir com o veículo para o local onde será realizado o treinamento, todos irão juntos, de Onibus.
    <br>
    <br>
    Para o bom andamento do treinamento, é bom que todos levem os seguintes materiais:
</p>
<ul class='a'>
    <li>Bota</li>
    <li>Capa de chuva</li>
    <li>Lanterna</li>
    <li>Repelente</li>
    <li>Protetor solar</li>
    <li>Roupas leves e confortáveis</li>
    <li>Produtos de higiene pessoal</li>
    <li><b>Colchonete/ lençol</b></li>
    <li>2 Sacos de lixo</li>
</ul>
<p>
    Qual dúvida estaremos á disposição para eventuais esclarecimentos!
    <br>
    <br>
    Até breve...
</p>
@component('mail::button', ['url' =>
'https://wa.me/5541985227055?text=Olá,%20gostaria%20de%20saber%20mais%20informações%20sobre%20o%20acampamento?', 'color'
=> 'success'])
Entrar em contato
@endcomponent



{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados.

@endcomponent
@endslot

[logo]: https://programacionymas.com/images/mago/mago-200x200.png
@endcomponent