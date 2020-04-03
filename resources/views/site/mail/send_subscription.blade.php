@component('mail::message')
<h3> Ficha de inscrição </h3>
@component('mail::table')
| Formulário            | Resposta                          |
| ------------------    |:---------------------------------:|
| Nome                  | {{$request->name}}                |
| Aniversário           | {{$request->birthday}}            |
| Email                 | {{$request->email}}                |
| Telefone              | {{$request->phone}}               |
| Estado Civil          | {{$request->marital_status}}      |
| Filhos                | {{$request->children}}            |
| Empresa               | {{$request->enterprise}}          |
| Função                | {{$request->role}}                |
| Endereço              | {{$request->address}}             |
| Número                | {{$request->number}}              |
| Forma de Pagamento    | {{$request->pay}}
| Formação Acadêmica    | {{$request->academic_education}}  |
| Necessidade Especial  | {{$request->special_needs}}       |
| Alimentação           | {{$request->food}}                |
| Alergia               | {{$request->allergy}}             |
| Mensagem              | {{$request->message}}             |
| Data                  | {{$data}}                         |
@endcomponent

@component('mail::button', ['url' => 'https://www.oprofetaeogestor.com.br', 'color' => 'success'])
Gerenciar
@endcomponent
@endcomponent