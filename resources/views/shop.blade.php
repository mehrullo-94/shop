@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <p>{{$adad ?? ' '}}</p>
                @if(count($shops)>0)
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">№</th>
                        <th scope="col">Магазин</th>
                        <th scope="col">Адрес</th>
                        <th scope="col">Группа компании</th>
                        <th scope="col">Действии</th>
                        </tr>
                    </thead>
                    <tbody>
                      @for($i=0; $i < count($shops); $i++)  
                        <tr>
                        <th scope="row">{{$i+1}}</th>
                        <td>{{$shops[$i]->name}}</td>
                        <td>{{$shops[$i]->adress}}</td>
                        <td>{{$shops[$i]->group->name}}</td>
                        <td><a href="/orders/shop/{{$shops[$i]->id}}">Заказы</a></td>
                        </tr>
                      @endfor
                    </tbody>
                </table>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection