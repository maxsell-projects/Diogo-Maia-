@component('mail::message')
# Novo Pedido de Consultoria

Olá, **Diogo Maia**, você recebeu um novo contacto através do seu website oficial. Aqui estão os detalhes capturados:

@component('mail::table')
| Campo | Informação |
| :--- | :--- |
| **Nome** | {{ $data['name'] }} |
| **Assunto** | {{ $data['subject'] }} |
| **Telefone** | {{ $data['phone'] ?? 'Não informado' }} |
| **Email** | [{{ $data['email'] }}](mailto:{{ $data['email'] }}) |
@endcomponent

### Mensagem do Cliente:
@component('mail::panel')
{{ $data['message'] }}
@endcomponent

---

@component('mail::button', ['url' => 'mailto:' . $data['email'], 'color' => 'success'])
Responder ao Cliente Agora
@endcomponent
