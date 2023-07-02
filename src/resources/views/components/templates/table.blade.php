@extends('layouts.app')

@section('title')
    Table | {{ config('app.name') }}
@endsection

@section('content')
    <main class="page-main">
        <div class="main-container">

            <table class="table">
                <thead class="table-header">
                    <tr class="table-row">
                        @for ($j = 0; $j < 5; $j++)
                        <th class="th-cell">項目{{$j+1}}</th>
                        @endfor
                    </tr>
                </thead>
                <tbody class="table-body">
                    @for ($i = 0; $i < 20; $i++)
                    <tr class="table-row">
                        @for ($j = 0; $j < 5; $j++)
                        <td class="td-cell">row:{{$i + 1}} - col:{{$j + 1}}</td>
                        @endfor
                    </tr>
                    @endfor
                </tbody>
            </table>

        </div>
    </main>
@endsection
