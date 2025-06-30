@extends('layouts.base')

@section('title', $pensee->titre)

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h1 class="h3 mb-0">{{ $pensee->titre }}</h1>
                            <span class="badge bg-primary">{{ $pensee->created_at->format('d/m/Y') }}</span>
                        </div>
                        <div class="bible-verse bg-light p-4 mb-4 rounded">
                            <i class="bi bi-quote text-primary fs-1"></i>
                            <blockquote class="mb-0 fs-5">{{ $pensee->contenu }}</blockquote>
                            <footer class="blockquote-footer mt-2">{{ $pensee->verset }}</footer>
                        </div>

                        <div class="pensee-content mb-4">
                            {!! $pensee->exhortation !!}
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="share-buttons">
                                <a href="#" class="btn btn-sm btn-outline-secondary me-2">
                                    <i class="bi bi-heart"></i> 24
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-secondary me-2">
                                    <i class="bi bi-chat"></i> 5
                                </a>
                            </div>

                            <div>
                                <a href="#" class="btn btn-sm btn-outline-primary me-2">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-primary me-2">
                                    <i class="bi bi-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-share"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('pensees.index') }}" class="btn btn-primary">
                        <i class="bi bi-arrow-left"></i> Retour aux pensées
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .bible-verse {
            font-style: italic;
            border-left: 3px solid #3a7bd5;
            padding-left: 15px;
            margin: 20px 0;
            position: relative;
        }

        .bible-verse i.bi-quote {
            position: absolute;
            top: -10px;
            left: -5px;
            opacity: 0.2;
            font-size: 3rem;
        }

        .pensee-content {
            line-height: 1.8;
            font-size: 1.1rem;
        }

        .pensee-content p {
            margin-bottom: 1.5rem;
        }
    </style>
@endsection
