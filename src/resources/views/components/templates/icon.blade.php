@extends('layouts.app')

@section('title')
    icon | {{ config('app.name') }}
@endsection

@section('content')
    <main class="page-main">
        <div class="main-container">

            <div class="title page-title">
                Menu
            </div>

            <div class="icon-block">
                <a href="#" class="icon-link icon-inner">
                    <div class="icon">
                        <span class="material-symbols-outlined">
                            settings
                        </span>
                    </div>
                    <div class="icon-label">
                        設定
                    </div>
                </a>
            </div>

            <div class="icon-block">
                <a href="#" class="icon-link icon-inner">
                    <div class="icon">
                        <span class="material-symbols-outlined">
                            done
                        </span>
                    </div>
                    <div class="icon-label">
                        Done
                    </div>
                </a>
            </div>

        </div>
    </main>
@endsection
