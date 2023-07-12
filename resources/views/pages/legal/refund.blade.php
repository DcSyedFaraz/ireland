@extends('layouts.web')

@section('title', 'Refund Policy')
@section('description', '')
@section('canonical', config('app.url') . Request::path())

@section('content')

    <main class="container my-6 mx-auto px-10">
        <section class="typo">

            <h1>Refund Policy</h1>

            <p>We know how our customers’ money and time is important for them. First of all, we dedicatedly work to provide
                best work to our customers. Still if there is some lacking in the assignment
                we take some time for revision and do our best overcome the lacking in the assignment. At the end, seeing
                the reports and results still we couldn’t satisfy our customers so we go for our refund policy.</p>
            <h2>The Time Limits</h2>
            <p>All the given below points are followed when the issue is addressed on time, that is within 7 days. However,
                customers while waiting for their results should share with us the correct result dates.</p>
            <h2>Refund Policy Followed By Given Rules</h2>
            <ul>
                <li>
                    If the assignment isn't matching the requirements.
                </li>
                <li>
                    The quality isn’t matched.
                </li>
                <li>
                    The assignment completed has more plagiarism than the university standards.
                </li>
                <li>
                    We always ensure that our students never fail in any of the subject or get failing
                    marks. But due to some reasons if it happens we do refund the 60% back, but for this authentic
                    university report should be shared with assignmentwritingireland.
                </li>
                <li>
                    In case you shared the case to a third party earlier informing us about the matter, it will be
                    considered as a breach of contract.
                </li>
            </ul>

        </section>
    </main>

@endsection
