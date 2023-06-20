@extends('layouts.app')

@section('title')
    table | {{ config('app.name') }}
@endsection

@section('content')
    <main class="page-main">
        <div class="container main-container">

            <table class="table">
                <thead class="table-header">
                    <tr class="table-row">
                        <th class="table-cell header-cell">項目1</th>
                        <th class="table-cell header-cell">項目2</th>
                        <th class="table-cell header-cell">項目3</th>
                        <th class="table-cell header-cell">項目4</th>
                    </tr>
                </thead>
                <tbody class="table-body">

                    @for ($i = 0; $i < 15; $i++)
                    <tr class="table-row">
                        <td class="table-cell">データ</td>
                        <td class="table-cell">データ</td>
                        <td class="table-cell">データ</td>
                        <td class="table-cell">データ</td>
                    </tr>
                    @endfor

                </tbody>
            </table>

        </div>
    </main>
@endsection
