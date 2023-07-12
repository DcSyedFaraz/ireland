@extends('layouts.web')

@section('title', 'Revision Policy')
@section('description', '')
@section('canonical', config('app.url') . Request::path())

@section('content')

    <main class="container my-6 mx-auto px-10">
        <section class="typo">
            <h1>Revisions Policy</h1>

            <p>
                Revisions are only allowed if:
            </p>
            <ul>
                <li>
                    The comments and changes asked by the instructor is shared within 30 days of the assignment submission
                </li>
                <li>
                    We will do the revision (within 24 hours) if the mistake is from any of our writers, or if plagiarism is
                    found in our work
                </li>
                <li>
                    We are not responsible for the revision if customer has failed to provide any information which was
                    necessary to be the part of the assignment
                </li>
                <li>
                    There is total 3 chances for revision, client must ensure that everything is clear first time
                </li>
            </ul>
        </section>
    </main>
@endsection
