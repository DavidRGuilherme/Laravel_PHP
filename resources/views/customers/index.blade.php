
  @extends('layouts.index')
  @section('content')
  <h1> Customers </h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Cpf/Cnpj</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->cpf_cnpj }}</td>
                    <td>{{ $customer->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
{{ $customers->links()}}
@endsection
